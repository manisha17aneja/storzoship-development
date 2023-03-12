@extends('layouts.main')

@section('title')
Channels
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->
        
<div class="main-panel">
          <div class="content-wrapper">
            
            <!-- Channels -->
          <div class="align-items-center row mb-3 channel-container">
            <div class="col-12 col-md-5 mb-3 mb-sm-0 ps-3">
              <h1 class="fs-20px m-0 SFProBold mb-1 text-lightblack">Channels</h1>
              <p class="fs-12px SFProRegular text-darkgrey m-0">
                These are the channels that are integrated in your account
              </p>
            </div>
            <div class="col-12 col-md-7 text-sm-end">
              <div
                class="d-inline-block search-channel me-4 position-relative mb-2 mb-sm-0 align-top"
              >
                <button class="search-btn ps-4 pe-2">
                  <img
                    apppathcorrection=""
                    data-src="assets/images/search-lens.svg"
                    alt="search-lens"
                    src="https://app.shiprocket.in/seller/assets/images/search-lens.svg"
                  /></button
                ><input
                  placeholder="Search by Name"
                  type="text"
                  class="form-control fs-12px border-radius6px SFProRegular pt-2 pb-2 ng-untouched ng-pristine ng-valid"
                  style="padding-left: 40px"
                />
              </div>
              <div class="d-inline-block align-top">
                <button
                  routerlink="channel-list"
                  class="bg-transparent btn fs-12px text-blue border-blue border-radius6px SFProSemiBold btn-no-focus pt-2 pb-2 mt-sm-2 mt-md-0"
                  tabindex="0"
                >
                  Add New Channel
                </button>
              </div>
            </div>
          </div>
          
          <!-- table row -->
          <div class="custom-data-table">
            <div class="bg-white border-radius8px p-3 primary-box-shadow table-responsive">
              <table aria-describedby="Channel List" class="table mob-min-width-800px">
                <thead>
                  <tr>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Channel
                    </th>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Channel ID &amp; Name
                    </th>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Connection Status
                    </th>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Status
                    </th>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Sync Info.
                    </th>
                    <th id="channelList" class="fs-12px text-lightblack pb-3 SFProSemiBold">
                      Action
                    </th>
                    <th
                      id="channelList"
                      class="fs-12px text-lightblack pb-3 SFProSemiBold w-70px"
                    >
                      Helpdoc
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-darkgrey fs-12px">
                    <td class="pt-3 pb-3 w-15percent">
                      <img
                        apppathcorrection=""
                        alt="brand logo"
                        class="channel-img-width"
                        data-src="assets/images/channels/custom.png"
                        src="https://app.shiprocket.in/seller/assets/images/channels/custom.png"
                      />
                    </td>
                    <td class="pt-3 pb-3 w-17percent">
                      <div class="SFProRegular">33996</div>
                      <div class="SFProRegular">CUSTOM</div>
                    </td>
                    <td class="pt-3 pb-3 w-17percent">
                      <div>
                        <span
                          class="conn-status bg-lightgreen text-darkgreen d-inline-block p-1 pt-1 pb-1 border-radius4px fs-10px SFProSemiBold"
                          >Authenticated</span
                        >
                      </div>
                    </td>
                    <td class="fs-16px">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                      </div>
                    </td>
                    <td class="pt-3 pb-3 w-26percent">
                      <div>
                        <span class="d-block SFProRegular"
                          >Last Order Sync : Not Available</span
                        ><span class="d-block SFProRegular"
                          >Last Inventory SYNC : Not Available</span
                        >
                      </div>
                    </td>
                    <td class="pt-3 pb-3 w-10percent">
                      <div>
                        <a
                          class="fs-12px text-blue text-decoration-none cursor-pointer SFProSemiBold"
                          >Edit</a
                        >
                      </div>
                    </td>
                    <td class="pt-3 pb-3 w-5percent">
                      <div>
                        <span class="fs-12px text-decoration-none"> No </span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
           
            
            
          </div>
        </div>
        

<!-- main-body-panel end -->
@endsection