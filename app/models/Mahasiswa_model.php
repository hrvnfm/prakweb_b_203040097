<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


//    private $mhs = [
//        [
//            "nama" => "Hervin Fakhrul",
//            "nrp" => "203040097",
//            "email" => "203040097@mail.unpas.ac.id",
//            "jurusan" => "Teknik Informatika"
//        ],
//        [
//            "nama" => "Muhamad Rizky",
//            "nrp" => "203040043",
//            "email" => "203040043@mail.unpas.ac.id",
//            "jurusan" => "Teknik Informatika"
//        ],
//        [
//            "nama" => "Agam Ramdhan Kamil Atmaja",
//            "nrp" => "203040098",
//            "email" => "203040098@mail.unpas.ac.id",
//            "jurusan" => "Teknik Informatika"
//        ]
//    ];
//


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
