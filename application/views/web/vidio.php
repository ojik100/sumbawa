<?php $this->load->view('web/template/head') ?>
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>vidio Wisata</h2>
                            <p>home . vidio wisata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_gallery section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>vidio Wisata</h2>
                        <p>Labuhan Burung Menuju Revolusi Industri Revolusi 4.0</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                    <?php
                                   
                       foreach ($vidio as $row) {
                                   ?>
                        <div class="card">
                            <p><?= $row->judul ?></p>
                            <video width="100%" controls>
    <source src="<?=base_url()?>upload/vidio/<?=$row->vidio;?>"  type="video/webm" />
  
  </video>    
                       
                        </div>
                        <?php
                                    }
                                    ?>
             
                       
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client_review section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="section_tittle">
                        <h2>Testimoni Pengunjung</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_slider owl-carousel">
                    <?php
                                   
                                   foreach ($testimoni as $row) {
                                   ?>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p><?= $row->deskripsi ?></p>
                            <h5> - <?= $row->nama ?></h5>
                        </div>

                        <?php
                                   }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place 
  <?php $this->load->view('web/template/foot') ?>
