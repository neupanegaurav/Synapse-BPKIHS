#!/bin/bash
set -e

FIRST_INIT=0
if [ ! -d /var/lib/mysql/mysql ]; then
  echo "Initializing MariaDB data directory..."
  mariadb-install-db --user=mysql --datadir=/var/lib/mysql --skip-test-db >/dev/null
  FIRST_INIT=1
fi

mysqld_safe --datadir=/var/lib/mysql &

for i in $(seq 1 30); do
  if mysqladmin ping --silent 2>/dev/null; then
    break
  fi
  sleep 1
done

if [ "$FIRST_INIT" = "1" ]; then
  echo "Switching root@localhost to password auth (empty password) so the app's hardcoded connection works..."
  mysql -uroot <<'SQL'
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;
SQL
fi

if ! mysql -uroot -e "USE ${DB_NAME};" 2>/dev/null; then
  echo "Creating database ${DB_NAME} and importing dump..."
  mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};"
  mysql -uroot "${DB_NAME}" < "/docker-db-init/${DB_DUMP_FILE}"
fi

exec apache2-foreground
