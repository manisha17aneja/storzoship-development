$(document).ready(function() {

 //************************************** Credit Start ********************************************//
    
    
    var customerAllowCreditTable = $('#customer_allow_credit').DataTable({
        ajax: "customer-allow-credit",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'allow_credit_limit', name: 'allow_credit_limit'},
        ],
       
        bLengthChange: false,
        processing: true,
        serverSide: true,
        "order": [],
    });



    $(document).on('change', '.allow_credit', function() {
        
        if(this.checked) {
            $('#allow_credit_limit').val('');
            $(".div_allow_credit_limit").show();
        }else{
            $(".div_allow_credit_limit").hide();
        }

    });


    // show
    $(document).on('change', '.allow_customer_id', function() {
        $('.error-text').text('');

        var id = $(this).val();
        var _token = $("input[name='_token']").val();

        // AJAX request
       $.ajax({
            url: "finance/show",
            type: 'post',
            data: {_token: _token,id: id},
            dataType: 'json',
            success: function(response){
    
                if(response.success == 1){
    
                        if(response.allow_credit == 1){
                            $('#allow_credit').prop('checked', true);
                            $('#allow_credit_limit').val(response.allow_credit_limit);
                            $(".div_allow_credit_limit").show();
                        } else {
                            $('#allow_credit').prop('checked', false);
                            $(".div_allow_credit_limit").hide();
                        }
                        
                        // Reload DataTable
                        customerAllowCreditTable.ajax.reload();
    
                }else{
                        //alert("Invalid ID.");
                        $(".div_allow_credit_limit").hide();
                        $('.updateCustomerAllowCreditForm')[0].reset();
                        $('#allow_credit').prop('checked', false);
                }
            }
        });
    
        });



    // update 
    $('.updateCustomerAllowCreditForm').submit(function(e) {
        e.preventDefault();

            var _token = $("input[name='_token']").val();
            var customer_id = $("#customer_id").val();
            var allow_credit_limit = $("#allow_credit_limit").val();

            if ($('#allow_credit').is(":checked"))
            {
                var allow_credit = 1;
            }else{
                var allow_credit = 0;
            }

            // AJAX request
            $.ajax({
                url: "finance/update",
                type: 'post',
                data: {_token:_token, customer_id:customer_id, allow_credit:allow_credit, allow_credit_limit:allow_credit_limit},
                success: function(data){
    
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    $('.updateCustomerAllowCreditForm')[0].reset();
                    $('#allow_credit').prop('checked', false);
                    // Reload DataTable
                    customerAllowCreditTable.ajax.reload();  
                    // Close Modal
                    $('.editModal').modal('toggle');
    
                }else{
                    printErrorMsg(data.error);
                }
    
                }
            });
    });



    customerUsedCreditDatatable();

    function customerUsedCreditDatatable(user_id = '', from_date = '', to_date = '')
    {
        var dataTable = $('#customerUsedCredit').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "customer-used-credit",//"{{ route('search.order') }}",
                data:{user_id:user_id, from_date:from_date, to_date:to_date}
            },
            columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'debit', name: 'debit'},
            {data: 'allow_credit_limit', name: 'allow_credit_limit'},
           
        ],
        "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
        bLengthChange: false,
        processing: true,
        serverSide: true,
        //searching: false,
        //dom: "t",
        dom: 'lrtip',
        //dom: "Blfrtip",
        //"dom": 'tc<"singleButton"B><"clear"><"bottom-flex-col"lip><"clear">',
        //"order": [[ 1, "asc" ]],


        });
    }

    $('#seach_used_credit').click(function(){
        var user_id = $('#user_id').val();
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        
        if(user_id != '' && from_date != '' && to_date != '')
        {
            $('#customerUsedCredit').DataTable().destroy();
            customerUsedCreditDatatable(user_id, from_date, to_date);
        }
        else
        {
          //  alert('Select Both seach_used_credit option');
        }
    });

    $('#reset_used_credit').click(function(){
        $('#user_id').val('');
        $('#from_date').val('');
        $('#to_date').val('');
        $('#customerUsedCredit').DataTable().destroy();
        customerUsedCreditDatatable();
    });

    // Store

    $('.addFinanceForm').submit(function(e) {
        e.preventDefault();
        $('.error-text').text('');
        let formData = new FormData(this);
        //formData.append('description', CKEDITOR.instances.description.getData());
    
        $.ajax({
            url: 'finance/store',
            type:'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if($.isEmptyObject(data.error)){
    
                    // Success Message
                    toastr.success(data.success, 'Success',{ closeButton: true });
                    // Reset Form
                    $('.addFinanceForm')[0].reset();
                    //CKEDITOR.instances.description.setData('');
                    // Reload DataTable
                    //customerAllowCreditTable.ajax.reload();
                        // Close Modal
                    //$('.addModal').modal('toggle');
    
                }else{
                    toastr.error(data.error, 'Error',{ closeButton: true });
                    printErrorMsg(data.error);
                }
            }
        });

    }); 


    
 //************************************** Credit End ********************************************//
 
 
    function printErrorMsg (msg) {
        $.each( msg, function( key, value ) {
        console.log(key);
          $('.'+key+'_err').text(value);
        });
    }

});