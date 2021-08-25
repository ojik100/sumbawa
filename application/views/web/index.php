
    <!-- Header part end-->
    <?php $this->load->view('web/template/head') ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1>Pesona Wisata</h1>
                           <p style="font-size :300%">Desa Labuhan Burung</p><br>
                           <p style="font-size :100%"> Kabupaten Sumbawa Nusa Tenggara Barat</p>
                            <a href="<?= base_url() ?>Kontak" class="btn_1">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">Cari Wisata Anda!!</a>
                            </li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="">
                         <form action="<?= base_url() ?>Wisata">
                             <input type="text" class="form-control" placeholder="Cari Pesona Wisata Anda" name="" id="">
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <!--top place start-->
    <section class="top_place section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Galery Wisata</h2>
                        <p>Galery Wisata Labuhan Burung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                                   
                                   foreach ($galery as $row) {
                                   ?>
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="<?=base_url()?>upload/galery/<?=$row->gambar;?>" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn"><?= $row->judul?></a>
                                <h3><?= $row->judul?></h3>
                               
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
                                   
                <?php
                                    }
                                    ?>
             
                                  </div>
               
                <a href="<?= base_url() ?>Galery" class="btn_1 text-cnter">Selengkapnya</a>
            </div>
            
        </div>
    </section>
    <!--top place end-->

    <!--top place start-->
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
    <!--top place end-->

    <!--::industries start::-->
    <section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Pesona Wisata Desa Labuhan Burung</h2>
                        <p>Pesona Wisata Desa Labuhan Burung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                                   
                                   foreach ($wisata as $row) {
                                   ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="<?=base_url()?>upload/wisata/<?=$row->gambar;?>" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="<?= base_url() ?>Web/detail_wisata/<?= $row->id ?>"> <?= $row->nama_wisata ?></a></h3>
                           
                            <p>Labuhan Burung, Sumbawa Besar</p>
                            <p><?= character_limiter($row->deskripsi,100)?><a href="<?= base_url() ?>Web/detail_wisata/<?= $row->id ?>">Selengkapnya</a></p>
                            <h5><a href="" class="btn btn-success ">WhatsApp</a> </h5>
                        </div>
                    </div>
                </div>
                <?php
                                    }
                                    ?>
           
             
            </div><BR><BR>
            <a href="<?= base_url() ?>Wisata" class="btn_1 text-cnter">Selengkapnya</a>
        </div>
    </section>
    <!--::industries end::-->

    <!--top place start-->
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
    <!--top place end-->

    <!--::industries start::-->
    <section class="best_services section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Berita</h2>
                        <p>Berita Pesona Wisata Desa Labuhan Burung .</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                                   
                                   foreach ($artikel as $row) {
                                   ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="<?=base_url()?>upload/artikel/<?=$row->gambar;?>" alt="">
                        <h3> <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>"> <?= $row->judul ?></a></h3>
                        <p><?= character_limiter($row->deskripsi,100)?> <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">Selengkapnya</a></p>
                        <p><?= $row->created_at ?></p>
                    </div>
                </div>
                <?php
                                   }
                ?>
          
            
             
            </div><BR><br><br><br><br>
            <a href="<?= base_url() ?>Artikel" class="btn_1 text-cnter">Selengkapnya</a>
        </div>
    </section>
    <!--::industries end::-->

    <!-- footer part start-->
  



    <?php $this->load->view('web/template/foot') ?>