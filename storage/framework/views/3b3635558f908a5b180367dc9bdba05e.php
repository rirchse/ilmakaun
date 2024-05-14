<?php $__env->startSection('title', 'Portfolio'); ?>
<?php $__env->startSection('content'); ?>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header portfolio-header parallax section-nav-smooth" style="background:url('/images/banner1-1.jpg');height:0px">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Portfolio</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light">Portfolio</li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->

<!-- Our portfolios -->
<section id="our-portfolio" class="bglight padding">
    <div class="container">
       <div id="blog-measonry" class="row cbp top25">
        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="cbp-item">
             <div class="news_item shadow">
                <a class="image" href="<?php echo e(route('home.portfolio.show', $portfolio->id)); ?>">
                   <img src="<?php echo e($portfolio->image); ?>" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="<?php echo e(route('home.portfolio.show', $portfolio->id)); ?>"><?php echo e($portfolio->title); ?></a></h3>
                   <ul class="meta-tags top20 bottom20">
                      
                   </ul>
                   <p class="bottom35"><?php echo substr($portfolio->details, 0, 250); ?><?php echo e(strlen($portfolio->details) > 250 ? '...' : ''); ?></p>
                   <a href="<?php echo e(route('home.portfolio.show', $portfolio->id)); ?>" class="button gradient-btn">Read more</a>
                </div>
             </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
       <div class="row">
          <div class="col-sm-12">
             <!--Pagination-->
               <?php echo $portfolios->withQueryString()->links('pagination::bootstrap-5'); ?>

          </div>
       </div>
    </div>
 </section>
 <!--Our portfolios Ends-->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/home/portfolio/index.blade.php ENDPATH**/ ?>