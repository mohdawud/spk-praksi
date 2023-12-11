<?php

namespace App\Controllers;

use App\Models\DataBobotModel;
use App\Models\DataDosenModel;
use App\Models\DataKeputusanModel;
use App\Models\DataKriteriaModel;
use App\Models\DataKonversiModel;
use App\Models\DataNormalisasiModel;
use App\Models\DataRankingModel;
use App\Models\UmkmModel;
use Config\Database;

class Home extends BaseController
{


    // Pages
    public function index()
    {
        $datakriteria = new DataKriteriaModel();
        $dataDosenModel = new DataDosenModel();
        $dataKonversiModel = new DataKonversiModel();
        $jumlahDataDosen = $dataDosenModel->getCount();
        $jumlahDataKriteria = $datakriteria->getCount();
        $jumlahDataKonversi = $dataKonversiModel->getCount();



        $data = [
            'tittle' => 'Dashboard',
            'subtittle' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_dashboard',
            'jumlahdatadosen' => $jumlahDataDosen,
            'jumlahdatakriteria' => $jumlahDataKriteria,
            'jumlahdatakonversi' => $jumlahDataKonversi,




        ];
        return view('pages/v_dashboard', $data);
    }












    // endPages







    // Data Dosen

    public function datadosen()
    {

        $datadosen = new DataDosenModel();
        $datadatadosen = $datadosen->tampildata_datadosen();

        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Dosen',
            'menu' => 'masterdata',
            'submenu' => 'datadosen',
            'page' => 'V_datadosen',
            'datadatadosen' => $datadatadosen,

        ];
        echo view('pages/v_datadosen', $data);
    }

    public function formtambah_datadosen()
    {
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Dosen',
            'menu' => 'masterdata',
            'submenu' => 'datadosen',
            'page' => 'v_datadosen',
            'form_tittle' => 'Form Tambah Data Dosen'

        ];

        echo view('pages/v_formtambah_datadosen', $data);
    }

    public function simpan_formtambah_datadosen()
    {
        $nidn = $this->request->getPost('nidn');
        $namadosen = $this->request->getPost('namadosen');
        $periodenilai = $this->request->getPost('periodenilai');
        $semester = $this->request->getPost('semester');

        $data = [
            'nidn' => $nidn,
            'nama_dosen' => $namadosen,
            'periode_nilai' => $periodenilai,
            'semester' => $semester,

        ];

        $datadosen = new DataDosenModel();
        $tabeldatadosen = 'data_dosen';
        $simpan = $datadosen->simpan_formtambah_datadosen($tabeldatadosen, $data);
        return redirect()->to(site_url());
    }

    public function formedit_datadosen($id)
    {
        $datadosen = new DataDosenModel();
        $datadatadosen = $datadosen->get_datadosen($id);
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Dosen',
            'menu' => 'masterdata',
            'submenu' => 'datadosen',
            'page' => 'v_datadosen',
            'form_tittle' => 'Form Edit Data Dosen',
            'datadatadosen' => $datadatadosen
        ];

        echo View('pages/v_formedit_datadosen', $data);
    }

    public function simpan_formedit_datadosen($id)
    {

        $nidn = $this->request->getPost('nidn');
        $namadosen = $this->request->getPost('namadosen');
        $periodenilai = $this->request->getPost('periodenilai');
        $semester = $this->request->getPost('semester');

        $data = [
            'nidn' => $nidn,
            'nama_dosen' => $namadosen,
            'periode_nilai' => $periodenilai,
            'semester' => $semester,
        ];

        $where = ['id_dosen' => $id];

        $datadosen = new DataDosenModel();
        $tabeldatadosen = 'data_dosen';
        $simpan = $datadosen->prosesedit_datadosen($tabeldatadosen, $data, $where);
        return redirect()->to(site_url());
    }

    public function delete_datadosen($id)
    {
        $datadosen = new DataDosenModel();
        $tabeldatadosen = 'data_dosen';
        $delete = $datadosen->delete_datadosen($id);
        return redirect()->to(site_url());
    }

    // End Data Dosen

    //==============================================================

    //Data Kriteria
    public function datakriteria()
    {
        $datakriteria = new DataKriteriaModel();
        $datadatakriteria = $datakriteria->tampildata_datakriteria();

        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Kriteria',
            'menu' => 'masterdata',
            'submenu' => 'datakriteria',
            'page' => 'v_datakriteria',
            'datadatakriteria' => $datadatakriteria,

        ];
        echo view('pages/v_datakriteria', $data);
    }



    public function formtambah_datakriteria()
    {
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Kriteria',
            'menu' => 'masterdata',
            'submenu' => 'datakriteria',
            'page' => 'v_datakriteria',
            'form_tittle' => 'Form Tambah Data Kriteria'

        ];

        echo view('pages/v_formtambah_datakriteria', $data);
    }

    public function simpan_formtambah_datakriteria()
    {
        $kodekriteria = $this->request->getPost('kodekriteria');
        $namakriteria = $this->request->getPost('namakriteria');
        $nilaikriteria = $this->request->getPost('nilaikriteria');
        $tipekriteria = $this->request->getPost('tipekriteria');

        $data = [
            'kode_kriteria' => $kodekriteria,
            'nama_kriteria' => $namakriteria,
            'nilai_kriteria' => $nilaikriteria,
            'tipe_kriteria' => $tipekriteria,

        ];

        $datakriteria = new DataKriteriaModel();
        $tabeldatakriteria = 'data_kriteria';
        $simpan = $datakriteria->simpan_formtambah_datakriteria($tabeldatakriteria, $data);
        return redirect()->to(site_url());
    }

    public function formedit_datakriteria($id)
    {
        $datakriteria = new DataKriteriaModel();
        $datadatakriteria = $datakriteria->get_datakriteria($id);
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Kriteria',
            'menu' => 'masterdata',
            'submenu' => 'datakriteria',
            'page' => 'v_datakriteria',
            'form_tittle' => 'Form Edit Data Kriteria',
            'datadatakriteria' => $datadatakriteria
        ];

        echo View('pages/v_formedit_datakriteria', $data);
    }

    public function simpan_formedit_datakriteria($id)
    {

        $kodekriteria = $this->request->getPost('kodekriteria');
        $namakriteria = $this->request->getPost('namakriteria');
        $nilaikriteria = $this->request->getPost('nilaikriteria');
        $tipekriteria = $this->request->getPost('tipekriteria');

        $data = [
            'kode_kriteria' => $kodekriteria,
            'nama_kriteria' => $namakriteria,
            'nilai_kriteria' => $nilaikriteria,
            'tipe_kriteria' => $tipekriteria,
        ];

        $where = ['id_kriteria' => $id];

        $datakriteria = new DataKriteriaModel();
        $tabeldatakriteria = 'data_kriteria';
        $simpan = $datakriteria->prosesedit_datakriteria($tabeldatakriteria, $data, $where);
        return redirect()->to(site_url());
    }



    public function delete_datakriteria($id)
    {
        $datakriteria = new DataKriteriaModel();
        $tabeldatakriteria = 'data_kriteria';
        $delete = $datakriteria->delete_datakriteria($id);
        return redirect()->to(site_url());
    }

    //End Data Kriteria


    //====================================================================



    //Data Bobot

    public function databobot()
    {

        $databobot = new DataBobotModel();
        $datadatabobot = $databobot->tampildata_databobot();

        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Bobot',
            'menu' => 'masterdata',
            'submenu' => 'databobot',
            'page' => 'v_databobot',
            'datadatabobot' => $datadatabobot,

        ];
        echo view('pages/v_databobot', $data);
    }


    public function formtambah_databobot()
    {
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Bobot',
            'menu' => 'masterdata',
            'submenu' => 'databobot',
            'page' => 'v_databobot',
            'form_tittle' => 'Form Tambah Data Bobot'

        ];

        echo view('pages/v_formtambah_databobot', $data);
    }

    public function simpan_formtambah_databobot()
    {
        $kodekriteria = $this->request->getPost('kodekriteria');
        $namakriteria = $this->request->getPost('namakriteria');
        $namabobot = $this->request->getPost('namabobot');
        $nilaibobot = $this->request->getPost('nilaibobot');

        $data = [
            'kode_kriteria' => $kodekriteria,
            'nama_kriteria' => $namakriteria,
            'nama_bobot' => $namabobot,
            'nilai_bobot' => $nilaibobot,

        ];

        $databobot = new DataBobotModel();
        $tabeldatabobot = 'data_bobot';
        $simpan = $databobot->simpan_formtambah_databobot($tabeldatabobot, $data);
        return redirect()->to(site_url());
    }

    public function formedit_databobot($id)
    {
        $databobot = new DataBobotModel();
        $datadatabobot = $databobot->get_databobot($id);
        $data = [
            'tittle' => 'Master Data',
            'subtittle' => 'Data Bobot',
            'menu' => 'masterdata',
            'submenu' => 'databobot',
            'page' => 'v_databobot',
            'form_tittle' => 'Form Edit Data Bobot',
            'datadatabobot' => $datadatabobot
        ];

        echo View('pages/v_formedit_databobot', $data);
    }

    public function simpan_formedit_databobot($id)
    {

        $kodekriteria = $this->request->getPost('kodekriteria');
        $namakriteria = $this->request->getPost('namakriteria');
        $namabobot = $this->request->getPost('namabobot');
        $nilaibobot = $this->request->getPost('nilaibobot');

        $data = [
            'kode_kriteria' => $kodekriteria,
            'nama_kriteria' => $namakriteria,
            'nama_bobot' => $namabobot,
            'nilai_bobot' => $nilaibobot,
        ];

        $where = ['id_bobot' => $id];

        $databobot = new DataBobotModel();
        $tabeldatabobot = 'data_bobot';
        $simpan = $databobot->prosesedit_databobot($tabeldatabobot, $data, $where);
        return redirect()->to(site_url());
    }



    public function delete_databobot($id)
    {
        $databobot = new DataBobotModel();
        $tabeldatabobot = 'data_bobot';
        $delete = $databobot->delete_databobot($id);
        return redirect()->to(site_url());
    }
    //End Data Bobot


    //Konversi Penilaian

    public function callviewhitung()
    {
        $mb = new DataKonversiModel();
        $datamb = $mb->tampilminmax();
        $data = [
            'tittle' => 'Konversi Penilaian',
            'page' => 'v_hitung',
            'menu' => 'konversipenilaian',
            'submenu' => '',
            'subtittle' => "Tabel Konversi Penilaian",
            'dataMb' => $datamb,
        ];

        echo view('pages/v_hitung', $data);
    }

    //End Konversi Penilaian


    // Normalisasi
    public function callviewnormalisasi()
    {
        $mb = new DataNormalisasiModel();
        $datamb = $mb->tampilnormalisasi();
        $data = [
            'tittle' => 'Normalisasi',
            'page' => 'v_normalisasi',
            'menu' => 'normalisasi',
            'submenu' => '',
            'subtittle' => "Tabel Normalisasi",
            'dataMb' => $datamb,
        ];

        echo view('pages/v_normalisasi', $data);
    }
    // End Normalisasi

    //Perankingan

    public function callviewranking()
    {
        $mb = new DataRankingModel();
        $datamb = $mb->tampilranking();
        $data = [
            'tittle' => 'Perankingan',
            'page' => 'v_ranking',
            'menu' => 'ranking',
            'submenu' => '',
            'subtittle' => "Tabel Ranking",
            'dataMb' => $datamb,
        ];

        echo view('pages/v_ranking', $data);
    }

    //End Perankingan

    //Decision

    // ...

    // Decision
    public function callviewdecision()
    {
        $mb = new DataKeputusanModel();
        $datamb = $mb->tampilkeputusan();

        $jumlahArray = [];

        foreach ($datamb['maxmin'] as $roww) {
            foreach ($datamb['all'] as $row) {
                foreach ($datamb['B1'] as $u) {
                    foreach ($datamb['B2'] as $v) {
                        foreach ($datamb['B3'] as $w) {
                            foreach ($datamb['B4'] as $x) {
                                foreach ($datamb['B5'] as $y) {
                                    foreach ($datamb['B6'] as $z) {
                                        $jumlah = round(($row->C1 / $roww->maxminK1) * $u->nilai_kriteria, 3) +
                                            round(($row->C2 / $roww->maxminK2) * $v->nilai_kriteria, 3) +
                                            round(($row->C3 / $roww->maxminK3) * $w->nilai_kriteria, 3) +
                                            round(($row->C4 / $roww->maxminK4) * $x->nilai_kriteria, 3) +
                                            round(($row->C5 / $roww->maxminK5) * $y->nilai_kriteria, 3) +
                                            round(($row->C6 / $roww->maxminK6) * $z->nilai_kriteria, 3);

                                        $jumlahArray[] = $jumlah;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $data = [
            'tittle' => 'Hasil SPK',
            'page' => 'v_decision',
            'menu' => 'decision',
            'submenu' => '',
            'subtittle' => "Tabel Keputusan",
            'dataMb' => $datamb,
            'jumlah' => $jumlahArray,
        ];

        echo view('pages/v_decision', $data);
    }

    // ...


    //End Decision





    //UMKM


    // public function simpan_formtambah_jenisusaha()
    // {
    //     $jenisusaha = $this->request->getPost('jenisusaha');

    //     $data = [
    //         'jenis_usaha' => $jenisusaha
    //     ];

    //     $jenisusaha = new UmkmModel();
    //     $tabeljenisusaha = 'jenis_usaha';
    //     $simpan = $jenisusaha->simpan_formtambah_jenisusaha($tabeljenisusaha, $data);
    //     return redirect()->to(site_url());
    // }



    // public function simpan_formedit_jenisusaha($id)
    // {

    //     $jenisusaha = $this->request->getPost('jenisusaha');

    //     $data = [
    //         'jenis_usaha' => $jenisusaha
    //     ];

    //     $where = ['kode_jenis_id' => $id];

    //     $jenisusaha = new UmkmModel();
    //     $tabeljenisusaha = 'jenis_usaha';
    //     $simpan = $jenisusaha->prosesedit_jenisusaha($tabeljenisusaha, $data, $where);
    //     return redirect()->to(site_url());
    // }

    // public function delete_jenisusaha($id)
    // {
    //     $jenisusaha = new UmkmModel();
    //     $tabeljenisusaha = 'jenis_usaha';
    //     $delete = $jenisusaha->delete_jenisusaha($id);
    //     return redirect()->to(site_url());
    // }



    //endUMKM





}
