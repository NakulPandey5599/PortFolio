<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendor/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables.net/jquery.dataTables.js')}}"></script>
    <!-- <script src="{{asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script> -->
    <script src="{{asset('assets/vendor/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
        <script src="{{asset('assets/js/file-upload.js')}}"></script>

    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script> -->
    <!-- End custom js for this page-->
    <script>
    function addFeature() {
      const ul = document.getElementById('featuresList');
      const li = document.createElement('li');
      li.innerHTML = `<input type="text" class="form-control"  name="features[]" placeholder="Enter feature">`;
      ul.appendChild(li);
    }
  </script>