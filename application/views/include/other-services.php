<!-- ------------------Section - Other Services---------------------- -->
<div class="sec-other-services sec-tb-padding">

    <div class="container py-5 px-4 rounded-4 shadow">

        <h2 class="text-white mb-5"> What Other Services Does All Star Technologies Offer?</h2>

        <div class="carousel" data-bs-ride="carousel">

            <div class="carousel-inner  other-services slider">
                <?php if (!checkUrl_segment('seo-services')):?>
                <div class="carousel-item active slide">

                    <div class="card h-100 service-card-2">
                        
                    <a href="<?= base_url('seo-services') ?>">
                    

                        <div class="card-inner-cont">

                            <img src="<?= asset_url() ?>images/seo-services.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">SEO Services</h5>

                            </div>

                        </div>

                    </a>

                    </div>


                </div>
                <?php endif; if (!checkUrl_segment('ppc-services')):?>
                <div class="carousel-item slide">

                    <div class="card h-100 service-card-2">

                    <a href="<?= base_url('ppc-services') ?>">

                        <div class="card-inner-cont">

                            <img src="<?= asset_url() ?>images/ppc-services.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">PPC Services</h5>

                            </div>

                        </div>

                </a>

                    </div>

                </div>
                <?php endif; if (!checkUrl_segment('web-design')): ?>
                <div class="carousel-item slide">

                    <div class="card h-100 service-card-2">

                    <a href="<?= base_url('web-design-development') ?>">

                        <div class="card-inner-cont">


                            <img src="<?= asset_url() ?>images/web-development.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">Website Design & Development</h5>

                            </div>

                        </div>

                </a>
                    </div>

                </div>
                <?php endif; if (!checkUrl_segment('app-development')):?>
                <div class="carousel-item slide">

                    <div class="card h-100 service-card-2">
                    <a href="<?= base_url('app-development') ?>">

                        <div class="card-inner-cont">

                            <img src="<?= asset_url() ?>images/app-development.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">Application Design & Development</h5>

                            </div>

                        </div>

                </a>
                    </div>
                </div>
                <?php endif; if (!checkUrl_segment('social-media-marketing')):?>
                <div class="carousel-item slide">
                    <div class="card h-100 service-card-2">

                    <a href="<?= base_url('social-media-marketing') ?>">

                        <div class="card-inner-cont">

                            <img src="<?= asset_url() ?>images/social-media-marketing.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">Social Media Marketing</h5>

                            </div>

                        </div>

                </a>
                    </div>

                </div>
                <?php endif; if (!checkUrl_segment('graphic-design')):?>
                <div class="carousel-item slide">
                    <div class="card h-100 service-card-2">

                    <a href="<?= base_url('graphic-design') ?>">

                        <div class="card-inner-cont">

                            <img src="<?= asset_url() ?>images/graphic-design.png" class="card-service-img" alt="Sample Image">

                            <div class="card-body">

                                <h5 class="card-title">Graphics Design</h5>

                            </div>

                        </div>

                </a>
                    </div>

                </div>
                <?php endif;?>
            </div>

        </div>

    </div>

</div>