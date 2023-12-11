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
                        <li class="breadcrumb-item"><a href="<?= base_url('Home/callviewnormalisasi'); ?>"><?= $tittle; ?></a></li>
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
                        <th width="50px">N1 - TP</th>
                        <th width="50px">N2 - JF</th>
                        <th width="50px">N3 - BKD</th>
                        <th width="50px">N4 - KP</th>
                        <th width="50px">N5 - PkM</th>
                        <th width="50px">N6 - HK</th>


                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 0;

                    foreach ($dataMb['all'] as $row) :
                        $no++;
                        foreach ($dataMb['maxmin'] as $roww) :

                    ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row->nama_dosen; ?></td>
                                <td><?= $row->C1 ?>/<?= $roww->maxminK1; ?> =
                                    <?= round($row->C1 / $roww->maxminK1, 2); ?></td>
                                <td><?= $row->C2 ?>/<?= $roww->maxminK2; ?> =
                                    <?= round($row->C2 / $roww->maxminK2, 2); ?></td>
                                <td><?= $row->C3 ?>/<?= $roww->maxminK3; ?> =
                                    <?= round($row->C3 / $roww->maxminK3, 2); ?></td>
                                <td><?= $row->C4 ?>/<?= $roww->maxminK4; ?> =
                                    <?= round($row->C4 / $roww->maxminK4, 2); ?></td>
                                <td><?= $row->C5 ?>/<?= $roww->maxminK5; ?> =
                                    <?= round($row->C5 / $roww->maxminK5, 2); ?></td>
                                <td><?= $row->C6 ?>/<?= $roww->maxminK6; ?> =
                                    <?= round($row->C6 / $roww->maxminK6, 2); ?></td>


                            </tr>
                    <?php
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