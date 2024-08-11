<!DOCTYPE html>
<html lang="en">
@include('client.layouts.components.head')

<style>
  .profile-block {
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }
  .profile-avatar {
  width: 120px;
  height: 120px;
  margin: 0 auto;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #ffffff;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
  }
  .profile-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  }
  .profile-name {
  text-align: center;
  margin-top: 15px;
  font-size: 20px;
  font-weight: bold;
  color: #333333;
  }
</style>
<body>
  
<div class="container-scroller">
  <!-- ======= Header ======= -->
  @include('client.layouts.components.header')

  <main id="main">
    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9" data-aos="fade-up">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta">
 
                <span class="date">{{ $post->created_at }}</span>
              </div>
              <h1 class="mb-5">{{ $post->name }}</h1>
              <p><span class="firstcharacter">{!! $post->content !!}</p>
            </div>
            <!-- End Single Post Content -->
  
            <!-- ======= Comments ======= -->
            <div class="comments">
              <h5 class="comment-title py-4">2 Comments</h5>
              <div class="comment d-flex mb-4">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="/client_assets/img/person-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="flex-grow-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex align-items-baseline">
                    <h6 class="me-2">Jordan Singer</h6>
                    <span class="text-muted">2d</span>
                  </div>
                  <div class="comment-body">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                  </div>
  
                  <div class="comment-replies bg-light p-3 mt-3 rounded">
                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>
  
                    <div class="reply d-flex mb-4">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="/client_assets/img/person-4.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                          <h6 class="mb-0 me-2">Brandon Smith</h6>
                          <span class="text-muted">2d</span>
                        </div>
                        <div class="reply-body">
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                    <div class="reply d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="/client_assets/img/person-3.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                          <h6 class="mb-0 me-2">James Parsons</h6>
                          <span class="text-muted">1d</span>
                        </div>
                        <div class="reply-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- Comments --}}
              @foreach ($post->comments->where('parent_id', null) as $comment)

                @include('client.layouts.page.chiTietTin.components.comment')
            @endforeach

            </div>
            <!-- End Comments -->
  
            <!-- ======= Comments Form ======= -->
            @auth
                <form action="{{ route('comment') }}" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <div class="row justify-content-center mt-5">
                      <div class="col-lg-12">
                          <div class="row">
                              <div class="col-12 mb-3">
                                  <textarea class="form-control" value="{{ old('content') }}" name="content" id="comment-message" placeholder="Enter your comment" cols="30" rows="10" required></textarea>
                              </div>
                              <div class="col-12">
                                  <button type="submit" class="btn btn-primary" value="Post comment">Đăng bình luận</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
            @endauth
            <!-- End Comments Form -->
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

            <div class="aside-block profile-block">
              <h3 class="aside-title">Profile Tác giả</h3>
              <div class="profile">
                <div class="profile-avatar">
                  <img class="avatar-img img-fluid" src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=random" alt="Avatar của {{$post->user->name}}">
                </div>
                <h4 class="profile-name">Name: {{$post->user->name}}</h4>
              </div>
            </div><!-- End Profile -->            

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
</div>
@include('client.layouts.components.scripts')

</body>
</html>