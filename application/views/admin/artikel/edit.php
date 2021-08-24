<?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Artikel Wisata</h1>
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
                <h3 class="card-title">Edit Artikel Wisata </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                          
                                 foreach ($artikel as $row) {
                                 ?>
              <form method="post" action="<?= base_url() ?>C_artikel/update" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                      <label for="">Judul</label>
                      <input type="text" class="form-control" placeholder="Enter Judul" value="<?= $row->judul?>" name="judul" id="">
                      <input type="hidden" class="form-control" placeholder="Enter Judul" value="<?= $row->id?>" name="id" id="">
                   </div>
                   <div class="custom-file">
                   <label for=""></label>
                   <img src="<?=base_url()?>upload/artikel/<?=$row->gambar;?>" width="20%" alt=""><hr>
                 
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control"<?= $row->gambar?> id="">
                    </div>
                   <div class="form-group">
                      <label for="">Deskripsi</label>
                     <textarea name="deskripsi" class="form-control" cols="30" rows="20"><?= $row->deskripsi?></textarea>
                   </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">update</button>
                </div>
              </form>
              <?php
            }
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
  <?php $this->load->view('admin/template/foot') ?>
