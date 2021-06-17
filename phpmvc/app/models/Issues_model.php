<?php

class  Issues_model {
    private $table = 'issues';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllIssues()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getIssuesById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_issues=:id_issues');
        $this->db->bind('id_issues', $id);
        return $this->db->single();
    }

}