<?php
/**
 * Registration Model
 * Handles database operations for participant registrations.
 */

require_once CORE_PATH . '/Database.php';

class Registration
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Create a new registration record.
     */
    public function create(array $data): bool
    {
        $sql = "INSERT INTO register (name, email, contact, college_name, faculty, batch, event, image, voucher_image) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, [
            $data['name'],
            $data['email'],
            $data['contact'],
            $data['college'],
            $data['faculty'],
            $data['batch'],
            $data['events'],
            $data['photo'] ?? '',
            $data['voucher'] ?? ''
        ]);

        return true;
    }

    /**
     * Get all registrations (for admin dashboard).
     */
    public function getAll(): array
    {
        return $this->db->fetchAll("SELECT * FROM register ORDER BY id DESC");
    }

    /**
     * Get a single registration by ID.
     */
    public function findById(int $id): ?array
    {
        $result = $this->db->fetchOne("SELECT * FROM register WHERE id = ?", [$id]);
        return $result ?: null;
    }

    /**
     * Count total registrations.
     */
    public function count(): int
    {
        $result = $this->db->fetchOne("SELECT COUNT(*) as total FROM register");
        return (int) ($result['total'] ?? 0);
    }
}
