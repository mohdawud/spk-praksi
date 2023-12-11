<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <?= $subtittle; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Home/callviewdecision'); ?>"><?= $tittle; ?></a></li>
                        <li class="breadcrumb-item active"><?= $subtittle; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- <a class="btn btn-primary mb-2" href="/Home/formtambah_datakriteria" role="button">Tambah</a> -->

            <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                    <tr>
                        <th width="20px">No</th>
                        <th width="300px">Nama Dosen</th>
                        <th width="100px">Hasil Nilai</th>
                        <th width="100px">Ranking</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 0;
                    $nilaiArray = []; // Array untuk menyimpan nilai
                    foreach ($dataMb['maxmin'] as $roww) {
                        foreach ($dataMb['all'] as $row) {
                            foreach ($dataMb['B1'] as $u) {
                                foreach ($dataMb['B2'] as $v) {
                                    foreach ($dataMb['B3'] as $w) {
                                        foreach ($dataMb['B4'] as $x) {
                                            foreach ($dataMb['B5'] as $y) {
                                                foreach ($dataMb['B6'] as $z) {
                                                    $no++;
                                                    $jumlah = round(($row->C1 / $roww->maxminK1) * $u->nilai_kriteria, 3) +
                                                        round(($row->C2 / $roww->maxminK2) * $v->nilai_kriteria, 3) +
                                                        round(($row->C3 / $roww->maxminK3) * $w->nilai_kriteria, 3) +
                                                        round(($row->C4 / $roww->maxminK4) * $x->nilai_kriteria, 3) +
                                                        round(($row->C5 / $roww->maxminK5) * $y->nilai_kriteria, 3) +
                                                        round(($row->C6 / $roww->maxminK6) * $z->nilai_kriteria, 3);

                                                    $nilaiArray[] = $jumlah;
                                                    // Tambahkan nilai ke dalam array
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                    arsort($nilaiArray);

                    $peringkatArray = array_flip(array_keys($nilaiArray));

                    foreach ($peringkatArray as $index => $peringkat) {
                        $row = $dataMb['all'][$index];
                        $jumlah = $nilaiArray[$index];
                    ?>
                        <tr>
                            <td><?= $peringkat + 1; ?></td>
                            <td><?= $row->nama_dosen; ?></td>
                            <td><?= $jumlah; ?></td>
                            <td><?= $peringkat + 1; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.content-wrapper -->


<?= $this->endsection(); ?>