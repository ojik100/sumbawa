<?php $this->load->view('web/template/head') ?>
<section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63148.6825945196!2d116.98288639303978!3d-8.422012592661595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc0e6853ea7bd3%3A0x8c205b18ac6fe5c7!2sLabuhan%20Burung%2C%20Buer%2C%20Kabupaten%20Sumbawa%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1629105058669!5m2!1sid!2sid" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <?php if ($this->session->flashdata('success')) { ?>

<?php } else if ($this->session->flashdata('error')) {  ?>

<?php } else if ($this->session->flashdata('warning')) {  ?>

<?php } else if ($this->session->flashdata('info')) {  ?>

<?php } ?>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="<?= base_url() ?>Kontak/pesan" method="post" >
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" name="pesan" id="pesan" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                                  
                                </div>
                                <input type="hidden" class="form-control" name="status" value="Proses" >
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Labuhan Burung.</h3>
                            <p>Buer,
Kabupaten Sumbawa
Nusa Tenggara Barat.</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+62 859-6709-6985</h3>
                            <p>XL Axiata</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>php2d.ik.iisbud.sarea@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('web/template/foot') ?>
    <!-- ================ contact section end ================= -->