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
                        <li class="breadcrumb-item"><a href="#"><?= $tittle; ?></a></li>
                        <li class="breadcrumb-item active"><?= $subtittle; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <a class="btn btn-primary mb-2" href="/Home/formtambah_databobot" role="button">Tambah</a>


            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th width="100px">Kode Kriteria</th>
                        <th width="300px">Nama Kriteria</th>
                        <th width="100px">Nilai Bobot</th>
                        <th width="300px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;

                    foreach ($datadatabobot as $row) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->kode_kriteria; ?></td>
                            <td><?= $row->nama_kriteria; ?></td>
                            ] <td><?= $row->nilai_bobot; ?></td>
                            <td>
                                <a class="btn btn-warning mb-2 btn-sm" href="/Home/formedit_databobot/<?= $row->id_bobot; ?>" role="button">Edit</a>
                                <a class="btn btn-danger mb-2 btn-sm" href="/Home/delete_databobot/<?= $row->id_bobot; ?>">Hapus</a>
                            </td>
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