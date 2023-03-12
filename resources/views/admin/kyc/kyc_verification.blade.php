@extends('layouts.main')

@section('title')
Kyc Verification
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
<style type="text/css">
   .dz-preview .dz-image img{
       width: 100% !important;
       height: 100% !important;
       object-fit: cover;
    }
    </style>
    
    
<div class="main-panel">
          <div class="content-wrapper">
            

          <div class="align-items-center row mb-3 channel-container">
            <div class="col-12 col-md-5 mb-3 mb-sm-0 ps-3">
              <h1 class="fs-20px m-0 SFProBold mb-1 text-lightblack">Kyc Verification</h1>
              <p class="fs-12px SFProRegular text-darkgrey m-0">
                Upload your personal or company documents for Verification
              </p>
            </div>
          </div>
          
          <!-- table row -->
          <form class="kycVerificationForm" action="{{ route('kyc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="custom-data-table">
            <div class="bg-white border-radius8px p-3 primary-box-shadow table-responsive">
                
                    <!-- Panel start -->
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">

                                <h3>Complete Your KYC</h3><br><br>

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Select Profile Type</h4>
                                        <select id="profile_type" name="profile_type" class="form-select">
                                            <option value="">Select Profile Type</option>
                                            <option value="0">Individual</option>
                                            <option value="1">Company</option>
                                           
                                        </select>
                                        <span class="text-danger error-text profile_type_err"></span>
                                    </div>
                                </div>

                               


                                <!--<div class="col-md-12">
                                    <div class="form-group mb0 text-end">
                                        <button type="submit" class="assignLabelSubmit">Submit</button>
                                    </div>
                                </div>-->
                            </div>

                            <div id="companyDetail" style="display:none">
                                <div class="row row-lg">

                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <h4 class="example-">Company Type</h4>
                                            <select id="company_type" name="company_type" class="form-select">
                                                <option value="">Select Company Type</option>
                                                <option value="0">Sole
                                                    Proprietorship</option>
                                                <option value="1">
                                                    Partnership</option>
                                                <option value="2">
                                                    Limited Liability Partnership</option>
                                                <option value="3">
                                                    Public Limited Company</option>
                                                <option value="4">
                                                    Private Limited Company</option>
                                            </select>
                                            <span class="text-danger error-text company_type_err"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <h4 class="example-">Company Name</h4>
                                            <input  type="text" id="company_name" name="company_name" class="form-control">
                                            <span class="text-danger error-text company_name_err"></span>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>


                            <div class="row row-lg">

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Pan Number</h4>
                                        <input  type="text" id="pan_no" name="pan_no" class="form-control">
                                        <span class="text-danger error-text pan_no_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Gst Number</h4>
                                        <input  type="text" id="gst_no" name="gst_no" class="form-control">
                                        <span class="text-danger error-text gst_no_err"></span>
                                    </div>
                                </div>

                               

                            </div>

                        </div>
                    </div>
                    <!-- Panel end -->

                
            </div>
          </div>

          <br>

          <div class="custom-data-table">
            <div class="bg-white border-radius8px p-3 primary-box-shadow table-responsive">
                
                    <!-- Panel start -->
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">

                                <h3>Billing Address Info</h3><br><br>

                                <div class="col-md-4">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Pincode</h4>
                                        <input  type="text" id="pincode" name="pincode" class="form-control">
                                        <span class="text-danger error-text pincode_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-material">
                                        <h4 class="example-">City</h4>
                                        <input  type="text" id="city" name="city" class="form-control">
                                        <span class="text-danger error-text city_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-material">
                                        <h4 class="example-">State</h4>
                                        <input  type="text" id="state" name="state" class="form-control">
                                        <span class="text-danger error-text state_err"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="row row-lg">
                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Address Line 1</h4>
                                        <input  type="text" id="address_1" name="address_1" class="form-control">
                                        <span class="text-danger error-text address_1_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">Address Line 2</h4>
                                        <input  type="text" id="address_2" name="address_2" class="form-control">
                                        <span class="text-danger error-text address_2_err"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Panel end -->

                    
                
            </div>
          </div>

          <br>

          <div class="custom-data-table">
            <div class="bg-white border-radius8px p-3 primary-box-shadow table-responsive">
                
                    <!-- Panel start -->
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">DOCUMENT 1</h4>
                                        <select id="doc1_id" name="doc1_id" class="form-select">
                                            <option value="">Select Address Proof</option>
                                            @foreach ($document_list as $single_document_list)
                                                @if($single_document_list['doc_type'] == '1')
                                                    <option value="{{$single_document_list->id}}"> {{$single_document_list->document_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-text doc1_id_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-material">
                                        <h4 class="example-">DOCUMENT 2</h4>
                                        <select id="doc2_id" name="doc2_id" class="form-select">
                                            <option value="">Select Identification Proof</option>
                                            @foreach ($document_list as $single_document_list)
                                                @if($single_document_list['doc_type'] == '2')
                                                    <option value="{{$single_document_list->id}}"> {{$single_document_list->document_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-text doc2_id_err"></span>
                                    </div>
                                </div>

                            </div>


                            <div class="row row-lg">
                                <div class="col-md-3">
                                    <div class="form-group form-material">
                                        <!--<h4 class="example-">Drag and drop or click to replace</h4>-->
                                        <input  type="file" id="doc1_1_img" name="doc1_1_img" class="dropify">
                                        <span class="text-danger error-text doc1_1_img_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-material">
                                        <!--<h4 class="example-">Drag and drop or click to replace</h4>-->
                                        <input  type="file" id="doc1_2_img" name="doc1_2_img" class="dropify">
                                        <span class="text-danger error-text doc1_2_img_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-material">
                                        <!--<h4 class="example-">Drag and drop or click to replace</h4>-->
                                        <input  type="file" id="doc2_image1" name="doc2_image1" class="dropify">
                                        <span class="text-danger error-text doc2_image1_err"></span>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group form-material">
                                        <!--<h4 class="example-">Drag and drop or click to replace</h4>-->
                                        <input  type="file" id="doc2_image2" name="doc2_image2" class="dropify">
                                        <span class="text-danger error-text doc2_image2_err"></span>
                                    </div>
                                </div>

                            </div>

                            <hr>


                            <div class="row row-lg">
                                <div class="col-md-4">
                                    <div class="form-group form-material">
                                        <h4 class="example-">PICKUP PROOF</h4>
                                        <select id="pickup_id" name="pickup_id" class="form-select">
                                            <option value="">Select Pickup Proof</option>
                                            @foreach ($document_list as $single_document_list)
                                                @if($single_document_list['doc_type'] == '3')
                                                    <option value="{{$single_document_list->id}}"> {{$single_document_list->document_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-text pickup_id_err"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-lg">
                                <div class="col-md-4">
                                    <div class="form-group form-material">
                                        <!--<h4 class="example-">Drag and drop or click to replace</h4>-->
                                        <input  type="file" id="pick_up_img" name="pick_up_img" class="dropify">
                                        <span class="text-danger error-text pick_up_img_err"></span>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row row-lg">
                                <div class="col-md-4">
                                    <div class="form-group form-material">

                                        @foreach ($document_list as $single_document_list)
                                            @if ($single_document_list['doc_type'] == '4')
                                                <input type="hidden" name="cancelled_cheque_id" id="cancelled_cheque_id" value="{{$single_document_list['id']}}">
                                            @endif
                                        @endforeach

                                         <!--<h4 class="example-">CANCELLED CHEQUE (Drag and drop)</h4>-->
                                        <input  type="file" id="cancelled_cheque_image" name="cancelled_cheque_image" class="dropify">
                                        <span class="text-danger error-text cancelled_cheque_image_err"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-material">

                                        @foreach ($document_list as $single_document_list)
                                            @if ($single_document_list['doc_type'] == '5')
                                                <input type="hidden" name="other_doc_id" id="other_doc_id" value="{{$single_document_list['id']}}">
                                            @endif
                                        @endforeach
                                        
                                         <!--<h4 class="example-">DOCUMENT 3 (Drag and drop)</h4>-->
                                        <input  type="file" id="other_document" name="other_document[]" multiple="true" class="dropify">
                                        <span class="text-danger error-text other_document_err"></span>
                                    </div>
                                </div>

                            </div>




                            <div class="row row-lg">
                                
                                <div class="col-md-12">
                                   <div class="form-group mb0 text-end">
                                       <button type="submit" class="assignLabelSubmit">Submit</button>
                                   </div>
                               </div>

                           </div>

                        </div>
                    </div>
                    <!-- Panel end -->
                
            </div>
          </div>

          </form>
          
        
       
            <!--<div class="dropzone" id="LogoUpload2">-->
   

          
           
            
            
          </div>
        </div>
        
      
       

<!-- main-body-panel end -->
@endsection