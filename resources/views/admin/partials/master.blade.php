<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')
<body>
    <div class="container-scroller">
        @include('admin.partials.header')
        <div class="container-fluid page-body-wrapper">
            @include('admin.partials.sidebar')
            @yield('main')
        </div>
    </div>
    @include('admin.partials.footer')
</body>
</html>