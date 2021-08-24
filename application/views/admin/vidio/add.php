<?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Vidio Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vidio</li>
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
                <h3 class="card-title">Tambah Vidio Wisata </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url() ?>C_vidio/store" method="post" enctype="multipart/form-data">
            
              <div class="card-body">

                  <div class="form-group">
                      <label for="">Judul</label>
                      <input type="text" class="form-control" placeholder="Enter Judul Wisata" name="judul" id="">
                   </div>
                   <div class="custom-file">
                   <label for=""></label>
                      <input type="file" class="custom-file-input" name="vidio" id="customFile">
                      <label class="custom-file-label" for="customFile">Pilih Vidio</label>
                    </div>
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
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
  <?php $this->load->view('admin/template/foot') ?>
