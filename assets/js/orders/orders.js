$(document).ready(function() {


//************************************** Order Start ********************************************//


// buyerDetailForm

$('.buyerDetailForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'buyer/details/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){
                console.log(data);
                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
              //  $('.buyerDetailForm')[0].reset();

               // array = [];
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                //ruleTable.ajax.reload();
                    // Close Modal
                    //$('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

}); 


// pickupDetailForm

$('.pickupDetailForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'pickup/details/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){
                console.log(data);
                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
              //  $('.pickupDetailForm')[0].reset();

               // array = [];
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                //ruleTable.ajax.reload();
                    // Close Modal
                    //$('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

}); 


// orderDetailForm

$('.orderDetailForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'order/details/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){
                console.log(data);
                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
              //  $('.orderDetailForm')[0].reset();

               // array = [];
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                //ruleTable.ajax.reload();
                    // Close Modal
                    //$('.addModal').modal('toggle');

            }else{
                printErrorMsg(data.error);
            }
        }
    });

}); 


// packageDetailForm

$('.packageDetailForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'package/details/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){
                console.log(data);
                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
              //  $('.packageDetailForm')[0].reset();

               // array = [];
                //CKEDITOR.instances.description.setData('');
                // Reload DataTable
                //ruleTable.ajax.reload();
                    // Close Modal
                    //$('.addModal').modal('toggle');

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
        if(key == 'label_id[]'){
            $('.label_id_err').text(value[0]);
        }else{
            $('.'+key+'_err').text(value[0]);
        }
    });
}



//************************************** Order End ********************************************//
    

    
});