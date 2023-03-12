@extends('layouts.main')

@section('title')
Returns
@endsection

@section('class')
warehouse-page order-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page user-page
@endsection

@section('class2')
create-returns-new
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->
<div class="main-panel">
          <div class="content-wrapper">
          <!-- body content -->
          <div class="row">
            <div class="col-9">
                <div class="order-container">
                    <form action="#">
                    <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                       data-bs-target="#collapseOne" aria-expanded="true"
                       aria-controls="collapseOne">
                    <span>1</span> Pick Up POC Details
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                       aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     
                      <div class="byr_leftright">
                          <h5 class="byr_heading">Buyer Details</h5>
                          <div class="row">
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">First Name
                                      <span class="color-red">*</span>
                                   </label>
                                   <input name="pickup_customer_name" id="form_first_name" type="text" ng-model="orderDetail.pickup_first_name" class="form-control input-sm error-append ng-touched ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required" required="" style="">
                                   <p ng-show="forms.buyerForm.pickup_customer_name.$invalid &amp;&amp; (forms.buyerForm.pickup_customer_name.$touched || forms.buyerForm.$submitted)" style="color: red;" class="ng-hide">The pickup customer name field is required</p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Last Name</label>
                                   <input name="pickup_last_name" id="form_last_name" type="text" ng-model="orderDetail.pickup_last_name" class="form-control input-sm error-append ng-valid ng-touched ng-not-empty ng-dirty ng-valid-parse" style="">
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Phone
                                      <span class="color-red">*</span>
                                   </label>
                                   <div class="input-group w-100i">
                                      <input type="tel" name="pickup_phone_country_code" id="form_mobile_country_code" maxlength="4" class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-maxlength" ng-model="orderDetail.pickup_mobile_country_code" placeholder="+91" value="+91" style="display:inline; width:45px;" disabled="">
                                      <input type="tel" name="pickup_phone" id="form_mobile" class="form-control input-sm error-append ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-maxlength ng-touched" ng-model="orderDetail.pickup_phone" dp-length="10" maxlength="10" placeholder="9999999999" style="display: inline; width: calc(100% - 45px); border-radius: 0px 20px 20px 0px;" required="">
                                      <p ng-show="forms.buyerForm.pickup_phone.$invalid &amp;&amp; (forms.buyerForm.pickup_phone.$touched || forms.buyerForm.$submitted)" style="color: red;" class="">The pickup phone must be a number..</p>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Email
                                      <span class="color-red">*</span>
                                   </label>
                                   <input type="text" name="pickup_email" id="form_email" class="form-control input-sm error-append ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="orderDetail.pickup_email" required="">
                                   <p ng-show="forms.buyerForm.pickup_email.$invalid &amp;&amp; (forms.buyerForm.pickup_email.$touched || forms.buyerForm.$submitted)" style="color:red" class="ng-hide">The pickup email field is required.</p>
                                </div>
                             </div>
              
                          </div>
                          <h5 class="byr_heading">Pick Up Address</h5>
                          <div class="row">
              
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label pr0">Address 1
                                      <span class="color-red">*</span>
                                   </label>
                                   <div class="products-wrapper p0 relative">
                                     
              
                                      <input type="text" name="pickup_address" maxlength="190" ng-model="orderDetail.pickup_address_1" placeholder="Location" required="" class="form-control input-sm error-append ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength">
              
                                   </div>
                                  
                                   <p ng-show="forms.buyerForm.pickup_address.$invalid &amp;&amp; (forms.buyerForm.pickup_address.$touched || forms.buyerForm.$submitted)" style="color:red" class="ng-hide">*The pickup address field is required</p>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label pr0">Address 2</label>
                                   <input type="text" id="form_address_2" maxlength="190" name="pickup_address_2" class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" ng-model="orderDetail.pickup_address_2">
                                </div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Post Code
                                      <span class="color-red">*</span>
                                   </label>
                                   <input type="number" name="pickup_pincode" id="form_post_code" class="form-control input-sm error-append ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="orderDetail.pickup_pincode" ng-change="getPincodeDetails(orderDetail.pickup_pincode)" required="">
                                   <p ng-show="forms.buyerForm.pickup_pincode.$invalid &amp;&amp; (forms.buyerForm.pickup_pincode.$touched || forms.buyerForm.$submitted)" style="color:red" class="ng-hide">The pickup pincode field is required</p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">City
                                      <span class="color-red">*</span>
                                   </label>
                                   <input type="text" name="pickup_city" id="form_city" class="form-control input-sm error-append ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="orderDetail.pickup_city" required="">
                                   <p ng-show="forms.buyerForm.pickup_city.$invalid &amp;&amp; (forms.buyerForm.pickup_city.$touched || forms.buyerForm.$submitted)" style="color:red" class="ng-hide">The pickup city field is required</p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Region/ State
                                      <span class="color-red">*</span>
                                   </label>
                                   <select name="pickup_state" id="form_region" class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" ng-model="orderDetail.pickup_state" ng-options="option as option.name for option in pickupStateList track by option.id" ng-disabled="isOldOrder" required=""><option label="Please Select State" value="0" selected="selected">Please Select State</option><option label="Andaman and Nicobar Islands" value="1475">Andaman and Nicobar Islands</option><option label="Andhra Pradesh" value="1476">Andhra Pradesh</option><option label="Arunachal Pradesh" value="1477">Arunachal Pradesh</option><option label="Assam" value="1478">Assam</option><option label="Bihar" value="1479">Bihar</option><option label="Chandigarh" value="1480">Chandigarh</option><option label="Dadra and Nagar Haveli" value="1481">Dadra and Nagar Haveli</option><option label="Daman and Diu" value="1482">Daman and Diu</option><option label="Delhi" value="1483">Delhi</option><option label="Goa" value="1484">Goa</option><option label="Gujarat" value="1485">Gujarat</option><option label="Haryana" value="1486">Haryana</option><option label="Himachal Pradesh" value="1487">Himachal Pradesh</option><option label="Jammu and Kashmir" value="1488">Jammu and Kashmir</option><option label="Karnataka" value="1489">Karnataka</option><option label="Kerala" value="1490">Kerala</option><option label="Lakshadweep Islands" value="1491">Lakshadweep Islands</option><option label="Madhya Pradesh" value="1492">Madhya Pradesh</option><option label="Maharashtra" value="1493">Maharashtra</option><option label="Manipur" value="1494">Manipur</option><option label="Meghalaya" value="1495">Meghalaya</option><option label="Mizoram" value="1496">Mizoram</option><option label="Nagaland" value="1497">Nagaland</option><option label="Odisha" value="1498">Odisha</option><option label="Pondicherry" value="1499">Pondicherry</option><option label="Punjab" value="1500">Punjab</option><option label="Rajasthan" value="1501">Rajasthan</option><option label="Sikkim" value="1502">Sikkim</option><option label="Tamil Nadu" value="1503">Tamil Nadu</option><option label="Tripura" value="1504">Tripura</option><option label="Uttar Pradesh" value="1505">Uttar Pradesh</option><option label="West Bengal" value="1506">West Bengal</option><option label="Jharkhand" value="3971">Jharkhand</option><option label="Uttarakhand" value="3972">Uttarakhand</option><option label="Chhattisgarh" value="3973">Chhattisgarh</option><option label="Telangana" value="3976">Telangana</option><option label="Ladakh" value="3986">Ladakh</option></select>
                                   <p ng-show="forms.buyerForm.pickup_state.$invalid &amp;&amp; (forms.buyerForm.pickup_state.$touched || forms.buyerForm.$submitted)" style="color:red" class="ng-hide">The pickup state field is required</p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label pr0">Country
                                      <span class="color-red">*</span>
                                   </label>
                                   <input type="text" name="pickup_country" id="form_enter_country" class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="orderDetail.pickup_country.name" disabled="">
                                </div>
                             </div>
                          </div>
                          <div class="row ">
                             <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label pr0">Company Name</label>
                                   <input type="text" name="company_name" id="form_email" class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-empty" ng-model="orderDetail.company_name">
                                </div>
                             </div>
                          </div>
                          <div class="row mb">
                             <div class="col-md-12 text-right">
                                <button type="submit" class="next_btn" ng-click="formValidate('orderDetails', 'buyerForm')">Next</button>
                             </div>
                          </div>
              
                       </div>
              
                    </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button"
                       data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                       aria-expanded="false" aria-controls="collapseTwo">
                    <span>2</span> Order Details
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                       aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    
                      <div
                class="form-wizard wizard-horizontal ng-pristine ng-scope ng-invalid ng-invalid-required ng-valid-date"
                ng-form="forms.orderForm"
              >
                <div class="byr_leftright">
                  <h5 class="byr_heading">Order Details</h5>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label pr0"
                          >Order ID
                          <span class="color-red">*</span>
                        </label>
                        <input
                          name="order_id"
                          id="form_order_id"
                          type="text"
                          class="form-control input-sm error-append ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                          ng-model="orderDetail.order_id"
                          required=""
                        />
                        <span class="blue-round-btn mt-s" ng-click="generateOrderID()"
                          >Generate</span
                        >
                        <p
                          ng-show="forms.orderForm.order_id.$invalid &amp;&amp; (forms.orderForm.order_id.$touched || forms.orderForm.$submitted)"
                          style="color: red"
                          class="ng-hide"
                        >
                          The order id field is required.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3 datepicker">
                      <div class="form-group">
                        <label class="control-label pr0"
                          >Order Date
                          <span class="color-red">*</span>
                        </label>
                        <div
                          class="input-group m0 error-append ng-scope"
                          ng-controller="DatepickerDemoCtrl as dp"
                        >
                          <input
                            type="text"
                            name="order_date"
                            ng-model="orderDetail.order_date"
                            value=""
                            required="required"
                            uib-datepicker-popup="dd-MMMM-yyyy"
                            is-open="dp.opened"
                            min-date="2016-07-05"
                            uib-datepicker-options="dp.dateOptions"
                            date-disabled="dp.disabled(mode)"
                            datepicker-options="options"
                            showweeks="false"
                            ng-required="true"
                            close-text="Close"
                            class="form-control input-sm ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-touched ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-date"
                          />
                          <input type="date" name="date" id="date-input">
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label pr0"
                          >Channel Name
                          <span class="color-red">*</span>
                        </label>
                        <select
                          ng-if="!isOldOrder"
                          name="channel_id"
                          class="form-control input-sm channel_id error-append ng-pristine ng-untouched ng-scope ng-not-empty ng-valid ng-valid-required"
                          ng-model="orderDetail.channel"
                          ng-options="option as option.name for option in customChannelList track by option.id"
                          required=""
                          style=""
                        >
                          <option label="CUSTOM" value="33996" selected="selected">
                            CUSTOM
                          </option>
                        </select>
                        <p
                          ng-show="forms.orderForm.channel_id.$invalid &amp;&amp; (forms.orderForm.channel_id.$touched || forms.orderForm.$submitted)"
                          style="color: red"
                          class="ng-hide"
                        >
                          The order channel field is required.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label pr0">Order Type </label>
                        <select
                          name="order_type"
                          id="order_type"
                          class="form-control input-sm error-append ng-pristine ng-untouched ng-valid ng-not-empty"
                          ng-model="orderDetail.order_type"
                          ng-options="option as option.name for option in eseentialOrder track by option.id"
                        >
                          <option label="Select Order Type" value="0">
                            Select Order Type
                          </option>
                          <option label="Essentials" value="Essentials">Essentials</option>
                          <option label="Non Essentials" value="Non Essentials">
                            Non Essentials
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mb">
                    <div class="col-md-12 text-right">
                      <button
                        type="submit"
                        class="next_btn"
                        ng-click="formValidate('productDetails', 'orderForm')"
                      >
                        Next
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
              
                    </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button"
                       data-bs-toggle="collapse" data-bs-target="#collapseThree"
                       aria-expanded="false" aria-controls="collapseThree">
                    <span>3</span>Product Details
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse"
                       aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    
                      <div class="byr_leftright ng-scope">
                          <div
                            class="form-wizard wizard-horizontal ng-pristine ng-invalid ng-invalid-required"
                            ng-form="forms.prodDetail"
                          >
                            <div class="proDesign custom-retrun-order ng-scope" ng-if="!isOldOrder">
                              <div class="row product-row">
                                <div class="col-md-2">
                                  <label
                                    >Product Name
                                    <span class="color-red">*</span>
                                  </label>
                                  <div class="products-wrapper p0">
                                    <input
                                      type="text"
                                      autocomplete="off"
                                      name="order_items.0.name"
                                      id="name0"
                                      class="input-sm form-control error-append name0 ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                      data-sku=""
                                      ng-keyup='getProduct($event, "0"); checkIsFill("name0", "name")'
                                      placeholder="Search Product Name"
                                      ng-model="order_items.name0"
                                      required=""
                                    />
                                    <div
                                      class="options product-dorpdown"
                                      style="z-index: 1000; position: absolute; width: 100%"
                                    ></div>
                                    <p class="nameerror0" style="color: red; display: none">
                                      The item name field is required
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-1" style="width: 13%">
                                  <label
                                    >SKU
                                    <span class="color-red">*</span>
                                  </label>
                                  <div>
                                    <input
                                      type="text"
                                      name="order_items.0.sku"
                                      id="form_enter_sku"
                                      class="form-control input-sm error-append sku0"
                                      placeholder="Enter SKU"
                                      ng-keyup="checkIsFill('sku0', 'sku');getQcData2(0,order_items.name0);"
                                      required=""
                                    />
                                    <p class="skuerror0" style="color: red; display: none">
                                      The item sku field is required
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-2" style="width: 13%">
                                  <label
                                    >Quantity
                                    <span class="color-red">*</span>
                                  </label>
                                  <div>
                                    <input
                                      type="number"
                                      id="form_enter_qty"
                                      name="order_items.0.units"
                                      class="form-control input-sm error-append quantity0 ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                      placeholder="Enter Qty"
                                      ng-blur='updateTotals($event, "0")'
                                      ng-keyup='updateTotals($event, "0"); checkIsFill("quantity0", "quantity")'
                                      ng-model="order_items.quantity0"
                                      required=""
                                    />
                                    <p class="quantityerror0" style="color: red; display: none">
                                      The item unit field is required
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-1" style="width: 13%">
                                  <label>Tax(%)</label>
                                  <div>
                                    <input
                                      type="number"
                                      name="order_items.0.tax"
                                      id="form_enter_tax"
                                      class="form-control input-sm error-append tax0"
                                      placeholder="Enter Tax"
                                      ng-disabled="disableTax0"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-2" style="width: 13%">
                                  <label
                                    >Price (<i class="fa fa-inr"></i>)
                                    <span class="color-red">*</span>
                                  </label>
                                  <div>
                                    <input
                                      style="display: inline-block; margin-right: 5px; width: 100%"
                                      type="number"
                                      name="order_items.0.selling_price"
                                      id="form_enter_price"
                                      class="form-control input-sm error-append price0 ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                      placeholder="Enter Price"
                                      ng-keyup='updateTotals($event, "0")'
                                      ng-blur='updateTotals($event, "0"); checkIsFill("price0", "price")'
                                      ng-model="order_items.price0"
                                      required=""
                                    />
                                    <p class="priceerror0" style="color: red; display: none">
                                      The item selling price field is required
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-2" style="width: 13%">
                                  <label>Discount (<i class="fa fa-inr"></i>)</label>
                                  <div>
                                    <input
                                      type="number"
                                      class="form-control input-sm discount0"
                                      id="form_enter_discount"
                                      placeholder="Enter Discount"
                                      ng-keyup='updateTotals($event, "0")'
                                      ng-blur='updateTotals($event, "0")'
                                    />
                                  </div>
                                </div>
                                <div class="col-md-1">
                                  <label>Total</label>
                                  <div class="row-total">0.00</div>
                                </div>
                                <div class="col-md-1">
                                  <div class="pt-lg">
                                    <button
                                      class="disableBtn row-remove"
                                      id="removeButton0"
                                      disabled=""
                                      ng-click="removeProductRow($event, '0')"
                                    >
                                      <i class="fa fa-trash"></i>
                                    </button>
                                  </div>
                                </div>
                        
                                <div class="col-md-12">
                                  <div>
                                    <span
                                      ng-click="showProductdetailsLeft = !showProductdetailsLeft;"
                                      class="arrowCss pt-lg inline-block"
                                      style="margin-top: 1px"
                                    >
                                      <i
                                        ng-class="showProductdetailsLeft ? 'fa fa-angle-up' : 'fa fa-angle-down'"
                                        class="fa fa-angle-up"
                                        style=""
                                      ></i>
                                      <strong style="color: #285fdb">Additional Product Info</strong>
                                    </span>
                                  </div>
                                </div>
                                <div
                                  class="col-md-12 mt"
                                  style="padding: 0px"
                                  ng-show="showProductdetailsLeft"
                                >
                                  <div class="col-lg-2">
                                    <label>HSN</label>
                                    <div>
                                      <input
                                        type="number"
                                        name="order_items.0.hsn"
                                        id="form_enter_hsn"
                                        class="form-control input-sm error-append hsn0"
                                        placeholder="Enter HSN"
                                      />
                                    </div>
                                  </div>
                                  <div
                                    class="col-lg-2 ng-scope"
                                    ng-if="!productListData0.qc_feilds.qc_brand"
                                  >
                                    <label>Brand</label>
                                    <div>
                                      <input
                                        type="text"
                                        name="order_items.0.brand"
                                        id="form_enter_brand"
                                        class="form-control input-sm error-append brand0"
                                        placeholder="Enter Brand"
                                      />
                                    </div>
                                  </div>
                                  <div
                                    class="col-lg-2 ng-scope"
                                    ng-if="!productListData0.qc_feilds.qc_color"
                                  >
                                    <label>Color</label>
                                    <div>
                                      <input
                                        type="text"
                                        name="order_items.0.color"
                                        id="form_enter_color"
                                        class="form-control input-sm error-append color0"
                                        placeholder="Enter Color"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="row mb mt ng-scope" ng-if="!isOldOrder">
                              <div class="col-md-12 text-right">
                                <button
                                  type="submit"
                                  class="next_btn"
                                  ng-click="formValidate('returnReasonDetails', 'prodDetail')"
                                >
                                  Next
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
              
                    </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button"
                       data-bs-toggle="collapse" data-bs-target="#collapseFour"
                       aria-expanded="false" aria-controls="collapseFour">
                    <span>4</span>Return Reason
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse"
                       aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <span class="circle green"><i class="fa fa-check"></i></span>
                    <div class="card-body">
                    <h5 class="text-center">Address 1
                    </h5>
                    <p class="text-center"> Shop
                    No-6,H.No-A4, Ground Floor </p>
                    <p class="text-center"> Christian
                    Colony Patel Chest,Opp. Maurice Nagar Thana </p>
                    <p class="text-center"> DELHI DELHI
                    110007 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 2
                    </h5>
                    <p class="text-center"> L8, Basement
                    </p>
                    <p class="text-center"> Sant Nagar
                    Road, Jharoda </p>
                    <p class="text-center"> DELHI DELHI
                    110084 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 3
                    </h5>
                    <p class="text-center"> Shop no -04
                    Christan colony </p>
                    <p class="text-center"> Near maurish
                    nagar police station </p>
                    <p class="text-center"> DELHI DELHI
                    110007 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 4
                    </h5>
                    <p class="text-center"> B-43/5
                    basement Christian colony </p>
                    <p class="text-center"> patel chest
                    NEW DELHI </p>
                    <p class="text-center"> DELHI DELHI
                    110007 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 5
                    </h5>
                    <p class="text-center">
                    H.NO-31/4,SARASWATI VINDRA ASHRAM NAGARWADHI
                    CHANDARASHANKAR LAYOUT, </p>
                    <p class="text-center"> SARASWATI
                    VINDRA ASHRAM, BENGLURU </p>
                    <p class="text-center"> BANGALORE(KA)
                    KARNATAKA 560091 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 6
                    </h5>
                    <p class="text-center"> OFFICE NO
                    6,A4GROUND FLOOR </p>
                    <p class="text-center"> CHRISTIAN
                    COLONY PATEL CHEST </p>
                    <p class="text-center"> DELHI DELHI
                    110007 </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="text-center">Address 7
                    </h5>
                    <p class="text-center"> CREATIVE
                    INTERNATION EXPORTS,NEAR GIRLS MADARSA </p>
                    <p class="text-center">
                    HABIBGARH,SHAHRANPUR </p>
                    <p class="text-center"> Saharanpur
                    UTTAR PRADESH 247001 </p>
                    </div>
                    </div>
                    </div>
                    <div class="add-address text-right" data-bs-toggle="modal"
                       data-bs-target="#exampleModal"><button
                       class="btn btn-primary add-address"> +
                    Add Address </button></div>
                    </div>
                    <div class="btn-container" style="margin-top: 20px;">
                    <button class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button"
                       data-bs-toggle="collapse" data-bs-target="#collapseFive"
                       aria-expanded="false" aria-controls="collapseFive">
                    <span>5</span>Delivery Address
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse"
                       aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    test
                    </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button"
                           data-bs-toggle="collapse" data-bs-target="#collapseSix"
                           aria-expanded="false" aria-controls="collapseSix">
                        <span>6</span>Weight & Dimensions
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse"
                           aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        test
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button"
                           data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                           aria-expanded="false" aria-controls="collapseSeven">
                        <span>7</span>Payment Details
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse"
                           aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        test
                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
                    </div>
            </div>
            <div class="col-md-3 hidden-xs">
                <div class="tab_details bg-white tab_details">
                  <add-return-order-data id="product" class="ng-isolate-scope">
                    <div class="p-xl ng-scope" ng-if="id == 'product'" style="">
                      <h4 class="mb-15 mt-0 lh-23">Next, fill details about the product</h4>
                      <p>
                        It's mandatory to add the product name, SKU, quantity, and price.
                        However, we recommend you provide other product details as well that
                        include the brand name, color, HSN, discount details, etc.
                      </p>
                    </div></add-return-order-data
                  >
                </div>
              </div>
              
          </div>
          
          </div>
          <!-- main-panel ends -->
          </div>

<!-- main-body-panel end -->
@endsection