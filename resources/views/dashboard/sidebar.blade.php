<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
    <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="20" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{$setting->favicon}}" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{Auth::user()->name}}</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link active" aria-current="page">
          <i class="fa fa-home"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('blog.create') }}" class="nav-link text-white">
          <i class="fa fa-pen"></i> Create Blog
        </a>
      </li>
      <li>
        <a href="{{ route('blog.index') }}" class="nav-link text-white">
          <i class="fa fa-table"></i> View Blogs
        </a>
      </li>
      <li>
        <a href="{{ route('portfolio.create') }}" class="nav-link text-white">
          <i class="fa fa-pen"></i> Create Portfolio
        </a>
      </li>
      <li>
        <a href="{{ route('portfolio.index') }}" class="nav-link text-white">
          <i class="fa fa-table"></i> View Portfolios
        </a>
      </li>
      <li>
        <a href="{{ route('settings') }}" class="nav-link text-white">
          <i class="fa fa-cog"></i> Settings
        </a>
      </li>
      <hr>
      <li>
        <form action="{{ route('logout.post') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg> <span class="ms-1 d-none d-sm-inline">Logout</span></button>
    </form>
    </li>
    </ul>
  </div>
</div>