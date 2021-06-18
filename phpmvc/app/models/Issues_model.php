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

    public function tambahIssues($data)
    {   
        $query = "INSERT INTO issues
                    VALUES
                 ('', :judul, :gambar, :paragraf1, :paragraf2, :paragraf3)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('gambar', $_FILES['gambar']['name']);
        $this->db->bind('paragraf1', $data['paragraf1']);
        $this->db->bind('paragraf2', $data['paragraf2']);
        $this->db->bind('paragraf3', $data['paragraf3']);

        // upload gambar
        $gambar = $this->upload();
        if( !$gambar ) {
            return false;
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    private function upload()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        
        // cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu');
                  </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $eksensiGambarValid = ['jpg', 'jpeg', 'png'];
        $eksensiGambar = explode('.', $namaFile);
        $eksensiGambar = strtolower(end($eksensiGambar));
        if( !in_array($eksensiGambar, $eksensiGambarValid) ) {
            echo "<script>
                    alert('yang anda upload bukan gambar');
                  </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        // $namaFileBaru = uniqid();
        // $namaFileBaru .= '.';
        // $namaFileBaru .= $eksensiGambar;

        move_uploaded_file($tmpName, '../public/img/' . $namaFile);
        
        return $namaFile;
    }

    public function hapusIssues($id_issues)
    {
        $query = "DELETE FROM issues WHERE id_issues = :id_issues";
        $this->db->query($query);
        $this->db->bind('id_issues', $id_issues);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahIssues($data)
    {   
        $query = "UPDATE issues SET
                    judul = :judul,
                    paragraf1 = :paragraf1,
                    paragraf2 = :paragraf2,
                    paragraf3 = :paragraf3
                    WHERE id_issues = :id_issues";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        // $this->db->bind('gambar', $_FILES['gambar']['name']);
        $this->db->bind('paragraf1', $data['paragraf1']);
        $this->db->bind('paragraf2', $data['paragraf2']);
        $this->db->bind('paragraf3', $data['paragraf3']);
        $this->db->bind('id_issues', $data['id_issues']);

        // upload gambar
        // $gambar = $this->upload();
        // if( !$gambar ) {
        //     return false;
        // }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariIssues()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM issues WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}