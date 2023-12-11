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
                        <li class="breadcrumb-item"><a href="<?= base_url('Home/callviewhitung'); ?>"><?= $tittle; ?></a></li>
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
                        <th>Keterangan</th>
                        <th>C1-TP [B] | MAX</th>
                        <th>C2-JF [B] | MAX</th>
                        <th>C3-BKD [B] | MAX</th>
                        <th>C4-KP [B] | MAX</th>
                        <th>C5-PkM [B] | MAX</th>
                        <th>C6-HK [B] | MAX</th>

                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 1;

                    foreach ($dataMb as $row) :

                    ?>
                        <tr>
                            <td>Nilai Max/Min Kriteria</td>
                            <td><?= $row->maxminK1; ?></td>
                            <td><?= $row->maxminK2; ?></td>
                            <td><?= $row->maxminK3; ?></td>
                            <td><?= $row->maxminK4; ?></td>
                            <td><?= $row->maxminK5; ?></td>
                            <td><?= $row->maxminK6; ?></td>
                        </tr>
                    <?php
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