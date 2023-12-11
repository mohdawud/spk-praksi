<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBobotModel extends Model
{


    function __construct()
    {
        $this->db = db_connect();
    }

    //CRUD Data UMKM
    function tampildata_databobot()
    {
        $dataquery = $this->db->query("SELECT * FROM data_bobot");
        return $dataquery->getResult();
    }

    function simpan_formtambah_databobot($tabel, $data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    function get_databobot($id)
    {
        $dataquery = $this->db->query("SELECT * FROM data_bobot WHERE id_bobot=" . $id);
        return $dataquery->getResult();
    }

    function prosesedit_databobot($tabel, $data, $where)
    {
        $this->db->table($tabel)->where($where)->update($data); // Memperbaiki query update
        return true;
    }

    function delete_databobot($id)
    {
        $dataquery = $this->db->table('data_bobot')->delete(['id_bobot' => $id]);
        return true;
    }
    //EndCRUD Data UMKM




}
