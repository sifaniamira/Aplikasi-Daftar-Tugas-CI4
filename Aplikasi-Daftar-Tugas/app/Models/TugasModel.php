<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table            = 'tb_tugas';
    protected $primaryKey       = 'id_tugas';
    protected $useAutoIncrement = true;
    protected $allowedFields      = ['nama_tugas', 'deskripsi', 'id_jenistugas', 'jenis dokumen', 'deadline'];
    public function getTugas()
    {
        $data_tugas =
            [
                [
                    "nama_tugas" => "Pemrograman Web Framework",
                    "deskripsi" => "Tugas Web Framework pertemuan 1",
                    "jenis_tugas" => "Praktikum",
                    "jenis_dokumen" => "laprak.pdf",
                    "deadline" => "2023-07-19",
                ],

            ];
        return $data_tugas;
    }

    public function getAllDataJoin()
    {
        $query = $this->db->table("tb_tugas")
            ->select("tb_tugas.*, tb_jenistugas.nama_jenistugas")
            ->join("tb_jenistugas", "tb_jenistugas.id_jenistugas = tb_tugas.id_jenistugas");
        return $query->get()->getResultArray();
    }

    public function getAllData()
    {
        return $this->findAll();
    }
}
