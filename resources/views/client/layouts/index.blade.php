<!DOCTYPE html>
<html lang="en">
@include('client.layouts.components.head')

<body>
  
<div class="container-scroller">
  <!-- ======= Header ======= -->
  @include('client.layouts.components.header')
  <!-- main -->
  <main id="main">
  
   @yield('content')

  </main>
  <!-- ======= Footer ======= -->
  @include('client.layouts.components.footer')
</div>
@include('client.layouts.components.scripts')

</body>
</html>