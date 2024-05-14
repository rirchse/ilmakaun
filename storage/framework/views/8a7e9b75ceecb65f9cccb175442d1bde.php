<!--Site Footer Here-->
<footer id="site-footer" class="bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="/" class="footer_logo bottom25"><img src="<?php echo e($setting->footer_logo); ?>" alt="MegaOne"></a>
                    <p class="whitecolor bottom25"><b>Address :</b><br>
                        <?php echo e($setting->address); ?><br></p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            <?php echo e($setting->phone); ?><br>
                            <a class="d-block" href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <?php if($setting->facebook): ?>
                        <li><a target="_blank" href="<?php echo e($setting->facebook); ?>" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <?php endif; ?>
                        <?php if($setting->twitter): ?>
                        <li><a target="_blank" href="<?php echo e($setting->twitter); ?>" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                        <?php endif; ?>
                        <?php if($setting->linkedin): ?>
                        <li><a target="_blank" href="<?php echo e($setting->linkedin); ?>" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                        <?php endif; ?>
                        <?php if($setting->instagram): ?>
                        <li><a target="_blank" href="<?php echo e($setting->instagram); ?>" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                        <?php endif; ?>
                        <?php if($setting->youtube): ?>
                        <li><a target="_blank" href="<?php echo e($setting->youtube); ?>" class="insta"><i class="fab fa-youtube"></i> </a> </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 ps-0 ps-lg-5">
                    <h3 class="whitecolor bottom25">Site Map</h3>
                    <ul class="links">
                        <li><a href="/#about">About Us</a></li>
                        <li><a href="#accomodation">Accomodation</a></li>
                        <li><a href="/gallery">Photo Gallery</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/login">Admin Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 whitecolor">
                    <?php if($setting->footer_right): ?>
                    <?php echo $setting->footer_right; ?>

                    <?php else: ?>
                    <h3 class="whitecolor bottom25">Working hours</h3>
                    <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                    <ul class="hours_links whitecolor">
                        <li>Saturday:<span> 8:00am - 9:00pm</span></li>
                        <li>Sunday:<span> 8:00am - 9:00pm</span></li>
                        <li>Monday:<span> 8:00am - 9:00pm</span></li>
                        <li>Tuesday:<span> 8:00am - 9:00pm</span></li>
                        <li>Wednesday:<span> 8:00am - 9:00pm</span></li>
                        <li>Thursday:<span> 8:00am - 9:00pm</span></li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center whitecolor"><p class="copyright-text" style="color:#6c757d">Copyright © <?php echo e(date('Y')); ?> || All rights reserved. <?php echo $setting->copy_right_text; ?></p></div>
        </div>
    </div>
</footer>
<!--Footer ends--><?php /**PATH /srv/www/ilmakaun/resources/views/home/footer.blade.php ENDPATH**/ ?>