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
                        <li class="breadcrumb-item"><a href="<?= base_url('Home/callviewranking'); ?>"><?= $tittle; ?></a></li>
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
                        <th width="100px">Nama Dosen</th>
                        <th width="50px">
                            <center>C1 - TP [B] <br /> [N1 x 0.1]</center>
                        </th>
                        <th width="50px">
                            <center>C2 - JF [B] <br /> [N2 x 0.1]</center>
                        </th>
                        <th width="50px">
                            <center>C3 - BKD [B] <br /> [N3 x 0.2]</center>
                        </th>
                        <th width="50px">
                            <center>C4 - KP [B] <br /> [N4 x 0.2]</center>
                        </th>
                        <th width="50px">
                            <center>C5 - PkM [B] <br /> [N5 x 0.2]</center>
                        </th>
                        <th width="50px">
                            <center>C6 - HK [B] <br /> [N6 x 0.2]</center>
                        </th>
                        <th width="50px">Hasil Nilai</th>



                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 0;

                    foreach ($dataMb['all'] as $row) :
                        foreach ($dataMb['B1'] as $u) :
                            foreach ($dataMb['B2'] as $v) :
                                foreach ($dataMb['B3'] as $w) :
                                    foreach ($dataMb['B4'] as $x) :
                                        foreach ($dataMb['B5'] as $y) :
                                            foreach ($dataMb['B6'] as $z) :
                                                $no++;
                                                foreach ($dataMb['maxmin'] as $roww) :

                    ?>
                                                    <tr>
                                                        <td> <?= $no; ?></td>
                                                        <td><?= $row->nama_dosen; ?></td>

                                                        <td><?= round($row->C1 / $roww->maxminK1, 2) ?> X <?= $u->nilai_kriteria ?> =
                                                            <?= round(($row->C1 / $roww->maxminK1) * $u->nilai_kriteria, 3) ?></td>
                                                        <td><?= round($row->C2 / $roww->maxminK2, 2) ?> X <?= $v->nilai_kriteria ?> =
                                                            <?= round(($row->C2 / $roww->maxminK2) * $v->nilai_kriteria, 3) ?></td>
                                                        <td><?= round($row->C3 / $roww->maxminK3, 2) ?> X <?= $w->nilai_kriteria ?> =
                                                            <?= round(($row->C3 / $roww->maxminK3) * $w->nilai_kriteria, 3) ?></td>
                                                        <td><?= round($row->C4 / $roww->maxminK4, 2) ?> X <?= $x->nilai_kriteria ?> =
                                                            <?= round(($row->C4 / $roww->maxminK4) * $x->nilai_kriteria, 3) ?></td>
                                                        <td><?= round($row->C5 / $roww->maxminK5, 2) ?> X <?= $y->nilai_kriteria ?> =
                                                            <?= round(($row->C5 / $roww->maxminK5) * $y->nilai_kriteria, 3) ?></td>
                                                        <td><?= round($row->C6 / $roww->maxminK6, 2) ?> X <?= $z->nilai_kriteria ?> =
                                                            <?= round(($row->C6 / $roww->maxminK6) * $z->nilai_kriteria, 3) ?></td>

                                                        <?php $jumlah = round(($row->C1 / $roww->maxminK1) * $u->nilai_kriteria, 3) +
                                                            round(($row->C2 / $roww->maxminK2) * $v->nilai_kriteria, 3) +
                                                            round(($row->C3 / $roww->maxminK3) * $w->nilai_kriteria, 3) +
                                                            round(($row->C4 / $roww->maxminK4) * $x->nilai_kriteria, 3) +
                                                            round(($row->C5 / $roww->maxminK5) * $y->nilai_kriteria, 3) +
                                                            round(($row->C6 / $roww->maxminK6) * $z->nilai_kriteria, 3); ?>
                                                        <td><?= $jumlah ?></td>




                                                    </tr>
                    <?php
                                                endforeach;
                                            endforeach;
                                        endforeach;
                                    endforeach;
                                endforeach;
                            endforeach;
                        endforeach;
                    endforeach;
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