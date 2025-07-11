@include('admin.components.layout')
      <!-- partial:partials/_navbar.html -->
       @include('admin.partials._navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
@include('admin.partials._sidebar')
        <!-- partial -->
        <div class="main-panel">
        @include('admin.components.main-panel')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
           @include('admin.partials._footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends --
    </div>
    