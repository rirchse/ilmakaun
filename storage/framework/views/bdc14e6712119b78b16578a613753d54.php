<?php $__env->startSection('title', 'Portfolio'); ?>
<?php $__env->startSection('content'); ?>

<style>
  .label{
    padding: 15px 0;
  }
  input, textarea, select{background: #eee!important}
</style>
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth" style="background:url('/images/banner1-1.jpg');height:0px">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Contact</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light"><a href="/contact">Contact</a></li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding noshadow">
  <div class="container whitebox">
      <div class="widget py-5">
          <div class="row">
              <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                  <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Contact</span> Us
                      <span class="divider-center"></span>
                  </h2>
              </div>
              <div class="col-md-12 col-sm-12">
                <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                      <form class="getin_form wow fadeInUp" data-wow-delay="400ms" action="<?php echo e(route('home.contactStore')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                          <div class="row px-2">
                              <div class="col-md-12 col-sm-12" id="result1"></div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="first_name" class="label">First Name *</label>
                                      <input class="form-control" id="first_name" type="text" placeholder="First Name:" required  name="first_name">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="last_name" class="label">Last Name *</label>
                                      <input class="form-control" id="last_name" type="text" placeholder="Last Name:" required  name="last_name">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="email" class="label">Email Address *</label>
                                      <input class="form-control" type="email" id="email" placeholder="Email Address:" name="email">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="phone" class="label">Phone *</label>
                                      <input class="form-control" type="text" id="phone" placeholder="Phone:" name="phone" value="<?php echo e(!empty($user->phone)? $user->phone:''); ?>">
                                  </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                  <div class="form-group">
                                      <label for="room" class="label">Accomodation *</label>
                                      <select class="form-control" name="room" required>
                                        <option value="">Select Accomodation</option>
                                        <optgroup label="Cottage Room">
                                        <option value="Cottage Room Double Resident" <?php echo e(!empty($user->room) && $user->room == 'Cottage Room Double Resident'? 'selected':''); ?>>Double Resident</option>
                                        <option value="Cottage Room Double Non Resident" <?php echo e(!empty($user->room) && $user->room == 'Cottage Room Double Non Resident'? 'selected':''); ?>>Double Non Resident</option>
                                        <option value="Cottage Room Single Resident" <?php echo e(!empty($user->room) && $user->room == 'Cottage Room Single Resident'? 'selected':''); ?>>Single Resident</option>
                                        <option value="Cottage Room Single Non Resident" <?php echo e(!empty($user->room) && $user->room == 'Cottage Room Single Non Resident'? 'selected':''); ?>>Single Non Resident</option>
                                        </optgroup>
                                        <optgroup label="Tent Room">
                                        <option value="Tent Room Double Resident" <?php echo e(!empty($user->room) && $user->room == 'Tent Room Double Resident'? 'selected':''); ?>>Double Resident</option>
                                        <option value="Tent Room Double Non Resident" <?php echo e(!empty($user->room) && $user->room == 'Tent Room Double Non Resident'? 'selected':''); ?>>Double Non Resident</option>
                                        <option value="Tent Room Single Resident" <?php echo e(!empty($user->room) && $user->room == 'Tent Room Single Resident'? 'selected':''); ?>>Single Resident</option>
                                        <option value="Tent Room Single Non Resident" <?php echo e(!empty($user->room) && $user->room == 'Tent Room Single Non Resident'? 'selected':''); ?>>Single Non Resident</option>
                                        </optgroup>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="arrival" class="label">Arrival Date *</label>
                                      <input class="form-control" id="arrival" type="date" placeholder="Arrival Date:" required  name="arrival" value="<?php echo e(!empty($user->arrival)? $user->arrival:''); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="departure" class="label">Departure Date *</label>
                                      <input class="form-control" id="departure" type="date" placeholder="Select Date:" required  name="departure" value="<?php echo e(!empty($user->departure)? $user->departure:''); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="Adults" class="label">Adults *</label>
                                      <input class="form-control" id="Adults" type="number" placeholder="Enter Number" required  name="adult" value="<?php echo e(!empty($user->adult)? $user->adult:''); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                      <label for="children" class="label">Children Below 12 Years</label>
                                      <input class="form-control" id="children" type="number" placeholder="Enter Number:"  name="children">
                                  </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                  <div class="form-group">
                                      <label for="message" class="label">Write a Message</label>
                                      <textarea class="form-control" id="message" placeholder="Message:" required  name="message"></textarea>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                  <button type="submit" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Contact US ends -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/home/contact.blade.php ENDPATH**/ ?>