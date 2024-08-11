@extends('client.layouts.index')

@section('content')
     <!-- ======= Hero Slider Section ======= -->
     <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
          <div class="row">
            <div class="col-12">
              <div class="swiper sliderFeaturedPosts">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="" class="img-bg d-flex align-items-end" style="background-image: url('client_assets/img/post-slide-1.jpg');">
                      <div class="img-bg-inner">
                        <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="" class="img-bg d-flex align-items-end" style="background-image: url('client_assets/img/post-slide-2.jpg');">
                      <div class="img-bg-inner">
                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="" class="img-bg d-flex align-items-end" style="background-image: url('client_assets/img/post-slide-3.jpg');">
                      <div class="img-bg-inner">
                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('client_assets/img/post-slide-4.jpg');">
                      <div class="img-bg-inner">
                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="custom-swiper-button-next">
                  <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                  <span class="bi-chevron-left"></span>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Hero Slider Section -->
  
      <!-- ======= Tin mới nhất Category Section ======= -->
      <section class="category-section">
        <div class="container" data-aos="fade-up">
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Tin mới nhất</h2>
            <div><a href="category.html" class="more">See All TMN</a></div>
          </div>

            <div class="row">
              @foreach ($tinmoi as $post)
              <div class="col-lg-4 mb-4">
                <div class="post-entry-1">
                  <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $post->slug) }}">
                    <img width="100%" height="300px" style="object-fit: cover" src="{{ $post->thumbnail }}" alt="" class="rounded">
                  </a>
                  <div class="post-meta">
                    <span class="date">{{ $post->created_at }}</span> 
                    <span class="mx-1">•</span> 
                  </div>
                  <h2 class="mb-2">
                    <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $post->slug) }}">{{ $post->name }}</a>
                  </h2>
                  <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                  <p class="mb-4 d-block">{{ $post->short_content}}</p>
                </div>
              </div>   
              @endforeach
            </div>

        </div>
      </section>
      <!-- End Tin mới nhất Category Section -->
  
      <!-- ======= Tin xem nhiều Category Section ======= -->
      <section class="category-section">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Tin xem nhiều</h2>
            <div><a href="category.html" class="more">See All TXN</a></div>
          </div>
  
          <div class="row">
            <div class="col-md-3">
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
        
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
        
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
        
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
        
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
        
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
            </div>
        
            <div class="col-md-9 order-md-2">
                <div class="row">
                    @foreach ($tinmoi as $post)
                    <div class="col-lg-4">
                        <div class="post-entry-1">
                            <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $post->slug) }}">
                                <img width="100%" height="200px" src="{{ $post->thumbnail }}" alt="" class="rounded">
                            </a>
                            <div class="post-meta">
                                <span class="date">{{ $post->created_at }}</span>
                                <span class="mx-1">•</span>
                            </div>
                            <h2 class="mb-2">
                                <a href="">{{ $post->name}}</a>
                            </h2>
                            <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                            <p class="mb-4 d-block">{{ $post->short_content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>        
        </div>
      </section>
      <!-- End Tin xem nhiều Category Section -->
@endsection