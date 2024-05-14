    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo">
      <a href="#">
        <img src="{{$setting->logo}}" alt="Logo" style="max-width:{{$setting->logo_width}}px">
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
        @if($setting->blog)
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Blogs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('blog.create')}}" class="nav-link">Create Blog</a></li>
          <li class="nav-item"><a href="{{route('blog.index')}}" class="nav-link">View Blog</a></li>
        </ul>
        @endif
        @if($setting->portfolio)
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Portfolios</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('portfolio.create')}}" class="nav-link">Create Portfolio</a></li>
          <li class="nav-item"><a href="{{route('portfolio.index')}}" class="nav-link">View Portfolio</a></li>
        </ul>
        @endif
        @if($setting->product_slider)
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Accomodation</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('product.create')}}" class="nav-link">Add Item</a></li>
          <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link">View Items</a></li>
        </ul>
        @endif
        <a href="{{route('customer')}}" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Customers</span>
            {{-- <i class="menu-item-arrow fa fa-angle-down"></i> --}}
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
          <li class="nav-item"><a href="{{route('gallery.create')}}" class="nav-link">Add a Photo</a></li>
          <li class="nav-item"><a href="{{route('gallery.index')}}" class="nav-link">View Gallery</a></li>
        </ul>

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('settings')}}" class="nav-link">Homepage Setting</a></li>
          {{-- <li class="nav-item"><a href="#" class="nav-link">Dashboard Setting</a></li> --}}
        </ul>






        {{-- <a href="mailbox.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">Navigation</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="navigation.html" class="nav-link">Basic Nav</a></li>
          <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
        </ul>
        
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
          <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
          <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
          <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
          <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
          <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
          <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
          <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
          <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
          <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Utilities</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
          <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
          <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
          <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
          <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
          <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
          <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
          <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
        </ul>
        <a href="layouts.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Layouts</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="sitemap.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Sitemap</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link --> --}}
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
              {{-- <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span> --}}
              <!-- end: if statement -->
            </a>
            {{-- <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                <a href="#" class="tx-11">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                        <span class="tx-11 tx-gray-500">Yesterday</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu --> --}}
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              {{-- <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span> --}}
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="#" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              {{-- <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list --> --}}
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">{{auth()->user()->name}}</span>
              <img src="{{$setting->logo}}" class="wd-32 rounded-circle" alt="">
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
                    <form action="{{ route('logout.post') }}" method="POST">
                        @csrf
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
    <!-- ########## END: HEAD PANEL ########## -->