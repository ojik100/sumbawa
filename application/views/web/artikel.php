<?php $this->load->view('web/template/head') ?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Berita</h2>
                            <p>home . berita</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                                   
                                   foreach ($artikel as $row) {
                                   ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?=base_url()?>upload/artikel/<?=$row->gambar;?>" alt="">
                                <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>" class="blog_item_date">
                                    <h3><?= $row->judul?></h3>
                                   
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">
                                    <h2><?= $row->created_at ?></h2>
                                </a>
                                <p style="text-align: justify;  text-justify: inter-word;"><?= character_limiter($row->deskripsi,200)?> <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">Selengkapnya</a></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Administrator</a></li>
                                </ul>
                            </div>
                        </article>

                      

                      <?php
                                   }
                      ?>

                   

                       

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                      

                      


                 

                  
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('web/template/foot') ?>