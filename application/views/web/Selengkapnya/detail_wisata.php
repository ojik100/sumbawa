
<?php $this->load->view('web/template/head') ?>
<section class="event_part section_padding">
     
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                    <?php
                                   
                                   foreach ($wisata as $row) {
                                   ?>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="col-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Desa Wisata</h5>
                                        <h2><?= $row->nama_wisata ?></h2>
                                        <p>Desa Wisata Labuhan Burung Sumbawa Besar Nusa Tenggara Barat.
                                        </p>
                                        <p>date: <span><?= $row->created_at ?></span> </p>
                                        <p>Organizer: <span> Desa Labuhan Burung</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="<?= base_url() ?>Web/detail_wisata/<?= $row->id ?>" class="btn_1">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                    ?>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--event_part end-->

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                    <?php
                                   
                       foreach ($wisata_id as $row) {
                                   ?>
                        <div class="card">
                            <a href="<?=base_url()?>upload/galery/<?=$row->gambar;?>" class="gallery_img">
                               <img src="<?=base_url()?>upload/galery/<?=$row->gambar;?>" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="<?=base_url()?>upload/wisata/<?=$row->gambar1;?>" class="gallery_img">
                               <img src="<?=base_url()?>upload/wisata/<?=$row->gambar1;?>" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="<?=base_url()?>upload/wisata/<?=$row->gambar2;?>" class="gallery_img">
                               <img src="<?=base_url()?>upload/wisata/<?=$row->gambar2;?>" class="card-img-top" alt="">
                            </a>
                        </div>
                     
             
                       
                      </div>
                </div>
                
            </div>
                <div class="col-lg-6">
                    <div class="content_iner">
                        <h1><?= $row->nama_wisata ?></h1>
                       <p class="fa fa-phone"> Nomor Pengelola : <?= $row->no_wa ?></p><br>
                       <p class="fa fa-map"> Alamat : Pesona Wisata Desa Labuhan Burung</p>
                       
                        <p><?= $row->deskripsi ?>.</p>
                        
                        <div class="tour_details_content_btn">
                            <a href="https://api.whatsapp.com/send?phone=<?= $row->no_wa ?>" target="blank" class="btn_1">Pesan WhatsApp</a>
                        </div>
                    </div>
                </div>
                <?php
                                    }
                                    ?>
            </div>
        </div>
    </section>
    
<?php $this->load->view('web/template/foot') ?>
    <!-- tour details content css end-->

    <!-- footer part start-->
