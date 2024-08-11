<script src="/admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin_assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin_assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin_assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin_assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin_assets/js/off-canvas.js"></script>
    <script src="/admin_assets/js/hoverable-collapse.js"></script>
    <script src="/admin_assets/js/misc.js"></script>
    <script src="/admin_assets/js/settings.js"></script>
    <script src="/admin_assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/admin_assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://codescandy.com/geeks-bootstrap-5/assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>

    {{-- ckeditor + ckfinder --}}
    <script src="/admin_assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="/admin_assets/plugins/ckfinder_2/ckfinder.js"></script>
    <script src="/admin_assets/library/finder.js"></script>

    {{-- Select --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        const BASE_URL = "{{ env('BASE_URL') }}";
    </script>

<script>
    // DataTable
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    // Tagify
    var inputTag = document.querySelector('input[name=meta_keyword]');
    new Tagify(inputTag);

    // Select 2
    $(".js-example-basic-multiple-limit").select2({
        maximumSelectionLength: 4          // maximumSelectionLength: kiểu như giới hạn của danh mục
    });
</script>


    