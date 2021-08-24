
  <?php $this->load->view('admin/template/head') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel Wisata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Artikel Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="<?= base_url() ?>C_artikel/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i><span> Tambah Artikel</span></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php if ($this->session->flashdata('success')) { ?>

<?php } else if ($this->session->flashdata('error')) {  ?>

<?php } else if ($this->session->flashdata('warning')) {  ?>

<?php } else if ($this->session->flashdata('info')) {  ?>

<?php } ?>

                            <div>
                                <table class="table table-hover" id="tabeluser">
                           
                                <thead >
                                        <tr>

                                          
                                      
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th width="200">Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php
                                 $no=1;
                                 foreach ($artikel as $row) {
                                 ?>
                                     <tbody>
                                    
                                         <td><?= $no++?></td>
                                         <td><?= $row->created_at?></td>
                                        
                                         <td><?= $row->judul?></td>
                                         <td><center><img  src='<?=base_url()?>upload/artikel/<?=$row->gambar;?>' width="10%"></center></td>
                                         <td align="center">
                                             <a href="<?= base_url() ?>C_artikel/edit/<?= $row->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                             <a href="<?= base_url() ?>C_artikel/hapus/<?= $row->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                         </td>
                                     </tbody>
                                 <?php
                                 }
                                 ?>
                                </tbody>
                                </table>
                            </div>

                        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php $this->load->view('admin/template/foot') ?>
  
</script>
