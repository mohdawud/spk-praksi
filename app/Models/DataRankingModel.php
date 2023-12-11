<?php

namespace App\Models;

use CodeIgniter\Model;

class DataRankingModel extends Model
{

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilranking()
    {
        $dataquery1 = $this->db->query("SELECT MAX(C1) as maxminK1, MAX(C2) as maxminK2, MAX(C3) as maxminK3, MAX(C4) as maxminK4, MAX(C5) as maxminK5, MAX(C6) as maxminK6 FROM konversi_penilaian");
        $rdataquery1 = $dataquery1->getResult();

        $dataquery2 = $this->db->query("SELECT * FROM konversi_penilaian");
        $rdataquery2 = $dataquery2->getResult();

        //proses ambil bobot 
        $dataquery3 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C1'");
        $rdataquery3 = $dataquery3->getResult();
        $dataquery4 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C2'");
        $rdataquery4 = $dataquery4->getResult();
        $dataquery5 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C3'");
        $rdataquery5 = $dataquery5->getResult();
        $dataquery6 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C4'");
        $rdataquery6 = $dataquery6->getResult();
        $dataquery7 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C5'");
        $rdataquery7 = $dataquery7->getResult();
        $dataquery8 = $this->db->query("SELECT nilai_kriteria FROM data_kriteria WHERE kode_kriteria='C6'");
        $rdataquery8 = $dataquery8->getResult();

        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2, 'B1' => $rdataquery3, 'B2' => $rdataquery4, 'B3' => $rdataquery5, 'B4' => $rdataquery6, 'B5' => $rdataquery7, 'B6' => $rdataquery8);
    }
}
