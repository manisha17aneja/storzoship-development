$(document).ready(function() {


//************************************** Logistic Start ********************************************//

      // Store
    
      $('.addManagePriceForm').submit(function(e) {
        e.preventDefault();
        $('.error-text').text('');
        let formData = new FormData(this);
        //formData.append('description', CKEDITOR.instances.description.getData());
    
        $.ajax({
            url: 'manage/price/store',
            type:'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    //$('.addManagePriceForm')[0].reset();
                    //CKEDITOR.instances.description.setData('');
                    // Reload DataTable
                    //logisticTable.ajax.reload();
                     // Close Modal
                    // $('.addModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
    
      }); 


  // Table

  var logisticTable = $('.admin_logistics').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "logistics",
    columns: [
       // {data: 'id', name: 'id'},
        {data: 'logistic_name', name: 'logistic_name'},
        {data: 'api_name', name: 'api_name'},
        {data: 'cod_price', name: 'cod_price'},
        {data: 'cod_percentage', name: 'cod_percentage'},
        {data: 'image', name: 'image', orderable: false, searchable: false},
        {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });

  // Store

  $('.addLogisticForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);
    //formData.append('description', CKEDITOR.instances.description.getData());

    $.ajax({
        url: 'logistics/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.addLogisticForm')[0].reset();
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                logisticTable.ajax.reload();
                 // Close Modal
                 $('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

  }); 

  // update 
    $('.updateLogisticForm').submit(function(e) {
      e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "logistics/update",
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
                  $('.updateLogisticForm')[0].reset();
                  // Reload DataTable
                  logisticTable.ajax.reload();  
                  // Close Modal
                  $('.editModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }

            }
        });
  });

  
  // show
  $('#logisticTable').on('click','.updateLogistic',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#logistic_id').val(id);

    // AJAX request
    $.ajax({
        url: "logistics/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                    $('#edit_name').val(response.name);
                    $('#edit_api_name').val(response.api_name);
                    $('#edit_cod_price').val(response.cod_price);
                    $('#edit_cod_percentage').val(response.cod_percentage);
                    //$('#edit_is_active').val(response.is_active);
                  //CKEDITOR.instances.edit_description.setData(response.description);
                  
                  // Reload DataTable
                  logisticTable.ajax.reload();

            }else{
                  alert("Invalid ID.");
            }
        }
    });

  });


  // Delete 
  $('#logisticTable').on('click','.deleteLogistic',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
          // AJAX request
          $.ajax({
              url: "logistics/delete",
              type: 'post',

              data: {_token: _token,id: id},
              success: function(data){

                  // Success Message
                  toastr.success(data.success, 'Success',{ closeButton: true });
                  // Reload DataTable
                  logisticTable.ajax.reload();
  
              }
          });
    }

  });

//************************************** Logistic End ********************************************//


//************************************** Metrocity Start ********************************************//

    // Table

    var metrocityTable = $('.admin_metrocity').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "metrocity",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'is_active', name: 'is_active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    });

    // Store

    $('.addMetrocityForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);
    //formData.append('description', CKEDITOR.instances.description.getData());

    $.ajax({
        url: 'metrocity/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.addMetrocityForm')[0].reset();
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                metrocityTable.ajax.reload();
                    // Close Modal
                    $('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

    }); 

    // update 
    $('.updateMetrocityForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "metrocity/update",
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
                    $('.updateMetrocityForm')[0].reset();
                    // Reload DataTable
                    metrocityTable.ajax.reload();  
                    // Close Modal
                    $('.editModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }

            }
        });
    });

    
    // show
    $('#metrocityTable').on('click','.updateMetrocity',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#metrocity_id').val(id);

    // AJAX request
    $.ajax({
        url: "metrocity/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                    $('#edit_name').val(response.name);
                    //$('#edit_is_active').val(response.is_active);
                    //CKEDITOR.instances.edit_description.setData(response.description);
                    
                    // Reload DataTable
                    metrocityTable.ajax.reload();

            }else{
                    alert("Invalid ID.");
            }
        }
    });

    });


    // Delete 
    $('#metrocityTable').on('click','.deleteMetrocity',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
            // AJAX request
            $.ajax({
                url: "metrocity/delete",
                type: 'post',

                data: {_token: _token,id: id},
                success: function(data){

                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reload DataTable
                    metrocityTable.ajax.reload();
    
                }
            });
    }

    });

//************************************** Metrocity End ********************************************//



//************************************** Address Start ********************************************//

    // Table

    var addressTable = $('.admin_address').DataTable({

        bLengthChange: false,
        processing: true,
        serverSide: true,
        ajax: "address",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'contact_person_name', name: 'contact_person_name'},
            {data: 'contact_no', name: 'contact_no'},
            {data: 'contact_email', name: 'contact_email'},
            {data: 'website', name: 'website'},
            {data: 'address_line_1', name: 'address_line_1'},
            {data: 'address_line_2', name: 'address_line_2'},
            {data: 'pincode', name: 'pincode'},
            {data: 'state', name: 'state'},
            {data: 'city', name: 'city'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
    // Store

    $('.addAddressForm').submit(function(e) {
        e.preventDefault();
        $('.error-text').text('');
        let formData = new FormData(this);
        //formData.append('description', CKEDITOR.instances.description.getData());
    
        $.ajax({
            url: 'address/store',
            type:'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    $('.addAddressForm')[0].reset();
                    //CKEDITOR.instances.description.setData('');
                    // Reload DataTable
                    addressTable.ajax.reload();
                        // Close Modal
                        $('.addModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
            }
        });

    }); 
    
    // update 
    $('.updateAddressForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);  

        // AJAX request
        $.ajax({
            url: "address/update",
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
                    $('.updateAddressForm')[0].reset();
                    // Reload DataTable
                    //addressTable.ajax.reload();  
                    // Close Modal
                    $('.editModal').modal('toggle');

                    setTimeout(function(){
                        window.location.reload();
                    }, 3000);

            }else{
                printErrorMsg(data.error);
            }

            }
        });
    });
    
        
    // show
    //$('#addressTable').on('click','.updateAddress',function(){
        $(document).on('click','.updateAddress',function(){
        $('.error-text').text('');
        var id = $(this).data('id');
        var _token = $("input[name='_token']").val();
    
        $('#address_id').val(id);
    
        // AJAX request
        $.ajax({
            url: "address/show",
            type: 'post',
            data: {_token: _token,id: id},
            dataType: 'json',
            success: function(response){
    
                if(response.success == 1){

                        $('#edit_name').val(response.name);
                        $('#edit_contact_person_name').val(response.contact_person_name);
                        $('#edit_contact_no').val(response.contact_no);
                        $('#edit_contact_email').val(response.contact_email);
                        $('#edit_website').val(response.website);
                        $('#edit_address_line_1').val(response.address_line_1);
                        $('#edit_address_line_2').val(response.address_line_2);
                        $('#edit_pincode').val(response.pincode);
                        $('#edit_state').val(response.state);
                        $('#edit_city').val(response.city);
        
                        //$('#edit_is_active').val(response.is_active);
                        //CKEDITOR.instances.edit_description.setData(response.description);
                        
                        // Reload DataTable
                        //addressTable.ajax.reload();
                        
    
                }else{
                        alert("Invalid ID.");
                }
            }
        });

    });
    
    
    // Delete 
    //$('#addressTable').on('click','.deleteAddress',function(){
        $(document).on('click','.deleteAddress',function(){
        var id = $(this).data('id');
        var _token = $("input[name='_token']").val();
        var deleteConfirm = confirm("Are you sure you want to delete this ?");
    
        if (deleteConfirm == true) {
                // AJAX request
                $.ajax({
                    url: "address/delete",
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
    
//************************************** Address End ********************************************//

//************************************** Shipping Start ********************************************//

  // Table

  var shippingTable = $('.admin_shippings').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "shippings",
    columns: [
        {data: 'logistic_name', name: 'logistic_name'},
        {data: 'rule_name', name: 'rule_name'},
        {data: 'rule_index', name: 'rule_index'},
        {data: 'shipment_type', orderable: false, searchable: false,        
    
            render: function(data, type, row) {

                if(data == 1) {
                return 'Forward';
                } else { 
                return 'Reverse';
                }

            }
        },
        {data: 'within_zone', name: 'within_zone'},
        {data: 'within_city', name: 'within_city'},
        {data: 'within_state', name: 'within_state'},
        {data: 'metro', name: 'metro'},
        {data: 'metro_2', name: 'metro_2'},
        {data: 'rest_of_india', name: 'rest_of_india'},
        {data: 'rest_of_india_2', name: 'rest_of_india_2'},
        {data: 'special_zone', name: 'special_zone'},
        {data: 'is_cod_charge_return', orderable: false, searchable: false,        
    
            render: function(data, type, row) {

                if(data == 1) {
                return 'No';
                } else { 
                return 'Yes';
                }

            }
        },
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });


    // Store

    $('.addShippingForm').submit(function(e) {
        e.preventDefault();
        $('.error-text').text('');
        let formData = new FormData(this);
        //formData.append('description', CKEDITOR.instances.description.getData());
    
        $.ajax({
            url: 'shippings/store',
            type:'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    $('.addShippingForm')[0].reset();
                    //CKEDITOR.instances.description.setData('');
                    // Reload DataTable
                    shippingTable.ajax.reload();
                     // Close Modal
                     $('.addModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
    
      }); 
    
    // update 
        $('.updateShippingForm').submit(function(e) {
        e.preventDefault();
    
            var formData = new FormData(this);  
    
            // AJAX request
            $.ajax({
                url: "shippings/update",
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
                    $('.updateShippingForm')[0].reset();
                    // Reload DataTable
                    shippingTable.ajax.reload();  
                    // Close Modal
                    $('.editModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
    
                }
            });
    });
    
      
    // show
    $('#shippingTable').on('click','.updateShipping',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#shipping_id').val(id);

    // AJAX request
    $.ajax({
        url: "shippings/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                    $('#edit_logistic_id').val(response.logistic_id);
                    $('#edit_shipment_type').val(response.shipment_type);
                    $('#edit_rule').val(response.rule);
                    $('#edit_rule_index').val(response.rule_index);
                    $('#edit_within_city').val(response.within_city);
                    $('#edit_within_state').val(response.within_state);
                    $('#edit_within_zone').val(response.within_zone);
                    $('#edit_metro').val(response.metro);
                    $('#edit_metro_2').val(response.metro_2);
                    $('#edit_rest_of_india').val(response.rest_of_india);
                    $('#edit_rest_of_india_2').val(response.rest_of_india_2);
                    $('#edit_special_zone').val(response.special_zone);
                    $('#edit_is_cod_charge_return').val(response.is_cod_charge_return);
    
                    //$('#edit_is_active').val(response.is_active);
                    //CKEDITOR.instances.edit_description.setData(response.description);
                    
                    // Reload DataTable
                    shippingTable.ajax.reload();

            }else{
                    alert("Invalid ID.");
            }
        }
    });

    });
    
    
    // Delete 
    $('#shippingTable').on('click','.deleteShipping',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
            // AJAX request
            $.ajax({
                url: "shippings/delete",
                type: 'post',

                data: {_token: _token,id: id},
                success: function(data){

                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reload DataTable
                    shippingTable.ajax.reload();
    
                }
            });
    }

    });
    
//************************************** Shipping End ********************************************//


//************************************** LogisticPriority Start ********************************************//

  // Table

  var logisticPriorityTable = $('.admin_logisticPriority').DataTable({

    bLengthChange: false,
    processing: true,
    serverSide: true,
    ajax: "priority",
    columns: [
        {data: 'logistic_name', name: 'logistic_name'},
        {data: 'priority', name: 'rule_name'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });


    // Store

    $('.addLogisticPriorityForm').submit(function(e) {
        e.preventDefault();
        $('.error-text').text('');
        let formData = new FormData(this);
        //formData.append('description', CKEDITOR.instances.description.getData());
    
        $.ajax({
            url: 'priority/store',
            type:'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    $('.addLogisticPriorityForm')[0].reset();
                    //CKEDITOR.instances.description.setData('');
                    // Reload DataTable
                    logisticPriorityTable.ajax.reload();
                     // Close Modal
                     $('.addModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
    
      }); 
    
    // update 
        $('.updateLogisticPriorityForm').submit(function(e) {
        e.preventDefault();
    
            var formData = new FormData(this);  
    
            // AJAX request
            $.ajax({
                url: "priority/update",
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
                    $('.updateLogisticPriorityForm')[0].reset();
                    // Reload DataTable
                    logisticPriorityTable.ajax.reload();  
                    // Close Modal
                    $('.editModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
    
                }
            });
    });
    
      
    // show
    $('#logisticPriorityTable').on('click','.updateLogisticPriority',function(){
    $('.error-text').text('');
    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();

    $('#logisticPriority_id').val(id);

    // AJAX request
    $.ajax({
        url: "priority/show",
        type: 'post',
        data: {_token: _token,id: id},
        dataType: 'json',
        success: function(response){

            if(response.success == 1){

                    $('#edit_logistic_id').val(response.logistic_id);
                    $('#edit_priority').val(response.priority);

                    //$('#edit_is_active').val(response.is_active);
                    //CKEDITOR.instances.edit_description.setData(response.description);
                    
                    // Reload DataTable
                    logisticPriorityTable.ajax.reload();

            }else{
                    alert("Invalid ID.");
            }
        }
    });

    });
    
    
    // Delete 
    $('#logisticPriorityTable').on('click','.deleteLogisticPriority',function(){

    var id = $(this).data('id');
    var _token = $("input[name='_token']").val();
    var deleteConfirm = confirm("Are you sure you want to delete this ?");

    if (deleteConfirm == true) {
            // AJAX request
            $.ajax({
                url: "priority/delete",
                type: 'post',

                data: {_token: _token,id: id},
                success: function(data){

                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reload DataTable
                    logisticPriorityTable.ajax.reload();
    
                }
            });
    }

    });
    
//************************************** LogisticPriority End ********************************************//



function printErrorMsg (msg) {
    $.each( msg, function( key, value ) {
    console.log(key);
      $('.'+key+'_err').text(value);
    });
}

});