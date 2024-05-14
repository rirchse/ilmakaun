    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo">
      <a href="#">
        <img src="<?php echo e($setting->logo); ?>" alt="Logo" style="max-width:<?php echo e($setting->logo_width); ?>px">
      </a>
    </div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">

        <a href="/dashboard" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <?php if($setting->blog): ?>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Blogs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('blog.create')); ?>" class="nav-link">Create Blog</a></li>
          <li class="nav-item"><a href="<?php echo e(route('blog.index')); ?>" class="nav-link">View Blog</a></li>
        </ul>
        <?php endif; ?>
        <?php if($setting->portfolio): ?>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Portfolios</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('portfolio.create')); ?>" class="nav-link">Create Portfolio</a></li>
          <li class="nav-item"><a href="<?php echo e(route('portfolio.index')); ?>" class="nav-link">View Portfolio</a></li>
        </ul>
        <?php endif; ?>
        <?php if($setting->product_slider): ?>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Accomodation</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('product.create')); ?>" class="nav-link">Add Item</a></li>
          <li class="nav-item"><a href="<?php echo e(route('product.index')); ?>" class="nav-link">View Items</a></li>
        </ul>
        <?php endif; ?>
        <a href="<?php echo e(route('customer')); ?>" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Customers</span>
            
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-24"></i>
            <span class="menu-item-label">Photo Gallery</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('gallery.create')); ?>" class="nav-link">Add a Photo</a></li>
          <li class="nav-item"><a href="<?php echo e(route('gallery.index')); ?>" class="nav-link">View Gallery</a></li>
        </ul>

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo e(route('settings')); ?>" class="nav-link">Homepage Setting</a></li>
          
        </ul>






        
      </div><!-- br-sideleft-menu -->
      
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              
              <!-- end: if statement -->
            </a>
            
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="#" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo e(auth()->user()->name); ?></span>
              <img src="<?php echo e($setting->logo); ?>" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li>
                    <form action="<?php echo e(route('logout.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <a href="#" onclick="return confirm('Are you sure you want to logout?', this.parentNode.submit())"><i class="icon ion-power"></i> Sign Out</a>
                    </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a href="#" class="pos-relative">
            <i class="icon ion-power"></i>
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## --><?php /**PATH /srv/www/ilmakaun/resources/views/dashboard/navbar.blade.php ENDPATH**/ ?>