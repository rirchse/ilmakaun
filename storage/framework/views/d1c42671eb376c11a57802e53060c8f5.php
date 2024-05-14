<?php $__env->startSection('title', 'Portfolio'); ?>
<?php $__env->startSection('content'); ?>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth" style="">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Portfolio</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light"><a href="/portfolio">Portfolio</a></li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
 
<!-- Our portfolios -->
<section id="our-portfolio" class="bglight padding_top padding_bottom_half">
   <div class="container">
       <div class="row">
           <div class="col-lg-8 col-md-7">
               <div class="news_item shadow mb-0">
                   <div class="image">
                       <img src="<?php echo e($portfolio->image); ?>" alt="" class="img-responsive">
                   </div>
                   <div class="news_desc text-center text-md-start">
                       <h3 class="text-capitalize font-normal darkcolor"><a href="javascript:void(0)"><?php echo e($portfolio->title); ?></a></h3>
                       <ul class="meta-tags top20 bottom20">
                           <li><a href="#."><i class="fas fa-calendar-alt"></i><?php echo e($portfolio->date); ?></a></li>
                           
                       </ul>
                       <p class="bottom35"><?php echo $portfolio->details; ?></p>
                       
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-5">
               <aside class="sidebar whitebox mt-5 mt-md-0">
                   
                   <div class="widget heading_space_half wow fadeIn" data-wow-delay="350ms">
                       <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Recent Post</h4>
                       <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="single_post d-table bottom15">
                           <a href="<?php echo e(route('home.portfolio.show', $portfolio->id)); ?>" class="post"><img src="<?php echo e($portfolio->image); ?>" alt=""></a>
                           <div class="text">
                               <a href="<?php echo e(route('home.portfolio.show', $portfolio->id)); ?>"><?php echo e($portfolio->title); ?></a>
                               <span><?php echo e(date('M d, Y', strtotime($portfolio->date))); ?></span>
                           </div>
                       </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>
                   
                   
               </aside>
           </div>
       </div>
   </div>
</section>
<!--Our portfolio Ends-->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/home/portfolio/single.blade.php ENDPATH**/ ?>