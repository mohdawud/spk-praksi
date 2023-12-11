<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <br>
                        <div class="card-header">
                            <h3 class="card-title"><?= $form_tittle; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        foreach ($datadatadosen as $row) :
                        ?>
                            <form action="/Home/simpan_formedit_datadosen/<?= $row->id_dosen; ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group col-md-6 ">
                                        <input type="hidden" name="iddosen" class="form-control" id="iddosen" value="<?= $row->id_dosen; ?>">
                                        <label for="jenisusaha">NIDN</label>
                                        <input type="text" name="nidn" class="form-control" id="nidn" value="<?= $row->nidn; ?>" required>
                                        <label for="jenisusaha">Nama Dosen</label>
                                        <input type="text" name="namadosen" class="form-control" id="namadosen" value="<?= $row->nama_dosen; ?>" required>
                                        <label for="jenisusaha">Periode Nilai</label>
                                        <input type="text" name="periodenilai" class="form-control" id="periodenilai" value="<?= $row->periode_nilai; ?>" required>
                                        <label for="jenisusaha">Semester</label>
                                        <input type="text" name="semester" class="form-control" id="semester" value="<?= $row->semester; ?>" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->


<?= $this->endsection(); ?>