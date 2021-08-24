<?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Wisata</h1>
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
                <h3 class="card-title">Edit Wisata </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                                  
                                    foreach ($wisata as $row) {
                                    ?>
              <form action="<?= base_url() ?>C_wisata/update" method="post" enctype="multipart/form-data">
                          <div class="card-body">
              
                <div class="form-group">
                      <label for="">Kategori Wisata</label>
                     <select name="id_kategori" value=<?= $row->id_kategori ?>  class="form-control" id="id_kategori">
                        <option value="">No Selected</option>
                        <?php foreach($kat as $row):?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->kategori;?></option>
                        <?php endforeach;?>
                     </select>
                   </div>

                  <div class="form-group">
                      <label for="">Nama Wisata</label>
                      <input type="text" class="form-control" placeholder="Enter Wisata" value=<?= $row->nama_wisata ?> name="nama_wisata" id="nama_wisata">
                      <input type="hidden" class="form-control" placeholder="Enter Wisata" value=<?= $row->id ?>  name="id" id="id">
                   </div>
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="3" placeholder="Enter Alamat"><?= $row->alamat ?></textarea>
                   </div>
                   <div class="form-group">
                      <label for="">No WhatsApp</label>
                      <input type="text" class="form-control" value="<?= $row->no_wa ?>" placeholder="+62" name="no_wa" id="no_wa">
                   </div>
                   <label for="">Gambar Wisata</label>
                   <div class="form-group">
                   <label for=""></label>
                   <img src="<?=base_url()?>upload/wisata/<?=$row->gambar;?>" width="20%" alt=""><hr>
                   <input type="file" class="form-control" name="gambar" required id="">
                   <p>JPG|PNG|JPEG</p>
                    </div>
                    <div class="form-group">
                   <label for=""></label>
                   <img src="<?=base_url()?>upload/wisata/<?=$row->gambar1;?>" width="20%" alt=""><hr>
                   <input type="file" class="form-control" name="gambar1" required id="">
                   <p>JPG|PNG|JPEG</p>
                     </div>
                    <div class="form-group">
                   <label for=""></label>
                   <img src="<?=base_url()?>upload/wisata/<?=$row->gambar2;?>" width="20%" alt=""><hr>
                   <input type="file" class="form-control" name="gambar2" required id="">
                   <p>JPG|PNG|JPEG</p>
                          </div>
                    <div class="form-group">
                      <label for="">Deskripsi</label>
                     <textarea name="deskripsi" class="form-control" cols="30"  rows="20"><?= $row->deskripsi ?></textarea>
                   </div>
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
              <?php
            
            }?>
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

  <script>
  $(function () {
    // Summernote
    $('#check').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>