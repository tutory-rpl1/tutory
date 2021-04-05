<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db; //
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $nama = htmlspecialchars($data['nama']);
        $nim = htmlspecialchars($data['nim']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $query = "INSERT INTO ". $this->table . 
                    " VALUES
                    ('',:nama, :nim, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('nim', $nim);
        $this->db->bind('email', $email);
        $this->db->bind('jurusan', $jurusan);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM ". $this->table .' WHERE id=:id';
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data){

        $nama = htmlspecialchars($data['nama']);
        $nim = htmlspecialchars($data['nim']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $query = "UPDATE ". $this->table . 
                    " SET
                    nama = :nama,
                    nim = :nim,
                    email = :email,
                    jurusan = :jurusan
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('nim', $nim);
        $this->db->bind('email', $email);
        $this->db->bind('jurusan', $jurusan);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa(){
    
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM ". $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}

?>