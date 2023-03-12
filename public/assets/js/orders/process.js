$(document).ready(function() {

    //************************************** process Start ********************************************//
    
    // process
    
    var processTable = $('#admin_process').DataTable({
        ajax: "user/orders/process-order-list",
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
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'latest_scan', name: 'latest_scan'},
            {data: 'user', name: 'user'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Orders Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Orders Found</div> <div class="cta-section"></div> </div>',
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
                    class:'process-csv'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'excel',
                extend: 'excelHtml5',
                attr: {
                    class:'process-excel'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'pdf',
                extend: 'pdfHtml5',
                attr: {
                    class:'process-pdf'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'print',
                extend: 'print',
                attr: {
                    class:'process-print'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },  
        ],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $( ".process_exports" ).click(function() {
               console.log('export');
                var btnClass = $(this).attr("id") ? '.' + $(this).attr("id") : null;
                console.log(btnClass);
                if (btnClass) $buttons.find(btnClass).click(); 
            })
        },
        
    });

//************************************** process End ********************************************//


});