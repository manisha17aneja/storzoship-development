$(document).ready(function() {


    //************************************** Orders Start ********************************************//
    
    // created
    
    var createdTable = $('#admin_created').DataTable({
        ajax: "/user/orders/created-order-list",
        columns: [
            {data: 'order_no', name: 'order_no'},
            {data: 'id', name: 'id'},
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
                    class:'created-csv'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'excel',
                extend: 'excelHtml5',
                attr: {
                    class:'created-excel'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'pdf',
                extend: 'pdfHtml5',
                attr: {
                    class:'created-pdf'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },
            {
                text: 'print',
                extend: 'print',
                attr: {
                    class:'created-print'
                },
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
                }
            },  
        ],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $( ".created_exports" ).click(function() {
               console.log('export');
                var btnClass = $(this).attr("id") ? '.' + $(this).attr("id") : null;
                console.log(btnClass);
                if (btnClass) $buttons.find(btnClass).click(); 
            })
        },
        
    });

    $('#myInputTextField').keyup(function(){
        //console.log($(this).val());
        createdTable.search($(this).val()).draw() ;
        intransitTable.search($(this).val()).draw() ;
    })


        // intransit
    
        var intransitTable = $('.admin_intransit').DataTable({
            ajax: "/user/orders/intransit-order-list",
            columns: [
               // {data: 'id', name: 'id'},
                {data: 'order_no', name: 'order_no'},
                {data: 'id', name: 'id'},
                {data: 'awb_number', name: 'awb_number'},
                {data: 'logistic_name', name: 'logistic_name'},
                {data: 'customer_name', name: 'customer_name'},
                {data: 'customer_number', name: 'customer_number'},
                //{data: 'order_type', name: 'order_type'},
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
                {data: 'status_name', name: 'status_name'},
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


      //************************************** Orders End ********************************************//



function printErrorMsg (msg) {
    $.each( msg, function( key, value ) {
    console.log(key);
      $('.'+key+'_err').text(value);
    });
}

});