@extends('layouts.main')

@section('title')
Assign Label
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page user-page single-order-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->
        
<div class="main-panel">
          <div class="content-wrapper">
            

          <div class="align-items-center row mb-3 channel-container">
            <div class="col-12 col-md-5 mb-3 mb-sm-0 ps-3">
              <h1 class="fs-20px m-0 SFProBold mb-1 text-lightblack">Assign Label</h1>
              <p class="fs-12px SFProRegular text-darkgrey m-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
          </div>
          
          <!-- table row -->
          <div class="custom-data-table">
            <div class="bg-white border-radius8px p-3 primary-box-shadow table-responsive">
            <form class="assignLabelForm" action="{{ route('label.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
            <!-- Panel Form Elements -->
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-4">
                            <div class="form-group form-material">
                                <h4 class="example-">Customers</h4>
                                <select id="user_id" name="user_id" class="form-select">
                                    <option value="">Select Customer</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}"> {{$user->name.' - '.$user->email}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text user_id_err"></span>
                               
                            </div>
                        </div>
                        <div class="col-md-12 row" style="display:inline-flex; margin:12px;">

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="1" name="label">
                                <strong>Non logo Label 1</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_1.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="2" name=label">
                                <strong>Non logo Label 2</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_2.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="3" name="label">
                                <strong>Non logo Label 3</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_3.pdf') }}" height="200" width="300"></iframe>
                            </div>
            
                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="5" name="label">
                                <strong>Non logo Label 4</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_5.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="6" name="label">
                                <strong>Label 5</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_6.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="7" name="label">
0                                <strong>Label 6</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_7.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="8" name="label">
                                <strong>Label 7</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_8.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="0" name="label">
                                <strong>Label 8</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_0.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="11" name="label">
                                <strong>Label 11</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_11.pdf') }}" height="200" width="300"></iframe>
                            </div>

                            <div class="col-md-3" style="padding: 10px"><input class="label" type="checkbox" value="12" name="label">
                                <strong>Label 12</strong>
                                <iframe src="{{ url('/sample_label_pdf/sample_12.pdf') }}" height="200" width="300"></iframe>
                            </div>
                            
                            
                        </div>
                        <input class="label_id" type="hidden" name="label_id">
                        <span class="text-danger error-text label_id_err"></span>

                        <div class="col-md-12">
                            <div class="form-group mb0 text-end">
                                <button type="submit" class="assignLabelSubmit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panel end -->
            <div class="panel" id="awb_panel" style="display:none;">
                <div class="panel-body container-fluid">
                    <div class="awb_table">
                    </div>
                </div>
            </div>
        </form>
            </div>
            
          </div>
           
            
            
          </div>
        </div>
        

<!-- main-body-panel end -->
@endsection