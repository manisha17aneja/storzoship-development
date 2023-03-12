 <!-- footer start -->
    <!-- start bundle -->

    <script>
      
      let APP_URL = '<?php echo url('/'); ?>';
      //alert(APP_URL);
    </script>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- end bundle -->
    
    <!-- start Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- start inject -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- end inject -->

    <!-- start custom js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/logistic.js') }}"></script>
    <!--<script src="{{ asset('assets/js/orders.js') }}"></script>-->

    <script src="{{ asset('assets/js/orders/search.js') }}"></script>
    <script src="{{ asset('assets/js/orders/process.js') }}"></script>
    <script src="{{ asset('assets/js/orders/created.js') }}"></script>
    <script src="{{ asset('assets/js/orders/intransit.js') }}"></script>
    <script src="{{ asset('assets/js/orders/ofd.js') }}"></script>
    <script src="{{ asset('assets/js/orders/ndr.js') }}"></script>
    <script src="{{ asset('assets/js/orders/delivered.js') }}"></script>
    <script src="{{ asset('assets/js/orders/rto-intransit.js') }}"></script>
    <script src="{{ asset('assets/js/orders/rto-delivered.js') }}"></script>
    <script src="{{ asset('assets/js/orders/error.js') }}"></script>
    <script src="{{ asset('assets/js/orders/waiting.js') }}"></script>
    <script src="{{ asset('assets/js/orders/cancel.js') }}"></script>
    <script src="{{ asset('assets/js/orders/shopify-waiting.js') }}"></script>

    <script src="{{ asset('assets/js/finance/finance.js') }}"></script>
    <script src="{{ asset('assets/js/cod/cod.js') }}"></script>
    <script src="{{ asset('assets/js/label/label.js') }}"></script>
    <script src="{{ asset('assets/js/kyc/kyc.js') }}"></script>
    <script src="{{ asset('assets/js/orders/orders.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>



    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->



<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

      
    <script>
      $(".mat-button-base").click(function() {
        $(".menu-dropdown-container").toggleClass('show')
      })
      $(".bell-icon-btn").click(function() {
        $(".ng-trigger-openCloseSidebar").addClass("show")
      })
      $(".ng-trigger-openCloseSidebar-close").click(function() {
        $(".ng-trigger-openCloseSidebar").removeClass("show")
      })

      $('.dropify').dropify();
    </script>
    <!-- End custom js for this page -->
<!-- footer end -->
<!--

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" type="text/javascript"></script>

<script>

    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;

    var LogoUpload2 = new Dropzone("#LogoUpload2", {
      url: '{{ route("uploadFile") }}', // Set the url for your upload script location
      paramName: "file", // The name that will be used to transfer the file
      maxFiles: 5,
      maxFilesize: 10, // MB
      addRemoveLinks: true,
      accept: function(file, done) {
          console.log(file.name);
          if (file.name == "wow.jpg") {
              done("Naha, you don't.");
          } else {
              done();
          }
      }
    });

    LogoUpload2.on("sending", function(file, xhr, formData) {
        formData.append("_token", CSRF_TOKEN);
    }); 

    LogoUpload2.on("success", function(file, response) {
        console.log(file);
        if(response.success == 0){ // Error
              alert(response.error);
        }
    });

 </script>
  -->
