<?php

namespace App\Models;

use CodeIgniter\Model;

class CvModel extends Model
{
    protected $table      = 'cv';
    protected $primaryKey = 'id_cv';
    protected $returnType = 'object';

    protected $allowedFields = [
        'id_cv',
        'nama',
        'tanggal_lahir',
        'email',
        'alamat',
        'agama',
        'jenis_kelamin',
        'hobi',
        'nama_pendidikan',
        'tempat_pendidikan',
        'waktu_pendidikan'
    ];
    public function getAll()
    {
        $builder = $this->db->table('cv');
        $query = $builder->get();

        return $query->getResult();
    }

    // // Validation
    // protected $validationRules = [
    //     'nama' => "required",
    //     'tanggal_lahir' => "required",
    //     'email' => "required",
    //     'alamat' => "required",
    //     'jenis_kelamin' => "required",
    //     'agama' => "required",
    //     'hobi' => "required",
    //     'nama_pendidikan' => "required",
    //     'tempat_pendidikan' => "required",
    //     'waktu_pendidikan' => "required"


    // ];

    // // public function getAll()
    // // {
    // //     $builder = $this->db->table('petugas');
    // //     $query = $builder->get();

    // //     return $query->getResult();

    // public function geterror()
    // {
    //     return $this->db->error();
}
