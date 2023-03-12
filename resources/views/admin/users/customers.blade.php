@extends('layouts.main')

@section('title')
Customers 
@endsection

@section('class')
warehouse-page complaints-page courier-priority user-page single-order-page activities-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<div class="main-panel">
          <div class="content-wrapper">

          <h1>Customers</h1>
            
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Customers</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="userTable" class="table table-bordered admin_customers">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <!--<th>Password</th>-->
                                <th>Phone</th>
                                <th>Used Credit Amount</th>
                                <th>Allow Credit Amount</th>
                                <th>Created By</th>
                                
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

              </div>
              

            </div>

     

          </div>
          <!-- main-panel ends -->
        </div>


<!-- main-body-panel end -->
@endsection

