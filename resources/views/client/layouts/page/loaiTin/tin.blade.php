<!DOCTYPE html>
<html lang="en">
@include('client.layouts.components.head')

@yield('content')

<body>
  <!-- ======= Header ======= -->
  @include('client.layouts.components.header')
  <!-- End Header -->

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9" data-aos="fade-up">
            <h3 class="category-title">Danh mục: {{ $category->name }}</h3>
            @foreach ($category->posts as $post)
            <div class="d-md-flex post-entry-2 half">
              <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $post->slug) }}" class="me-4 thumbnail">
                <img width="500px" src="{{ $post->thumbnail }}" alt="" class="img-fluid">
              </a>
            <div>
              <div class="post-meta">
                <span class="date">{{ $post->created_at }}</span> 
                <span class="mx-1">•</span> 
              </div>
                <h3>
                  <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $post->slug) }}">
                  {{ $post->name }}</a>
                </h3>
                <p>{{ $post->short_content}}</p>
                <div class="d-flex align-items-center author">
                  <div class="photo">
                    <img src="{{ $post->thumbnail }}" alt="" class="img-fluid">
                  </div>
                <div class="name">
                  <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                </div>
              </div>
            </div>
          </div>
            @endforeach
            
            <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
              <h3 class="aside-title">Video</h3>
              <div class="video-post">
                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="/client_assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Video -->

            <div class="aside-block">
              <h3 class="aside-title">Categories</h3>
              <ul class="aside-links list-unstyled">
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
              </ul>
            </div><!-- End Categories -->

            <div class="aside-block">
              <h3 class="aside-title">Tags</h3>
              <ul class="aside-tags list-unstyled">
                <li><a href="category.html">Business</a></li>
                <li><a href="category.html">Culture</a></li>
                <li><a href="category.html">Sport</a></li>
                <li><a href="category.html">Food</a></li>
                <li><a href="category.html">Politics</a></li>
                <li><a href="category.html">Celebrity</a></li>
                <li><a href="category.html">Startups</a></li>
                <li><a href="category.html">Travel</a></li>
              </ul>
            </div><!-- End Tags -->

          </div>

        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('client.layouts.components.footer')

  <!-- Vendor JS Files -->
  @include('client.layouts.components.scripts')

</body>

</html>