@extends('layouts.main')

@section('title')
Rate Card
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page rate-card-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
        <!-- main-body-panel start -->

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="bg-white py-4 px-2">
              <div class="row align-items-baseline justify-content-start pt-4 pb-3 px-2 flex-wrap ng-star-inserted">
                <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                  <h3 class="fs-20px text-dark mb-0">Rate Card</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-9">
                  <button
                    type="button"
                    id="seller_plan"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    class="dropdown-btn seller-contact"
                  >
                    <span>Plan&nbsp;:&nbsp;</span><span class="text-light-black">Lite</span>
                    <p class="float-end mb-0 ms-4">
                      <span class="text-success-strip ng-star-inserted">(Active Plan)</span
                      ><img
                        apppathcorrection=""
                        data-src="/assets/images/down-arrow.svg"
                        width="24"
                        alt=""
                        class="float-end pe-none dropdown-icon ng-star-inserted"
                        src="https://app.shiprocket.in/seller//assets/images/down-arrow.svg"
                      />
                    </p>
                  </button>

                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="true"> Forward </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 pending btn-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1"> Reverse</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Delivered btn-primary" id="pills-Delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Delivered" type="button" role="tab" aria-controls="pills-Delivered" aria-selected="false" tabindex="-1">Document</button>
                    </li>
                    
                  </ul>
                </div>
                
              </div>
              <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-6">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">25 kg</option>
                            <option value="1">0.25 kg</option>
                            <option value="2">1 kg</option>
                            <option value="3">2 kg</option>
                          </select>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                             
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Sort by: Low to High Weight <span class="ng-star-inserted">
                                  <img data-src="assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller/assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                   

                    <table class="table mt-3 sr-table text-center">
                      <thead class="sticky-top">
                        <tr class="table-head th-shadow">
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <div>Couriers</div>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">Mode</th>
                          <th scope="col" class="table-th custom_thead text-start">Min. Weight</th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone A</p>
                            <p class="middle-text text-brown-grey fs-10px">Within City</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone B</p>
                            <p class="middle-text text-brown-grey fs-10px">Within State</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone C</p>
                            <p class="middle-text text-brown-grey fs-10px">Metro to Metro</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone D</p>
                            <p class="middle-text text-brown-grey fs-10px">Rest of India</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone E</p>
                            <p class="middle-text text-brown-grey fs-10px">North East J&amp;K</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <span>COD Charges/</span><br /><span
                              >COD%<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">
                            <span
                              >Other Charges<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-lightblue">
                        <tr>
                          <td colspan="8" class="spacer"></td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start top-left-radius">Blue Dart</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>68.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>79.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>125.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹52.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start top-right-radius">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>21.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹29.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹61.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.5%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹61.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.5%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹42.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>55.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>117.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹52.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>98.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>91.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹29.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ecom Premium And Ros</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>66.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>87.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.1
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ecom Premium And Ros (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev Express Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>33.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹28.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev Express Surface (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>33.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹28.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Surface 500gm Prepaid</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹15.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Surface 500gm Cod</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Local</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dunzo Local</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Borzo</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>68.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>90.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ekart Logistics Surface (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹42.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>99.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 500gms (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹32.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>37.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>19.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>31.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>79.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>118.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev Express (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>90.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹25.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 500gms</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>89.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.9
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹32.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev Express</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>31.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>37.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>60.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>66.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>98.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹25.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>124.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>124.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 20kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 10 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>65.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>78.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev 2kg Surface (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>86.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>113.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>132.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.6</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>18.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>22.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 20 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>80.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>78.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 1kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>120.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>120.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>157.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>157.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.5</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 1kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.5</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>99.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 5 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 1kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>97.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>139.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>150.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>182.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹49.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 1kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>97.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>139.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>125.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>150.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>166.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹49.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ecom Express Surface 2kg (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>72.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>100.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>113.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>128.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹70.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹30.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.1%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>65.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>148.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>101.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>160.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>128.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>200.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>160.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>198.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>198.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev 2kg Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>152.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>152.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>265.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>265.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.6</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ecom Express Surface 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>151.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>151.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>176.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>176.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹70.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>112.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>112.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>156.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>156.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>211.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>211.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>96.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>181.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>345.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>163.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Borzo 5 Kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>164.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>131.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>181.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>171.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>230.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>296.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>237.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>178.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>118.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>234.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>245.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>163.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>286.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>192.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>501.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>272.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>194.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>194.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>210.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>210.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>225.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>225.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>288.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>288.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>249.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>283.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>349.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>399.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>259.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>354.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>230.1
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹30.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.1%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Upto 5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>233.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>233.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>251.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>251.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>287.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>287.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>323.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>323.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>308.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>308.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>356.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>356.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>490.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>490.2
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>216.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>253.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>202.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>354.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>283.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>368.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>295.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>499.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>399.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>272.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>188.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>383.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>207.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>277.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>499.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>316.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>877.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>366.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface 10 Kgs</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>303.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>303.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>379.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>379.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>508.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>508.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>613.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>613.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 20kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">20&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>564.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>564.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>629.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>629.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>799.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>799.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>890.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>890.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>981.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>981.2
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start bottom-left-radius">
                            Delhivery Surface 20 Kgs
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">20&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>584.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>584.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>727.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>727.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>836.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>836.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>971.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>971.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>1175.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>1175.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start bottom-right-radius">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-6">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">25 kg</option>
                            <option value="1">0.25 kg</option>
                            <option value="2">1 kg</option>
                            <option value="3">2 kg</option>
                          </select>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                             
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Sort by: Low to High Weight <span class="ng-star-inserted">
                                  <img data-src="assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller/assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                   

                    <table class="table mt-3 sr-table text-center">
                      <thead class="sticky-top">
                        <tr class="table-head th-shadow">
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <div>Couriers</div>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">Mode</th>
                          <th scope="col" class="table-th custom_thead text-start">Min. Weight</th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone A</p>
                            <p class="middle-text text-brown-grey fs-10px">Within City</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone B</p>
                            <p class="middle-text text-brown-grey fs-10px">Within State</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone C</p>
                            <p class="middle-text text-brown-grey fs-10px">Metro to Metro</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone D</p>
                            <p class="middle-text text-brown-grey fs-10px">Rest of India</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone E</p>
                            <p class="middle-text text-brown-grey fs-10px">North East J&amp;K</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <span>COD Charges/</span><br /><span
                              >COD%<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">
                            <span
                              >Other Charges<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-lightblue">
                        <tr>
                          <td colspan="8" class="spacer"></td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start top-left-radius">Blue Dart</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>68.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>79.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>125.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹52.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start top-right-radius">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>21.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹29.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹61.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.5%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹61.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.5%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹42.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>55.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>117.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹52.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>98.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Blue Dart Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>91.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹29.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ecom Premium And Ros</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>66.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>87.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>70.1
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ecom Premium And Ros (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev Express Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>33.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹28.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev Express Surface (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>33.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹28.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Surface 500gm Prepaid</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹15.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Surface 500gm Cod</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Shadowfax Local</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dunzo Local</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>0.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Borzo</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>68.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>90.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ekart Logistics Surface (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹42.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>99.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>84.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 500gms (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹32.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>37.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc Surface (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>19.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>31.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>79.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>118.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev Express (Additional 0.5Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>53.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>90.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹25.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart Logistics (Additional 0.5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>73.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 500gms</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>89.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.9
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹32.7</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev Express</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>31.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>37.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>60.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>66.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>98.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>74.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹25.3</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/air.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">0.5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>124.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>124.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹47.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.9%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 20kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 10 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>65.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>78.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Kerry Indev 2kg Surface (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>86.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>113.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>132.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.6</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>25.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>43.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>49.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 10kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>18.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>22.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 20 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>28.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>27.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>40.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>64.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>80.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>23.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>50.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>78.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>38.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>24.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>26.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>29.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>35.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 1kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>120.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>120.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>157.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>157.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.5</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 1kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>56.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>62.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹33.5</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>44.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>63.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>76.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>99.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Delhivery Surface 5 Kgs (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>39.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>52.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 1kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>97.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>139.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>150.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>182.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">NA</div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹49.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 1kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>97.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>115.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>103.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>139.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>125.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>150.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>166.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹49.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.4%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">
                            Ecom Express Surface 2kg (Additional 1Kg)
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>61.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>75.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>72.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>82.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>100.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>92.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>113.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>128.5
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹70.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 5kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>30.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>32.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>42.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>36.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>47.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>45.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>57.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>51.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>46.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹30.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.1%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 2kg (Additional 1Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">1&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>41.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>34.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>54.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>48.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>65.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>58.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>83.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>67.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>148.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.7
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>101.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>81.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>119.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>95.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>160.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>128.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>200.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>160.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>88.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>198.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>198.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.6%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Kerry Indev 2kg Surface</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>85.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>152.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>152.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>265.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>265.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹26.6</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ecom Express Surface 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>151.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>151.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>176.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>176.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>201.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.0
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹70.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>93.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>112.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>112.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>135.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>156.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>156.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>211.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>211.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 2kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">2&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>109.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>69.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>130.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>96.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>116.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>181.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>134.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>345.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>163.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Borzo 5 Kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/hyperlocal.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">NA</div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>105.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹0.0</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">0.0%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">NA</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>164.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>131.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>181.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>171.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>230.7
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>296.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>237.3
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.2</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>178.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>118.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>234.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>145.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>245.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>163.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>286.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>192.5
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>501.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>272.4
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>194.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>194.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>210.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>210.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>225.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>225.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.3
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>257.3
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>288.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>288.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹31.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Dtdc 5kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>249.5
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>162.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>283.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>184.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>349.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>226.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>399.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>259.7
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>354.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>230.1
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹30.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.1%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface (Upto 5Kg)</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">5&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.9
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>214.9
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>233.1
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>233.1
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>251.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>251.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>287.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>287.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>323.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>323.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.2%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>308.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>308.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>356.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>356.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>454.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>490.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>490.2
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Xpressbees 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>216.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>173.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>253.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>202.4
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>354.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>283.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>368.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>295.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>499.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>399.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.7%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Ekart 10kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>272.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>188.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>383.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>207.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>277.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>499.4
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>316.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>877.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>366.8
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹45.4</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">2.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Delhivery Surface 10 Kgs</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">10&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>303.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>303.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>379.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>379.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>439.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>508.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>508.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>613.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>613.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start">Amazon Shipping 20kg</td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">20&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>564.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>564.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>629.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>629.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>799.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>799.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>890.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>890.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>981.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>981.2
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹41.8</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">1.8%</span>
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                    
                        <tr class="table-row row-radius ng-star-inserted">
                          <td class="table-td text-start bottom-left-radius">
                            Delhivery Surface 20 Kgs
                          </td>
                          <td class="table-td text-start">
                            <img src="https://app.shiprocket.in/seller/assets/images/surface.svg" />
                          </td>
                          <td class="table-td text-start">
                            <span class="ng-star-inserted">20&nbsp;kg</span>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>584.8
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>584.8
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>727.2
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>727.2
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>836.0
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>836.0
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>971.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>971.6
                            </div>
                          </td>
                          <td class="table-td">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>1175.6
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹</span>1175.6
                            </div>
                          </td>
                          <td class="table-td text-start">
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">₹66.1</span>
                            </div>
                            <span> | </span>
                            <div class="d-inline-block price-width">
                              <span class="ng-star-inserted">3.3%</span>
                            </div>
                          </td>
                          <td class="table-td text-start bottom-right-radius">
                            <span class="ng-star-inserted">₹0.0</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Delivered" role="tabpanel" aria-labelledby="pills-Delivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-6">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">All Seleted</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">25 kg</option>
                            <option value="1">0.25 kg</option>
                            <option value="2">1 kg</option>
                            <option value="3">2 kg</option>
                          </select>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                             
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Sort by: Low to High Weight <span class="ng-star-inserted">
                                  <img data-src="assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller/assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                   

                    <table class="table mt-3 sr-table text-center">
                      <thead class="sticky-top">
                        <tr class="table-head th-shadow">
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <div>Couriers</div>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">Mode</th>
                          <th scope="col" class="table-th custom_thead text-start">Min. Weight</th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone A</p>
                            <p class="middle-text text-brown-grey fs-10px">Within City</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone B</p>
                            <p class="middle-text text-brown-grey fs-10px">Within State</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone C</p>
                            <p class="middle-text text-brown-grey fs-10px">Metro to Metro</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone D</p>
                            <p class="middle-text text-brown-grey fs-10px">Rest of India</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-center mw-13rem">
                            <p class="my-0">Zone E</p>
                            <p class="middle-text text-brown-grey fs-10px">North East J&amp;K</p>
                            <p class="my-0 bottom-text fs-10px">Forward | RTO</p>
                          </th>
                          <th scope="col" class="table-th custom_thead text-start mw-7rem">
                            <span>COD Charges/</span><br /><span
                              >COD%<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                          <th scope="col" class="table-th custom_thead text-start">
                            <span
                              >Other Charges<img
                                appsrpopover=""
                                apppathcorrection=""
                                data-src="/assets/images/text_info.svg"
                                class="ms-2"
                                data-bs-original-title=""
                                title=""
                                src="https://app.shiprocket.in/seller//assets/images/text_info.svg" /></span
                            ><br />
                          </th>
                        </tr>
                      </thead>
                      <tbody class="table-lightblue">
                        <tr class="text-center ng-star-inserted" style="border: 0">
                          <td
                            colspan="10"
                            class="border-radius8px table-td bg-transparent pt-0"
                            style="border: 0"
                          >
                            <div>
                              <div
                                class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted"
                              >
                                <div class="mb-20px">
                                  <img
                                  class="no-data-image"
                                    width="210"
                                    src="https://app.shiprocket.in/seller/assets/images/no_data/new_zero.webp"
                                    alt="No data"
                                  />
                                </div>
                                <div class="mb-27px display-4 heading">
                                  We could not find any data for the applied filters.<br />
                                  Please change filters and retry.
                                </div>
                                <div class="cta-section"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        
                    
                       
                      </tbody>
                    </table>
                    

                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
 
         <!-- main-body-panel end -->
@endsection