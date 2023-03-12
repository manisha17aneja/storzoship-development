@extends('layouts.main')

@section('title')
Courier Priority 
@endsection

@section('class')
warehouse-page complaints-page courier-priority user-page single-order-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->

<div class="main-panel">
          <div class="content-wrapper">

            <div class="text-right mb-2">
              <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="mdi mdi-plus"></i> Add Courier </button>
            </div>

            <!-- body content -->
            <div class="container-fluid form-container">
                <form class="ng-pristine ng-invalid ng-touched changeCourierPriorityForm" action="{{ route('user.user.changeCourierPriority') }}" method="POST">
                  @csrf
                  <div class="row">
                    
                    @foreach ($records as $record)
                      <div class="col-lg-3">
                        <div class="card"><i class="fa fa-trash fa-lg deleteCourier" aria-hidden="true" data-id="{{ $record->id }}" style="color: red"></i>
                          <img src="{{ $record->image }}" alt="courier" />
                          <div class="form-check form-switch">
                            <input class="form-check-input checkbox" type="checkbox" role="switch" id="flexSwitchCheckChecked"  data-value="{{ $record->id }}" {{$record->status == '1' ? 'checked' : ''}} />
                          </div>
                        </div>
                        <span class="badge">{{ $record->logistic_name }}</span>
                        <!--<span class="badge">{{ $record->logistic_name.'--'.$record->logistic_id.'--'.$record->priority }}</span>-->
                      </div>
                    @endforeach

                  </div>
                </form>
               
            </div>

            <!-- modal content start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <div class="modal-header">
                      <strong>Add Courier</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addCourierForm" action="{{ route('user.user.addCourier') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Title*</label>
                                  <select name="logistic_id" class="form-select">
                                    <option value="">Select</option>
                                      @foreach ($logistics as $logistic)
                                      <option value="{{$logistic->id}}"> {{$logistic->logistic_name}}</option>
                                      @endforeach
                                  </select>
                                  <span class="text-danger error-text logistic_id_err"></span>
                                </div>
                              </div>
                            </div>

                            <!--<div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Image*</label>
                                  <input name="image" type="file" class="">
                                  <span class="text-danger error-text image_err"></span>
                                </div>
                              </div>
                            </div>-->

                          

                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addCourierSubmit">Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal content end -->
          </div>
          <!-- main-panel ends -->
        </div>



<!-- main-body-panel end -->
@endsection