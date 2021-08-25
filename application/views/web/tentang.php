<?php $this->load->view('web/template/head') ?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Tentang Wisata</h2>
                            <p>home . Tentang wisata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="">
                        <img src="<?= base_url() ?>assets/depen/thema/logo.png" width="70%" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text">
                        <h5>Tentang </h5>
                        <h2>Pesona Wisata Desa Labuhan burung</h2>
                        <p style="text-align: justify;  text-justify: inter-word;">Labuhan Burung adalah sebuah desa pesisir yang ada di Pulau Sumbawa. Desa ini masuk dalam wilayah Kecamatan Buer, Kabupaten Sumbawa. Desa Labuhan Burung telah di perkenalkan ke masyarakat sebagai desa wisata dengan konsep Rural Community Based Tourism ( Pariwisata Berbasis Masyarakat Pedesaan) oleh Askar DG KAMIS sejak tahun 2017
.</p>
                        <p style="text-align: justify;  text-justify: inter-word;">Beberapa hal menarik yang perlu di explore dari desa ini adalah keberagaman sub etnis dari Sulawesi Selatan, etnis Sumbawa, etnis Sasak dan etnis lainnya. Sehingga mereka mampu berkomunikasi dalam keseharian mereka dengan multi bahasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                                
                                            </div>
                                        <a href="#" class="btn_1">Plan Details</a>
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
    <section class="best_services section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Berita</h2>
                        <p>Berita Pesona Wisata Desa Labuhan Burung</p>
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
                        <p style="text-align: justify;  text-justify: inter-word;"><?= character_limiter($row->deskripsi,100)?> <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">Selengkapnya</a></p>
                        <p ><?= $row->created_at ?></p>
                    </div>
                </div>
                <?php
                                   }
                ?>
          
            
             
            </div><BR><br><br><br><br>
            <a href="<?= base_url() ?>Artikel" class="btn_1 text-cnter">Selengkapnya</a>
        </div>
    </section>


<?php $this->load->view('web/template/foot') ?>
