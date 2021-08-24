<?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Testimoni </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Testimoni Wisata </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($testimoni as $u){ ?>

              <form method="post" action="<?= base_url() ?>C_testimoni/update">
                <div class="card-body">

                  <div class="form-group">
                      <label for="">Nama</label>
                      <input type="hidden" class="form-control" placeholder="Enter Nama" value=<?= $u->id ?> name="id" id="">
                      <input type="text" class="form-control" placeholder="Enter Nama" name="nama" value=<?= $u->nama ?> id="">
                   </div>
                   
                  <div class="form-group">
                      <label for="">Deskripsi</label>
                  <textarea name="deskripsi" placeholder="Enter Testimoni" class="form-control" id="" cols="10" rows="5"><?= $u->deskripsi ?></textarea>    
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
              <?php }?>
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
  <?php $this->load->view('admin/template/foot') ?>
