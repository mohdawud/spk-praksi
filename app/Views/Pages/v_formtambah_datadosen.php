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
                        <form action="/Home/simpan_formtambah_datadosen" method="post">
                            <div class="card-body">
                                <div class="form-group col-md-6 ">
                                    <label for="jenisusaha">NIDN</label>
                                    <input type="text" name="nidn" class="form-control" id="nidn" placeholder="Enter NIDN" required autofocus>
                                    <label for="jenisusaha">Nama Dosen</label>
                                    <input type="text" name="namadosen" class="form-control" id="namadosen" placeholder="Enter Nama Dosen" required>
                                    <label for="jenisusaha">Periode Nilai</label>
                                    <input type="text" name="periodenilai" class="form-control" id="periodenilai" placeholder="Enter Periode Nilai" required>
                                    <label for="jenisusaha">Semester</label>
                                    <input type="text" name="semester" class="form-control" id="semester" placeholder="Enter Semester" required>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
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