<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDosenModel extends Model
{
    protected $table = 'data_dosen';


    function __construct()
    {
        $this->db = db_connect();
    }

    //CRUD Data UMKM
    function tampildata_datadosen()
    {
        $dataquery = $this->db->query("SELECT * FROM data_dosen");
        return $dataquery->getResult();
    }

    function simpan_formtambah_datadosen($tabel, $data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    function get_datadosen($id)
    {
        $dataquery = $this->db->query("SELECT * FROM data_dosen WHERE id_dosen=" . $id);
        return $dataquery->getResult();
    }

    function prosesedit_datadosen($tabel, $data, $where)
    {
        $this->db->table($tabel)->where($where)->update($data); // Memperbaiki query update
        return true;
    }

    function delete_datadosen($id)
    {
        $dataquery = $this->db->table('data_dosen')->delete(['id_dosen' => $id]);
        return true;
    }
    //EndCRUD Data UMKM

    public function getCount()
    {
        return $this->countAll();
    }
}
