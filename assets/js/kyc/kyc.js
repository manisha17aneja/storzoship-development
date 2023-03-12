$(document).ready(function() {



    $("#profile_type").change(function() {
        var selected = $(this).val();
        console.log(selected);

        if(selected == 1) {
            $('#companyDetail').css("display", "block");
        } else {
            $('#companyDetail').css("display", "none");
        }
       
    });


//************************************** KYC Start ********************************************//


// Store

$('.kycVerificationForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'kyc/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.kycVerificationForm')[0].reset();
                $(".dropify-clear").click(); 
               // window.location.href = "/home";
                window.location.href = APP_URL+"/home";
                //array = [];
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

// Update

$('.updateKycVerificationForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: 'kyc/update',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.updateKycVerificationForm')[0].reset();
                //$(".dropify-clear").click(); 
                //window.location.href = "/home";
                //array = [];
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
            $('.'+key+'_err').text(value[0]);
        
    });
}



//************************************** KYC End ********************************************//
    

    
});