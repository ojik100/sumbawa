<?php $this->load->view('web/template/head') ?>
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2> Wisata</h2>
                            <form action="">
                            <input type="text" class="form-control" name="" placeholder="Cari wisata anda?" id="">
                 
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hotel_list section_padding single_page_hotel_list">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Semua Wisata </h2>
                        <p>Labuhan Burung Menuju Era Revolusi 4.0</p>
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
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Labuhan Burung, Sumbawa Nusa Tenggara Barat</p>
                            <p>Date: <?= $row->created_at ?></p>
                            <p><a href="https://api.whatsapp.com/send?phone=<?= $row->no_wa ?>" target="blank" class="btn btn-success">WhatsApp</a></p>
                            <h5>Telepon <span><?= $row->no_wa ?></span></h5>
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
