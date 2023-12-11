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

            <a class="btn btn-primary mb-2" href="/Home/formtambah_datakriteria" role="button">Tambah</a>


            <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                    <tr>
                        <th width="20px">No</th>
                        <th width="150px">Kode Kriteria</th>
                        <th width="400px">Nama Kriteria</th>
                        <th width="100px">Nilai Bobot</th>
                        <th width="300px">Tipe Kriteria</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    $no = 1;

                    foreach ($datadatakriteria as $row) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->kode_kriteria; ?></td>
                            <td><?= $row->nama_kriteria; ?></td>
                            <td><?= $row->nilai_kriteria; ?></td>
                            <td><?= $row->tipe_kriteria; ?></td>
                            <td>
                                <a class="btn btn-warning mb-2 btn-sm" href="/Home/formedit_datakriteria/<?= $row->id_kriteria; ?>" role="button">Edit</a>
                                <a class="btn btn-danger mb-2 btn-sm" href="/Home/delete_datakriteria/<?= $row->id_kriteria; ?>">Hapus</a>
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