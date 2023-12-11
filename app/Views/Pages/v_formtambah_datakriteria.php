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
                        <form action="/Home/simpan_formtambah_datakriteria" method="post">
                            <div class="card-body">
                                <div class="form-group col-md-6 ">
                                    <label for="jenisusaha">Kode Kriteria</label>
                                    <input type="text" name="kodekriteria" class="form-control" id="kodekriteria" placeholder="Enter Kode Kriteria" required autofocus>
                                    <label for="jenisusaha">Nama Kriteria</label>
                                    <input type="text" name="namakriteria" class="form-control" id="namakriteria" placeholder="Enter Nama Kriteria" required>
                                    <label for="jenisusaha">Nilai Kriteria</label>
                                    <input type="text" name="nilaikriteria" class="form-control" id="nilaikriteria" placeholder="Enter Nilai Kriteria" required>
                                    <label for="jenisusaha">Tipe Kriteria</label>
                                    <input type="text" name="tipekriteria" class="form-control" id="tipekriteria" placeholder="Enter Tipe Kriteria" required>

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