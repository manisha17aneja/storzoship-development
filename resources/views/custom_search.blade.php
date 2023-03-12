
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Custom Search in Datatables using Ajax</h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">


                    <input type="text" name="search_no" id="search_no" class="form-control" required>
                           


                    </div>
                
                    
                    <div class="form-group" align="center">
                        <button type="button" name="seach_order" id="seach_order" class="btn btn-info">Search</button>

                        <button type="button" name="reset" id="reset_order" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="searchOrder1" class="table table-bordered table-striped">
                    <thead>
                        <tr>		
                                    <th style="text-align: center">Order ID</th>
                                    <th style="text-align: center">Order Number</th>
                                    <th style="text-align: center">Airwaybill Number</th>
                                    <th style="text-align: center">Logistic Name</th>
                                    <th style="text-align: center">Customer Name</th>
                                    <th style="text-align: center">Customer Number</th>
                                    <th style="text-align: center">Order Type</th>
                                    <th style="text-align: center">Created Date</th>
                                    <th style="text-align: center">Last Status Date</th>
                                    <th style="text-align: center">Order Status</th>
                                    <th style="text-align: center">Intransit Days count</th>
                                    <th style="text-align: center">OFD count</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>

$(document).ready(function(){

    searchOrderDatatable();

    function searchOrderDatatable(search_no = '')
    {
        var dataTable = $('#searchOrder').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('search.order') }}",
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
</script>
