<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKriteriaModel extends Model
{
    protected $table = 'data_kriteria';


    function __construct()
    {
        $this->db = db_connect();
    }

    //CRUD Data UMKM
    function tampildata_datakriteria()
    {
        $dataquery = $this->db->query("SELECT * FROM data_kriteria");
        return $dataquery->getResult();
    }

    function simpan_formtambah_datakriteria($tabel, $data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    function get_datakriteria($id)
    {
        $dataquery = $this->db->query("SELECT * FROM data_kriteria WHERE id_kriteria=" . $id);
        return $dataquery->getResult();
    }

    function prosesedit_datakriteria($tabel, $data, $where)
    {
        $this->db->table($tabel)->where($where)->update($data); // Memperbaiki query update
        return true;
    }

    function delete_datakriteria($id)
    {
        $dataquery = $this->db->table('data_kriteria')->delete(['id_kriteria' => $id]);
        return true;
    }
    //EndCRUD Data UMKM


    public function getCount()
    {
        return $this->countAll();
    }
}
