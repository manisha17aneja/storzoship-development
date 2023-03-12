(function($) {
  'use strict';
  $.fn.andSelf = function() {
    return this.addBack.apply(this, arguments);
  }
  $(function() {
    if ($("#currentBalanceCircle").length) {
      var bar = new ProgressBar.Circle(currentBalanceCircle, {
        color: '#000',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 12,
        trailWidth: 12,
        trailColor: '#0d0d0d',
        easing: 'easeInOut',
        duration: 1400,
        text: {
          autoStyleContainer: false
        },
        from: { color: '#d53f3a', width: 12 },
        to: { color: '#d53f3a', width: 12 },
        // Set default step function for all animate calls
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
          circle.path.setAttribute('stroke-width', state.width);
      
          var value = Math.round(circle.value() * 100);
          circle.setText('');
      
        }
      });

      bar.text.style.fontSize = '1.5rem';
      bar.animate(0.4);  // Number from 0.0 to 1.0
    }
    if($('#audience-map').length) {
      $('#audience-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        panOnDrag: true,
        focusOn: {
          x: 0.5,
          y: 0.5,
          scale: 1,
          animate: true
        },
        series: {
          regions: [{
            scale: ['#3d3c3c', '#f2f2f2'],
            normalizeFunction: 'polynomial',
            values: {

              "BZ": 75.00,
              "US": 56.25,
              "AU": 15.45,
              "GB": 25.00,
              "RO": 10.25,
              "GE": 33.25
            }
          }]
        }
      });
    }
    if ($("#transaction-history").length) {
      var areaData = {
        labels: ["Paypal", "Stripe","Cash"],
        datasets: [{
            data: [55, 25, 20],
            backgroundColor: [
              "#111111","#00d25b","#ffab00"
            ]
          }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 70,
        elements: {
          arc: {
              borderWidth: 0
          }
        },      
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        }
      }
      var transactionhistoryChartPlugins = {
        beforeDraw: function(chart) {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;
      
          ctx.restore();
          var fontSize = 1;
          ctx.font = fontSize + "rem sans-serif";
          ctx.textAlign = 'left';
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#ffffff";
      
          var text = "$1200", 
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2.4;
      
          ctx.fillText(text, textX, textY);

          ctx.restore();
          var fontSize = 0.75;
          ctx.font = fontSize + "rem sans-serif";
          ctx.textAlign = 'left';
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#6c7293";

          var texts = "Total", 
              textsX = Math.round((width - ctx.measureText(text).width) / 1.93),
              textsY = height / 1.7;
      
          ctx.fillText(texts, textsX, textsY);
          ctx.save();
        }
      }
      var transactionhistoryChartCanvas = $("#transaction-history").get(0).getContext("2d");
      var transactionhistoryChart = new Chart(transactionhistoryChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: transactionhistoryChartPlugins
      });
    }
    if ($("#transaction-history-arabic").length) {
      var areaData = {
        labels: ["Paypal", "Stripe","Cash"],
        datasets: [{
            data: [55, 25, 20],
            backgroundColor: [
              "#111111","#00d25b","#ffab00"
            ]
          }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 70,
        elements: {
          arc: {
              borderWidth: 0
          }
        },      
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        }
      }
      var transactionhistoryChartPlugins = {
        beforeDraw: function(chart) {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;
      
          ctx.restore();
          var fontSize = 1;
          ctx.font = fontSize + "rem sans-serif";
          ctx.textAlign = 'left';
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#ffffff";
      
          var text = "$1200", 
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2.4;
      
          ctx.fillText(text, textX, textY);

          ctx.restore();
          var fontSize = 0.75;
          ctx.font = fontSize + "rem sans-serif";
          ctx.textAlign = 'left';
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#6c7293";

          var texts = "مجموع", 
              textsX = Math.round((width - ctx.measureText(text).width) / 1.93),
              textsY = height / 1.7;
      
          ctx.fillText(texts, textsX, textsY);
          ctx.save();
        }
      }
      var transactionhistoryChartCanvas = $("#transaction-history-arabic").get(0).getContext("2d");
      var transactionhistoryChart = new Chart(transactionhistoryChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: transactionhistoryChartPlugins
      });
    }
    if ($('#owl-carousel-basic').length) {
      $('#owl-carousel-basic').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4500,
        navText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });
    }
    var isrtl = $("body").hasClass("rtl");
    if ($('#owl-carousel-rtl').length) {
      $('#owl-carousel-rtl').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        rtl: isrtl,
        autoplay: true,
        autoplayTimeout: 4500,
        navText: ["<i class='mdi mdi-chevron-right'></i>", "<i class='mdi mdi-chevron-left'></i>"],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });
    }
    });
})(jQuery);


$("#chatBoat").click(function(){
  $("#chatBoatContent").addClass("active");
});
$("#chatBoatClose").click(function(){
  $("#chatBoatContent").removeClass("active");
});

$(document).ready(function() {
  $(".changePasswordSubmit11").click(function(e){
      e.preventDefault();

      var _token = $("input[name='_token']").val();
     // var email = $("#email").val();
     // var pswd = $("#pwd").val();
     // var address = $("#address").val();
     var current_password = $("input[name='current_password']").val();
     var password = $("input[name='password']").val();
     var password_confirmation = $("input[name='password_confirmation']").val();

      $.ajax({
         // url: "{{ route('user.user.changepassword') }}",
          url: $('.changePasswordForm').attr('action'),
          type:'POST',
          data:  {_token:_token, current_password:current_password, password:password, password_confirmation:password_confirmation},
          success: function(data) {
            console.log(data.error)
              if($.isEmptyObject(data.error)){
                  alert(data.success);
              }else{
                  printErrorMsg(data.error);
              }
          }
      });
  }); 

  function printErrorMsg (msg) {
      $.each( msg, function( key, value ) {
      console.log(key);
        $('.'+key+'_err').text(value);
      });
  }
});

$(document).ready(function() {



//************************************** Menu Start ********************************************//

  // Table

  var menuTable = $('.admin_menus').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "menus",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'title', name: 'title'},
        {data: 'slug', name: 'slug'},
        {data: 'page_name', name: 'page_name'},
       // {data: 'image', name: 'image'},
        {data: 'image',        
        
          render: function(data, type, row) {
                  return '<img class="img-xs rounded-circle" src="'+data+'" alt="">';
          }
        },
        {data: 'status',        
        
          render: function(data, type, row) {

              if(data == 1) {
                  return '<button type="button" class="btn btn-success">Publish</button>';
              }else if(data == 2) {  
                return '<button type="button" class="btn btn-danger">Unpublish</button>';
              } else { 
                return '<button type="button" class="btn btn-warning">Draft</button>'; 
              }

          }
        },
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });

  // Store

  $('.addMenuForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);
    //formData.append('description', CKEDITOR.instances.description.getData());

    $.ajax({
        url: 'menus/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.addMenuForm')[0].reset();
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                menuTable.ajax.reload();
                 // Close Modal
                 $('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

  }); 

  // update 
    $('.updateMenuForm').submit(function(e) {
      e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "menus/update",
            type: 'post',
            data: formData,
            dataType: 'json',
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){

            if($.isEmptyObject(data.error)){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reset Form
                  $('.updateMenuForm')[0].reset();
                  // Reload DataTable
                  menuTable.ajax.reload();  
                  // Close Modal
                  $('.editModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }

            }
        });
  });

  
  // show
  $('#menuTable').on('click','.updateMenu',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#menu_id').val(id);

    // AJAX request
    $.ajax({
        url: "menus/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){
             
                  $('#edit_title').val(response.title);
                  //CKEDITOR.instances.edit_description.setData(response.description);
                  $('#edit_link').val(response.link);
                  $('#edit_status').val(response.status);
                  // Reload DataTable
                  menuTable.ajax.reload();

            }else{
                  alert("Invalid ID.");
            }
        }
    });

  });


  // Delete 
  $('#menuTable').on('click','.deleteMenu',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
          // AJAX request
          $.ajax({
              url: "menus/delete",
              type: 'post',

              data: {_token: _token,id: id},
              success: function(data){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reload DataTable
                  menuTable.ajax.reload();
  
              }
          });
    }

  });

//************************************** Menu End ********************************************//
 

//************************************** User Start ********************************************//

  // Table

  var userTable = $('.admin_users').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "users",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'phone', name: 'phone'},
        {data: 'email', name: 'email'},
        //{data: 'type', name: 'type'},
        {data: 'type', orderable: false, searchable: false,        
        
        render: function(data, type, row) {

            if(data == 1) {
              return 'Admin';
            }else if(data == 2) {  
              return 'Member';
            }else if(data == 3) {  
              return 'Accountant';
            } else { 
              return 'Customer';
            }

        }
      },
        {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });

  // Store

  $('.addUserForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);
    //formData.append('description', CKEDITOR.instances.description.getData());

    $.ajax({
        url: 'users/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.addUserForm')[0].reset();
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                userTable.ajax.reload();
                 // Close Modal
                 $('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

  }); 

  // update 
    $('.updateUserForm').submit(function(e) {
      e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "users/update",
            type: 'post',
            data: formData,
            dataType: 'json',
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){

            if($.isEmptyObject(data.error)){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reset Form
                  $('.updateUserForm')[0].reset();
                  // Reload DataTable
                  console.log('kkkkkk');
                  userTable.ajax.reload();  
                  // Close Modal
                  $('.editModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }

            }
        });
  });

  
  // show
  $('#userTable').on('click','.updateUser',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#user_id').val(id);

    // AJAX request
    $.ajax({
        url: "users/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                  $('#edit_type').val(response.type);
                  $('#edit_first_name').val(response.first_name);
                  $('#edit_last_name').val(response.last_name);
                  $('#edit_phone').val(response.phone);
                  $('#edit_email').val(response.email);
                  //$('#edit_password').val(response.password);
                  $('#edit_is_active').val(response.is_active);
                  //CKEDITOR.instances.edit_description.setData(response.description);
                  
                  // Reload DataTable
                  userTable.ajax.reload();

            }else{
                  alert("Invalid ID.");
            }
        }
    });

  });


  // Delete 
  $('#userTable').on('click','.deleteUser',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
          // AJAX request
          $.ajax({
              url: "users/delete",
              type: 'post',

              data: {_token: _token,id: id},
              success: function(data){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reload DataTable
                  userTable.ajax.reload();
  
              }
          });
    }

  });

//************************************** User End ********************************************//


//************************************** Customer Start ********************************************//

  // Customers

  var customerTable = $('.admin_customers').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "customers",
    columns: [
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        //{data: 'password', name: 'password'},
        {data: 'phone', name: 'phone'},
        {data: 'wallet_balance', name: 'wallet_balance'},
        {data: 'allow_credit_limit', name: 'allow_credit_limit'},
        {data: 'created_by', name: 'created_by'},

    ]
  });

    // Pending

    var pendingTable = $('.admin_pending').DataTable({

      bLengthChange: false,
      processing: true,
      serverSide: true,
      ajax: "pending",
      columns: [
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'website', name: 'website'},
          {data: 'phone', name: 'phone'},
          {data: 'address', name: 'address'},
          {data: 'city', name: 'city'},
          {data: 'pincode', name: 'pincode'},
          {data: 'created_at', name: 'created_at'},
          //{data: 'status', name: 'status', orderable: false, searchable: false},
          {data: 'status', orderable: false, searchable: false,        
        
          render: function(data, type, row) {

              if(data == 1) {
                return '<button type="button" class="btn btn-warning">Pending</button>';
              }else if(data == 2) {  
                return '<button type="button" class="btn btn-success">Approved</button>';
              } else { 
                return '<button type="button" class="btn btn-danger">Rejected</button>';
              }

          }
        },
        {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
    });

  // Approve

  var approveTable = $('.admin_approve').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "approve",
    columns: [
      {data: 'name', name: 'name'},
      {data: 'email', name: 'email'},
      {data: 'website', name: 'website'},
      {data: 'phone', name: 'phone'},
      {data: 'address', name: 'address'},
      {data: 'city', name: 'city'},
      {data: 'pincode', name: 'pincode'},
      {data: 'created_at', name: 'created_at'},
      //{data: 'status', name: 'status', orderable: false, searchable: false},
      {data: 'status', orderable: false, searchable: false,        
    
        render: function(data, type, row) {

            if(data == 1) {
              return '<button type="button" class="btn btn-warning">Pending</button>';
            }else if(data == 2) {  
              return '<button type="button" class="btn btn-success">Approved</button>';
            } else { 
              return '<button type="button" class="btn btn-danger">Rejected</button>';
            }

        }
      },
      {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
      {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });


  // Rejected

  var rejectedTable = $('.admin_rejected').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "rejected",
    columns: [
      {data: 'name', name: 'name'},
      {data: 'email', name: 'email'},
      {data: 'website', name: 'website'},
      {data: 'phone', name: 'phone'},
      {data: 'address', name: 'address'},
      {data: 'city', name: 'city'},
      {data: 'pincode', name: 'pincode'},
      {data: 'created_at', name: 'created_at'},
      //{data: 'status', name: 'status', orderable: false, searchable: false},
      {data: 'status', orderable: false, searchable: false,        
    
        render: function(data, type, row) {

            if(data == 1) {
              return '<button type="button" class="btn btn-warning">Pending</button>';
            }else if(data == 2) {  
              return '<button type="button" class="btn btn-success">Approved</button>';
            } else { 
              return '<button type="button" class="btn btn-danger">Rejected</button>';
            }

        }
      },
      {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
      {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });


  // Preawb Dashboard List

  var customerPreawbTable = $('.admin_customer_pre_awb').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "customer-pre-awb",
    columns: [
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'is_pre_awb_allow', name: 'is_pre_awb_allow', orderable: false, searchable: false},
    ]
  });


  // Show Customer Api setting

  $(document).on('change', '.allow_user_id', function() {
      $('.error-text').text('');

      var id = $(this).val();
      var _token = $("input[name='_token']").val();

      // AJAX request
      $.ajax({
        url: "/admin/show-customer-api-setting",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                $('#api_pickup_address_id').empty().append(response.all_pickup_address);

                $('#api_key').val(response.api_key);
                $('#api_user_id').val(response.api_user_id);

                if(response.api_is_web_access == 1){

                  $('#api_is_web_access').prop('checked', true);
                  $(".div_api_key").show();
                  $(".div_api_user_id").show();

                } else {

                  $('#api_is_web_access').prop('checked', false);
                  $(".div_api_key").hide();
                  $(".div_api_user_id").hide();
                  
                }


            }else{
                    //alert("Invalid ID.");
                    $(".div_allow_credit_limit").hide();
                    $('.updateCustomerAllowCreditForm')[0].reset();
                    $('#allow_credit').prop('checked', false);
            }
        }
    });

  });

  $(document).on('click', '.customer-api-setting-reset', function() {
    $('#api_pickup_address_id').empty().append('<option value="">Select Option</option>');
    $(".div_api_key").hide();
    $(".div_api_user_id").hide();
  });

  $(document).on('change', '#api_is_web_access', function() {

      if(this.checked) {
        $(".div_api_key").show();
        $(".div_api_user_id").show();
      }else{
        $(".div_api_key").hide();
        $(".div_api_user_id").hide();
      }

  });


    // Store Customer Api setting

  $('.addCustomerApiSettingForm').submit(function(e) {
      e.preventDefault();
      $('.error-text').text('');
      let formData = new FormData(this);
  
      $.ajax({
          url: '/admin/store-customer-api-setting',
          type:'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
              if($.isEmptyObject(data.error)){
  
                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reset Form
                  $('.addCustomerApiSettingForm')[0].reset();
                  $('#api_pickup_address_id').empty().append('<option value="">Select Option</option>');
                  $(".div_api_key").hide();
                  $(".div_api_user_id").hide();

  
              }else{
                  toastr.error(data.error, 'Error',{ closeButton: true });
                  printErrorMsg(data.error);
              }
          }
      });

  }); 
  

//************************************** Customer Start ********************************************//

//************************************** Rule Start ********************************************//

  // Table

  var ruleTable = $('.admin_rules').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "rules",
    columns: [
       // {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'from_kg', name: 'from_kg'},
        {data: 'to_kg', name: 'to_kg'},
        {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });

  // Store

  $('.addRuleForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);
    //formData.append('description', CKEDITOR.instances.description.getData());

    $.ajax({
        url: 'rules/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.addRuleForm')[0].reset();
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                ruleTable.ajax.reload();
                 // Close Modal
                 $('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

  }); 

  // update 
    $('.updateRuleForm').submit(function(e) {
      e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "rules/update",
            type: 'post',
            data: formData,
            dataType: 'json',
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){

            if($.isEmptyObject(data.error)){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reset Form
                  $('.updateRuleForm')[0].reset();
                  // Reload DataTable
                  ruleTable.ajax.reload();  
                  // Close Modal
                  $('.editModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }

            }
        });
  });

  
  // show
  $('#ruleTable').on('click','.updateRule',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#rule_id').val(id);

    // AJAX request
    $.ajax({
        url: "rules/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                    $('#edit_name').val(response.name);
                    $('#edit_from_kg').val(response.from_kg);
                    $('#edit_to_kg').val(response.to_kg);
                    //$('#edit_is_active').val(response.is_active);
                  //CKEDITOR.instances.edit_description.setData(response.description);
                  
                  // Reload DataTable
                  ruleTable.ajax.reload();

            }else{
                  alert("Invalid ID.");
            }
        }
    });

  });


  // Delete 
  $('#ruleTable').on('click','.deleteRule',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
          // AJAX request
          $.ajax({
              url: "rules/delete",
              type: 'post',

              data: {_token: _token,id: id},
              success: function(data){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reload DataTable
                  ruleTable.ajax.reload();
  
              }
          });
    }

  });

//************************************** Rule End ********************************************//


  $(document).on('change', '.metrocity_is_active', function() {

    var _token = $("input[name='_token']").val();
    var id = $(this).attr('data-id');

      if(this.checked) {
        var is_active = 2;
      }else{
        var is_active = 1;
      }

      $.ajax({

        url: 'metrocity/status',//$('.changeCourierPriorityForm').attr('action'),
        type:'POST',
        data:  {_token:_token, id:id, is_active:is_active},
        success: function(data) {
            if($.isEmptyObject(data.error)){
              // alert(data.success);
                toastr.success(data.success, 'Success',{ closeButton: true });
            }else{
                printErrorMsg(data.error);
            }
        }
      });

  });

  $(document).on('change', '.logistic_is_active', function() {

    var _token = $("input[name='_token']").val();
    var id = $(this).attr('data-id');

      if(this.checked) {
        var is_active = 1;
      }else{
        var is_active = 0;
      }

      $.ajax({

        url: 'logistics/status',//$('.changeCourierPriorityForm').attr('action'),
        type:'POST',
        data:  {_token:_token, id:id, is_active:is_active},
        success: function(data) {
            if($.isEmptyObject(data.error)){
              // alert(data.success);
                toastr.success(data.success, 'Success',{ closeButton: true });
            }else{
                printErrorMsg(data.error);
            }
        }
      });

  });

  $(document).on('change', '.rule_is_active', function() {

    var _token = $("input[name='_token']").val();
    var id = $(this).attr('data-id');

      if(this.checked) {
        var is_active = 1;
      }else{
        var is_active = 0;
      }

      $.ajax({

        url: 'rules/status',//$('.changeCourierPriorityForm').attr('action'),
        type:'POST',
        data:  {_token:_token, id:id, is_active:is_active},
        success: function(data) {
            if($.isEmptyObject(data.error)){
              // alert(data.success);
                toastr.success(data.success, 'Success',{ closeButton: true });
            }else{
                printErrorMsg(data.error);
            }
        }
      });

  });


  $(document).on('change', '.user_is_active', function() {

      var _token = $("input[name='_token']").val();
      var id = $(this).attr('data-id');

        if(this.checked) {
          var is_active = 2;
        }else{
          var is_active = 1;
        }

        $.ajax({

          url: 'users/status',//$('.changeCourierPriorityForm').attr('action'),
          type:'POST',
          data:  {_token:_token, id:id, is_active:is_active},
          success: function(data) {
              if($.isEmptyObject(data.error)){
                // alert(data.success);
                  toastr.success(data.success, 'Success',{ closeButton: true });
              }else{
                  printErrorMsg(data.error);
              }
          }
        });

  });


  $(document).on('change', '.user_is_pre_awb_allow', function() {

    var _token = $("input[name='_token']").val();
    var id = $(this).attr('data-id');

      if(this.checked) {
        var is_pre_awb_allow = 2;
      }else{
        var is_pre_awb_allow = 1;
      }

      $.ajax({

        url: 'users/preawb_status',//$('.changeCourierPriorityForm').attr('action'),
        type:'POST',
        data:  {_token:_token, id:id, is_pre_awb_allow:is_pre_awb_allow},
        success: function(data) {
            if($.isEmptyObject(data.error)){
              // alert(data.success);
                toastr.success(data.success, 'Success',{ closeButton: true });
            }else{
                printErrorMsg(data.error);
            }
        }
      });

});


        //$(".is_active").change(function() {
         // e.preventDefault();
      /*   $('.is_active111').change(function(e) {
          e.preventDefault();
          console.log('kkk');

          if(this.checked) {
              $status = 2;
          }else{
              $status = 1;
          }

          var _token = $("input[name='_token']").val();
          var courier_id = $(this).attr('data-value');
          var status = $status;
         // alert(_token);
            $.ajax({
                //url: "{{ route('user.user.changeCourierPriority') }}",
                url: $('.changeCourierPriorityForm').attr('action'),
                type:'POST',
                data:  {_token:_token, courier_id:courier_id, status:status},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                      // alert(data.success);
                        toastr.success(data.success, 'Success',{ closeButton: true });
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        });*/


        $('.addCourierForm').submit(function(e) {
          e.preventDefault();
          $('.error-text').text('');
          let formData = new FormData(this);

          $.ajax({
              url: $('.addCourierForm').attr('action'),
              type:'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    // alert(data.success);
                      toastr.success(data.success, 'Success',{ closeButton: true });
                      setTimeout(function(){
                        window.location.reload();
                    }, 3000);
                  }else{
                      printErrorMsg(data.error);
                  }
              }
          });

        }); 



      // Delete 
      //$('#addressTable').on('click','.deleteCourier',function(){
          $(document).on('click','.deleteCourier',function(){
          var id = $(this).data('id');
          var _token = $("input[name='_token']").val();
          var deleteConfirm = confirm("Are you sure you want to delete this ?");
      
          if (deleteConfirm == true) {
                  // AJAX request
                  $.ajax({
                      url: "/user/delete-courier",
                      type: 'post',
      
                      data: {_token: _token,id: id},
                      success: function(data){
      
                          // Success Message
                          toastr.success(data.success, 'Success',{ closeButton: true });
                          // Reload DataTable
                          //addressTable.ajax.reload();
                          setTimeout(function(){
                              window.location.reload();
                          }, 3000);
          
                      }
                  });
          }

      });


        $(".checkbox").change(function() {

            if(this.checked) {
                $status = 1;
            }else{
                $status = 0;
            }

            var _token = $("input[name='_token']").val();
            var courier_id = $(this).attr('data-value');
            var status = $status;

              $.ajax({
                  //url: "{{ route('user.user.changeCourierPriority') }}",
                  url: $('.changeCourierPriorityForm').attr('action'),
                  type:'POST',
                  data:  {_token:_token, courier_id:courier_id, status:status},
                  success: function(data) {
                      if($.isEmptyObject(data.error)){
                        // alert(data.success);
                          toastr.success(data.success, 'Success',{ closeButton: true });
                          setTimeout(function(){
                            window.location.reload();
                        }, 3000);
                      }else{
                          printErrorMsg(data.error);
                      }
                  }
              });

        });


        $('.addWarehouseAddressForm').submit(function(e) {
          e.preventDefault();
          $('.error-text').text('');
          let formData = new FormData(this);

          $.ajax({
              url: $('.addWarehouseAddressForm').attr('action'),
              type:'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    // alert(data.success);
                      toastr.success(data.success, 'Success',{ closeButton: true });
                      setTimeout(function(){
                        window.location.reload();
                    }, 3000);
                  }else{
                      printErrorMsg(data.error);
                  }
              }
          });

        }); 


        $('.userProfileForm').submit(function(e) {
          e.preventDefault();
          $('.error-text').text('');
          let formData = new FormData(this);

          $.ajax({
              url: $('.userProfileForm').attr('action'),
              type:'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    // alert(data.success);
                      toastr.success(data.success, 'Success',{ closeButton: true });
                      setTimeout(function(){
                        window.location.reload();
                     }, 3000);
                  }else{
                      printErrorMsg(data.error);
                  }
              }
          });

        }); 
  
        $('.changePasswordForm').submit(function(e) {
          e.preventDefault();
          $('.error-text').text('');
          let formData = new FormData(this);

          $.ajax({
              url: $('.changePasswordForm').attr('action'),
              type:'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    // alert(data.success);
                      toastr.success(data.success, 'Success',{ closeButton: true });
                  }else{
                      printErrorMsg(data.error);
                  }
              }
          });
      
        }); 

        function printErrorMsg (msg) {
          $.each( msg, function( key, value ) {
          console.log(key);
          //console.log(value[0]);
            $('.'+key+'_err').text(value[0]);
          });
        }

        $( ".eye" ).click(function() {
          $(this).toggleClass('fa-eye-slash fa-eye');
          $(this).parent().prev("input").attr('type',$(this).parent().prev("input").attr('type')=='text'?'password':'text' );
        });
    
});


