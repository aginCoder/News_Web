<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.components.head')

<body>
    <div class="container-scroller">
        @include('admin.layouts.components.sidebar')

        <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.components.header')
            <div class="main-panel">
                <div class="content-wrapper bg-white">
                    @yield('content')
                </div>
            </div>
        </div>    
    </div>
@include('admin.layouts.components.footer')
@include('admin.layouts.components.scripts')

</body>
</html>