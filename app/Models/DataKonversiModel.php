<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKonversiModel extends Model
{
    protected $table = 'konversi_penilaian';


    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery = $this->db->query("SELECT * FROM konversi_penilaian");
        return $dataquery->getResult();
    }

    function tampilminmax()
    {
        $dataquery1 = $this->db->query("SELECT MAX(C1) as maxminK1, 
                                                MAX(C2) as maxminK2, 
                                                MAX(C3) as maxminK3, 
                                                MAX(C4) as maxminK4, 
                                                MAX(C5) as maxminK5, 
                                                MAX(C6) as maxminK6 
                                                from konversi_penilaian");
        return $rdataquery1 = $dataquery1->getResult();
    }

    public function getCount()
    {
        return $this->countAll();
    }
}
