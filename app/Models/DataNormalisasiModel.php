<?php

namespace App\Models;

use CodeIgniter\Model;

class DataNormalisasiModel extends Model
{

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery1 = $this->db->query("SELECT MAX(C1) as maxminK1, MAX(C2) as maxminK2, MAX(C3) as maxminK3, MAX(C4) as maxminK4, MAX(C5) as maxminK5, MAX(C6) as maxminK6 FROM konversi_penilaian");
        $rdataquery1 = $dataquery1->getResult();

        $dataquery2 = $this->db->query("SELECT * FROM konversi_penilaian");
        $rdataquery2 = $dataquery2->getResult();

        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2);
    }
}
