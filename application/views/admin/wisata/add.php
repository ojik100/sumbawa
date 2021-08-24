<?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Wisata</h1>
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
                <h3 class="card-title">Tambah Wisata </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url() ?>C_wisata/store" method="post" enctype="multipart/form-data">
                          <div class="card-body">
              
                <div class="form-group">
                      <label for="">Kategori Wisata</label>
                     <select name="id_kategori" class="form-control" id="id_kategori">
                        <option value="">No Selected</option>
                        <?php foreach($kat as $row):?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->kategori;?></option>
                        <?php endforeach;?>
                     </select>
                   </div>

                  <div class="form-group">
                      <label for="">Nama Wisata</label>
                      <input type="text" class="form-control" placeholder="Enter Wisata" name="nama_wisata" id="nama_wisata">
                   </div>
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="3" placeholder="Enter Alamat"></textarea>
                   </div>
                   <div class="form-group">
                      <label for="">No WhatsApp</label>
                      <input type="text" class="form-control"  placeholder="+62" name="no_wa" id="no_wa">
                   </div>
                   <label for="">Gambar Wisata</label>
                   <div class="form-group">
                   <label for=""></label>
                   <input type="file" class="form-control" name="gambar" required id="">
                   <p>JPG|PNG|JPEG</p>
                    </div>
                    <div class="form-group">
                   <label for=""></label>
                   <input type="file" class="form-control" name="gambar1" required id="">
                   <p>JPG|PNG|JPEG</p>
                     </div>
                    <div class="form-group">
                   <label for=""></label>
                   <input type="file" class="form-control" name="gambar2" required id="">
                   <p>JPG|PNG|JPEG</p>
                          </div>
                    <div class="form-group">
                      <label for="">Deskripsi</label>
                     <textarea name="deskripsi" class="form-control" cols="30" rows="20"></textarea>
                   </div>
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