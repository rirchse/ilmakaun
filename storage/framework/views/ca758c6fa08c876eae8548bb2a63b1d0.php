<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>

<section id="main-banner-page" style="width:100%; height:80px;background:url(images/banner1-1.jpg)"></section>
<!-- sign-in -->
<section id="sign-in" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2"><span class="font-normal">Sign</span> In
                    <span class="divider-center"></span>
                </h2>
            </div>
            <div class="col-md-6 whitebox" style="margin:0 auto">
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">Sign In </h3>
                    <form class="getin_form border-form" id="login" action="<?php echo e(route('login.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="loginEmail" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" required id="loginEmail" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="loginPass" class="d-none"></label>
                                    <input class="form-control" type="password" placeholder="Password:" required id="loginPass" name="password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Keep Me Signed In
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">Login</button>
                                <a href="forget-password.html" class="ml-2 defaultcolor">Forget password?</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sign-in ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/auth/login.blade.php ENDPATH**/ ?>