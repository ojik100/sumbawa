
  <?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- website -->
                    <table class="table table-hover" id="tabeluser">

<thead>
  <tr>

    <th>NO</th>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Subject</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Aksi</th>

  </tr>
</thead>

<tbody>
  <?php
  $no = 1;
  foreach ($pesan as $u) {
  ?>
    <tr>
  
      
      <td><?= $no++ ?></td>
      <td><?php echo $u->created_at ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->subject ?></td>
      <td><?php echo $u->email ?></td>
      <td><?php echo $u->pesan ?></td>
   
      <td>
        <a href="<?= base_url() ?>C_pesan/hapus/<?= $u->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
       
      </td>
    </tr>
  <?php } ?>
</tbody>
</table>
                    <!-- tutup wibsite -->
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->

                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('admin/template/foot') ?>