$(document).ready(function() {

    //************************************** intransit Start ********************************************//


function orderDetail(id = '')
{

    $('.orderDetailModal').modal('toggle');

    var order_detail_table = $('#order_detail_table').DataTable({
        ajax:{
            url: "cod_remittance_order_detail_table",
            data:{id:id}
        },
        columns: [
            {data: 'awb_number', name: 'awb_number'},
            {data: 'cod_amount', name: 'cod_amount'},
            {data: 'delivery_date', name: 'delivery_date'},
            {data: 'is_cod_remittance_close_datetime', name: 'is_cod_remittance_close_datetime'},
            
        ],
        "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
        bLengthChange: false,
        processing: true,
        serverSide: true,

    });

}

$(document).on('click','.orderDetail',function(){
    
    var id = $(this).data('id');
    $('#order_detail_table').DataTable().destroy();
    orderDetail(id, id);
    
});


function orderTracking(id = '')
{

    //$('.orderTrackingModal').modal('toggle');
    $('.orderDetailModal').modal('toggle');

    var order_tracking_table = $('#order_tracking_table').DataTable({
        ajax:{
            url: "orders/order_tracking_table",
            data:{id:id}
        },
        columns: [
            {data: 'scan_date_time', name: 'scan_date_time'},
            {data: 'scan', name: 'scan'},
            {data: 'location', name: 'location'},
            {data: 'remark', name: 'remark'},
            
        ],
        "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
        bLengthChange: false,
        processing: true,
        serverSide: true,

    });

}

$(document).on('click','.orderTracking',function(){
    
    var id = $(this).data('id');
    $('#order_tracking_table').DataTable().destroy();
    orderTracking(id, id);
    
});
    
    // intransit
    
    var intransitTable = $('#admin_intransit').DataTable({
        ajax: "orders/intransit-order-list",
        columns: [
            {data: 'order_no', name: 'order_no'},
            {data: 'customer_order_no', name: 'customer_order_no'},
            {data: 'awb_number', name: 'awb_number'},
            {data: 'logistic_name', name: 'logistic_name'},
            {data: 'customer_name', name: 'customer_name'},
            {data: 'customer_number', name: 'customer_number'},
            {data: 'order_type',        
    
                render: function(data, type, row) {

                    if(data == 1) {
                    return 'COD';
                    } else { 
                    return 'Prepaid';
                    }

                }
            },
            {data: 'created_at',        
    
                render: function(data, type, row) {
                    return data;
                }
            },
            {data: 'updated_at', name: 'updated_at'},
            {data: 'status_name', name: 'status_name'},
            {data: 'intransit_days_count', name: 'intransit_days_count'},
            {data: 'user', name: 'user'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Orders Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Orders Found</div> <div class="cta-section"></div> </div>',
        },
        bLengthChange: false,
        processing: true,
        serverSide: true,
        //searching: false,
        //dom: "t",
        //dom: 'lrtip',
        //dom: "Blfrtip",
        "dom": 'tc<"singleButton"B><"clear"><"bottom-flex-col"lip><"clear">',
        //"order": [[ 1, "asc" ]],
      
        buttons: [
            {
                text: 'csv',
                extend: 'csvHtml5',
                attr: {
                    class:'intransit-csv'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'excel',
                extend: 'excelHtml5',
                attr: {
                    class:'intransit-excel'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'pdf',
                extend: 'pdfHtml5',
                attr: {
                    class:'intransit-pdf'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'print',
                extend: 'print',
                attr: {
                    class:'intransit-print'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },  
        ],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $( ".intransit_exports" ).click(function() {
               console.log('export');
                var btnClass = $(this).attr("id") ? '.' + $(this).attr("id") : null;
                console.log(btnClass);
                if (btnClass) $buttons.find(btnClass).click(); 
            })
        },
        
    });

//************************************** intransit End ********************************************//


});