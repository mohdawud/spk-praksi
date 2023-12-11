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
            <h3 class="card-title">DataTable</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <a class="btn btn-primary mb-2" href="/Home/formtambah_datadosen" role="button">Tambah</a>

            <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                    <tr>
                        <th width="20px">No</th>
                        <th width="100px">NIDN</th>
                        <th width="300px">Nama Dosen</th>
                        <th width="200px">Periode Nilai</th>
                        <th width="300px">Semester</th>

                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 1;

                    foreach ($datadatadosen as $row) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nidn; ?></td>
                            <td><?= $row->nama_dosen; ?></td>
                            <td><?= $row->periode_nilai; ?></td>
                            <td><?= $row->semester; ?></td>

                            <td>
                                <a class="btn btn-warning mb-2 btn-sm" href="/Home/formedit_datadosen/<?= $row->id_dosen; ?>" role="button">Edit</a>
                                <a class="btn btn-danger mb-2 btn-sm" href="/Home/delete_datadosen/<?= $row->id_dosen; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.content-wrapper -->


<?= $this->endsection(); ?>