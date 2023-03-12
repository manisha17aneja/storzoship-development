$(document).ready(function() {

//************************************** COD Start ********************************************//


function viewDetail(id = '')
{

    $('.viewDetailModal').modal('toggle');

    var cod_remittance_order_detail_table = $('#cod_remittance_order_detail_table').DataTable({
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

$(document).on('click','.viewDetail',function(){

    var id = $(this).data('id');
    $('#cod_remittance_order_detail_table').DataTable().destroy();
    viewDetail(id, id);
    
});


var codRemittanceTable = $('#cod_remittance').DataTable({
    ajax: "cod-remittance",
    columns: [
        {data: 'created_at', name: 'created_at'},
        {data: 'cod_remittance_amount', name: 'cod_remittance_amount'},
        {data: 'cod_remittance_note', name: 'cod_remittance_note'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        {data: 'name', name: 'name'},

    ],
    "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
    bLengthChange: false,
    processing: true,
    serverSide: true,
    "order": [],
});


var codWalletTransactionsTable = $('#cod_wallet_transactions').DataTable({
    ajax: "cod-wallet-transactions",
    columns: [
        {data: 'updated_at', name: 'updated_at'},
        {data: 'id', name: 'id'},
        {data: 'debit', name: 'debit'},
        {data: 'credit', name: 'credit'},
        {data: 'wallet_balance', name: 'wallet_balance'},
        {data: 'remarks', name: 'remarks'},

    ],
    "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
    bLengthChange: false,
    processing: true,
    serverSide: true,
    "order": [],
});

var allCodRemittanceListTable = $('#allCodRemittanceList').DataTable({
    ajax: "all-cod-remittance-list",
    columns: [
        {data: 'created_at', name: 'created_at'},
        {data: 'cod_remittance_amount', name: 'cod_remittance_amount'},
        {data: 'cod_remittance_note', name: 'cod_remittance_note'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        {data: 'name', name: 'name'},
    ],
    "language": {
            "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
            "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        },
    bLengthChange: false,
    processing: true,
    serverSide: true,
    "order": [],
});


var nextCodRemittanceAllDataTable = $('#nextCodRemittanceAllData').DataTable({
    ajax: "next-cod-remittance-all-data",
    columns: [
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'order_count', name: 'order_count'},
        {data: 'cod_remittance_amount', name: 'cod_remittance_amount'},
    ],
    "language": {
        "emptyTable": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
        "zeroRecords": '<div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found"> <div class="mb-20px"> <img width="210" src="'+APP_URL+'/assets/images/3.svg" alt="No Orders Found" /> </div> <div class="mb-27px display-4 heading">No Record Found</div> <div class="cta-section"></div> </div>',
    },
    bLengthChange: false,
    processing: true,
    serverSide: true,
    //"order": [],
});


codRemittanceListDatatable();

function codRemittanceListDatatable(user_id = '', from_date = '', to_date = '')
{
    var codRemittanceList = $('#codRemittanceList').DataTable({
        ajax:{
            url: "cod-remittance-lists",
            data:{user_id:user_id, from_date:from_date, to_date:to_date}
        },
        columns: [
            {data: 'order_no', name: 'order_no'},
            {data: 'awb_number', name: 'awb_number'},
            {data: 'cod_amount', name: 'cod_amount'},
            {data: 'delivery_date', name: 'delivery_date'},
            {data: 'created_at', name: 'created_at'},
            {data: 'name', name: 'name'},
        
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

$('#seach_cod_remittance_list').click(function(){
    var user_id = $('#user_id').val();
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    
    if(user_id != '' && from_date != '' && to_date != '')
    {
        $('#codRemittanceList').DataTable().destroy();
        codRemittanceListDatatable(user_id, from_date, to_date);
    }
    else
    {
      //  alert('Select Both seach_cod_remittance_list option');
    }
});

$('#reset_cod_remittance_list').click(function(){
    $('#user_id').val('');
    $('#from_date').val('');
    $('#to_date').val('');
    $('#codRemittanceList').DataTable().destroy();
    codRemittanceListDatatable();
});


nextCodRemittanceListDatatable();

function nextCodRemittanceListDatatable(from_date = '', to_date = '')
{
    console.log(from_date);
    var nextCodRemittanceList = $('#nextCodRemittanceList').DataTable({
        ajax:{
            url: "next-cod-remittance-list",
            data:{from_date:from_date, to_date:to_date}
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'order_count', name: 'order_count'},
            {data: 'cod_remittance_amount', name: 'cod_remittance_amount'},
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

$('#seach_next_cod_remittance_list').click(function(){

    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();

    
    if(from_date != '' && to_date != '')
    {
        $('#nextCodRemittanceList').DataTable().destroy();
        nextCodRemittanceListDatatable(from_date, to_date);
    }
    else
    {
      //  alert('Select Both seach_next_cod_remittance_list option');
    }
});

$('#reset_next_cod_remittance_list').click(function(){
    $('#from_date').val('');
    $('#to_date').val('');
    $('#nextCodRemittanceList').DataTable().destroy();
    nextCodRemittanceListDatatable();
});



//************************************** COD End ********************************************//





});