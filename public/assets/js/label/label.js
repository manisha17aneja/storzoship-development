$(document).ready(function() {


    var array = [];

    $(".label").change(function() {
        var selected = $(this).val();

        if(this.checked) {
            array.push(selected);
        } else {
            array.splice($.inArray(selected, array), 1);
        }

        //console.log(array);
        $('.label_id').val(array);
       
    });

//************************************** Lable Start ********************************************//


// Store

$('.assignLabelForm').submit(function(e) {
    e.preventDefault();
    $('.error-text').text('');
    let formData = new FormData(this);

    $.ajax({
        url: '/admin/label/store',
        type:'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if($.isEmptyObject(data.error)){

                // Success Message
                toastr.success(data.success, 'Success',{ closeButton: true });
                // Reset Form
                $('.assignLabelForm')[0].reset();

                array = [];
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



//************************************** Lable End ********************************************//
    

    
});