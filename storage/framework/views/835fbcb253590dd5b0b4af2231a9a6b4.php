<style>
    .me-auto{margin-right:20%!important; margin-left:15%}
</style>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand center-brand" href="/">
                <img src="<?php echo e($setting->logo_transparent); ?>" alt="logo" class="logo-default" style="max-width:<?php echo e($setting->logo_width); ?>px">
                <img src="<?php echo e($setting->logo); ?>" alt="logo" class="logo-scrolled" style="max-width:<?php echo e($setting->logo_width); ?>px">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product_slider">Accomodation</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product_slider">Accomodation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Admin Login</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <?php if($setting->facebook): ?>
                    <li><a target="_blank" href="<?php echo e($setting->facebook); ?>"><i class="fab fa-facebook-f"></i> </a> </li>
                    <?php endif; ?>
                    <?php if($setting->twitter): ?>
                    <li><a target="_blank" href="<?php echo e($setting->twitter); ?>"><i class="fab fa-twitter"></i> </a> </li>
                    <?php endif; ?>
                    <?php if($setting->linkedin): ?>
                    <li><a target="_blank" href="<?php echo e($setting->linkedin); ?>"><i class="fab fa-linkedin-in"></i> </a> </li>
                    <?php endif; ?>
                    <?php if($setting->instagram): ?>
                    <li><a target="_blank" href="<?php echo e($setting->instagram); ?>"><i class="fab fa-instagram"></i> </a> </li>
                    <?php endif; ?>
                    <?php if($setting->youtube): ?>
                    <li><a target="_blank" href="<?php echo e($setting->youtube); ?>"><i class="fab fa-youtube"></i> </a> </li>
                    <?php endif; ?>
                </ul>
                <p class="whitecolor">Copyright &copy; <span id="year"></span> || All rights reserved.</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<?php if($_SERVER['REQUEST_URI'] != '/'): ?>
    <section id="main-banner-page" style="width:100%; height:80px; background: url(<?php echo e($setting->banner_image); ?>);">
    </section>
    <style>.transparent-bg{background: rgba(0,0,0,0.3);} </style>
<?php endif; ?><?php /**PATH /srv/www/ilmakaun/resources/views/home/header.blade.php ENDPATH**/ ?>