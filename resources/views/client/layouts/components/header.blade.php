<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1><a href="{{ route('client.layouts.index') }}">AginBlog</a></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('client.layouts.index') }}">Blog</a></li>

          <li class="dropdown"><a href="{{ route('client.layouts.page.loaiTin.tin') }}"><span>Categories</span> 
            <i class="bi bi-chevron-down dropdown-indicator"></i>
          </a>
            @foreach ($categories as $slug)
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-block px-2" href="{{ route('client.layouts.page.loaitin', 'suc-khoe') }}">Sức khỏe</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-block px-2" href="{{ route('client.layouts.page.loaitin', 'du-lich') }}">Du lịch</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-block px-2" href="{{ route('client.layouts.page.loaitin', 'giao-thong') }}">Giao thông</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-block px-2" href="{{ route('client.layouts.page.loaitin', 'xa-hoi') }}">Xã hội</a>
              </li>
          </ul>
            @endforeach
          </li>

          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="{{ route('timkiem') }}" class="search-form" method="POST">
            @csrf
            @method('POST') 
            <span class="icon bi-search"></span>
            <input name="keyword" type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close" type="submit"><span class="bi-x"></span></button>
          </form>
        </div>
        <!-- End Search Form -->
        @auth
        <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i></a>
        @endauth
        @guest
            <a href="{{ route('login') }}"><i class="bi bi-person-add"></i></a>
        @endguest
      </div>

    </div>



  <style>
      .nav-link:hover {
          color: red !important; 
      }
  </style>
  </header>