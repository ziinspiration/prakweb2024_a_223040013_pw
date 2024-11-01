<?php
class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (id, nama, nrp, email, jurusan) VALUES (NULL, :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nrp', $data['nrp']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        // Pastikan semua data yang diperlukan ada
        if (!isset($data['id'], $data['nama'], $data['nrp'], $data['email'], $data['jurusan'])) {
            throw new Exception("Data tidak lengkap untuk melakukan update");
        }

        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nrp', $data['nrp']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
