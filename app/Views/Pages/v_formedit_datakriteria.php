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
                        foreach ($datadatakriteria as $row) :
                        ?>
                            <form action="/Home/simpan_formedit_datakriteria/<?= $row->id_kriteria; ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group col-md-6 ">
                                        <input type="hidden" name="idkriteria" class="form-control" id="idkriteria" value="<?= $row->id_kriteria; ?>">
                                        <label for="jenisusaha">Kode Kriteria</label>
                                        <input type="text" name="kodekriteria" class="form-control" id="kodekriteria" value="<?= $row->kode_kriteria; ?>" required>
                                        <label for="jenisusaha">Nama Kriteria</label>
                                        <input type="text" name="namakriteria" class="form-control" id="namakriteria" value="<?= $row->nama_kriteria; ?>" required>
                                        <label for="jenisusaha">Nilai Kriteria</label>
                                        <input type="text" name="nilaikriteria" class="form-control" id="nilaikriteria" value="<?= $row->nilai_kriteria; ?>" required>
                                        <label for="jenisusaha">Tipe Kriteria</label>
                                        <input type="text" name="tipekriteria" class="form-control" id="tipekriteria" value="<?= $row->tipe_kriteria; ?>" required>
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