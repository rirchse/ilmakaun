<?php $__env->startSection('title', 'Gallery'); ?>
<?php $__env->startSection('content'); ?>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header portfolio-header parallax section-nav-smooth" style="background:url('/images/banner1-1.jpg');height:0px">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Gallery</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light">Gallery</li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
<!-- Gallery -->
<section id="gallery" class="bglight position-relative padding_top">
  <div class="container">
      <div class="row">
          
          <div class="col-lg-12">
              <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                  <!--Item 1-->
                  <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="cbp-item brand graphics">
                      <img src="<?php echo e($gallery->image); ?>" alt="">
                      <div class="gallery-hvr whitecolor">
                          <div class="center-box">
                              <a href="<?php echo e($gallery->image); ?>" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                              <h4 class="w-100"><?php echo e($gallery->title); ?></h4>
                          </div>
                      </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
              </div>
              <div class="col-lg-12">
                  <br>
                  <!--Pagination-->
                    <?php echo $galleries->withQueryString()->links('pagination::bootstrap-5'); ?>

                  <br>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Gallery ends -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/home/gallery/index.blade.php ENDPATH**/ ?>