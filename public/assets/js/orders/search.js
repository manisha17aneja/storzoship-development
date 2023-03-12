   
$(document).ready(function(){

    searchOrderDatatable();

    function searchOrderDatatable(search_no = '')
    {
        var dataTable = $('#searchOrder').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "/search-order",//"{{ route('search.order') }}",
                data:{search_no:search_no}
            },
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
            {data: 'ofd_count', name: 'ofd_count'},
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
        dom: 'lrtip',
        //dom: "Blfrtip",
        //"dom": 'tc<"singleButton"B><"clear"><"bottom-flex-col"lip><"clear">',
        //"order": [[ 1, "asc" ]],


        });
    }

    $('#seach_order').click(function(){
        var search_no = $('#search_no').val();
        
        if(search_no != '')
        {
            $('#searchOrder').DataTable().destroy();
            searchOrderDatatable(search_no);
        }
        else
        {
          //  alert('Select Both seach_order option');
        }
    });

    $('#reset_order').click(function(){
        $('#search_no').val('');
        $('#searchOrder').DataTable().destroy();
        searchOrderDatatable();
    });

});