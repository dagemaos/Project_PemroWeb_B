<?php

class  Register_model {
    private $table = 'akun';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahUser($data)
    {
        $query = "INSERT INTO akun
                    VALUES
                 ('', :nama, :username, :password)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();
        return $this->db->rowCount();
    
    }
}

