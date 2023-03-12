<!DOCTYPE html>
<html lang="en">



  {{--Start Header--}}
  @include('layouts.header')
  {{--End Header--}}


  <body class="dashboard-body @yield('class')">
    <div class="container-scroller main-dashboard @yield('class2')">

    <?php if(Request::path() != 'admin/kyc-verification' && Request::path() != 'admin/approve-pending'){ ?>
      {{--Start Side Bar--}}
        @include('layouts.sidebar')
      {{--End Side Bar--}}
      <?php } ?>
      <!-- page-body-wrapper-start -->
      <div class="container-fluid page-body-wrapper">



        {{--Start Top Bar--}}
          @include('layouts.topbar')
        {{--End Top Bar--}}


        @yield('page_title_con')

        {{--Start Main Body--}}
            @yield('body')
        {{--End Main Body--}}

        <!-- chat bot content start-->
        <div id="chatBoatContent" style="
            backdrop-filter: blur(4px);
            text-align: center;
            border: 1px solid rgb(232, 232, 232);
            padding: 17px 15px 25px;
            border-radius: 20px;
            background-color: rgb(255, 255, 255);
            width: 300px;
          ">
          <div style="padding: 10px">
            <img src="https://stkiwiwebdev.z23.web.core.windows.net//assets/svg/widget-image-support-1.svg" data-cy="chat-widget-image" style="width: 100%" />
          </div>
          <div style="text-align: center">
            <h2 data-cy="chat-widget-greetings" style="
                font-size: 24px;
                font-weight: bold;
                font-family: Proxima Nova, Open Sans, Helvetica, Arial,
                  sans-serif;
                color: #000000;
              "> Welcome To Bigship! </h2>
            <p data-cy="chat-widget-intro-message" style="
                font-size: 14px;
                font-family: Open Sans, Helvetica, Arial, sans-serif;
                color: #000000;
              "> We are here to help you! Kindly Share your Concern. </p>
          </div>
          <div style="text-align: center; display: flex">
            <a href="https://api.whatsapp.com/send?phone=919582837312&amp;text=Hello%2C%20Bigship%20i%20need%20assistance." target="_blank" style="
                border: 1px solid rgb(235, 235, 235);
                border-radius: 30px;
                color: rgb(255, 255, 255);
                width: 100%;
                padding: 10px 24px;
                font-size: 16px;
                outline: none;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                margin-top: 10px;
                background: linear-gradient(
                  rgb(18, 198, 101) 0%,
                  rgb(0, 148, 70) 100%
                );
              ">
              <img data-cy="chat-widget-icon" style="width: 24px; height: 24px" src="https://stkiwiwebdev.z23.web.core.windows.net/assets/svg/whatsapp-icon.svg" /> &nbsp;&nbsp;&nbsp;&nbsp; <span style="
                  font-size: 16px;
                  font-weight: bold;
                  font-family: Proxima Nova, Open Sans, Helvetica, Arial,
                    sans-serif;
                  letter-spacing: 1.2px;
                ">START CHAT</span>
            </a>
          </div>
          <div style="margin-top: 8px">
            <span style="
                font-size: 12px;
                font-family: Proxima Nova, Open Sans, Helvetica, Arial,
                  sans-serif;
                font-weight: 600;
              ">
              <span style="color: #000000">Powered by</span>&nbsp; <a target="_blank" href="https://interakt.shop/" style="color: #000000; text-decoration: none" data-cy="powered-by-interakt">interakt.shop</a>
            </span>
          </div>
          <i id="chatBoatClose" class="fa fa-close mr-2"></i>
        </div>
        <!-- chat bot content end -->

        <!-- chat bot start -->
        <div id="chatBoat" style="
            position: fixed;
            z-index: 999999999;
            bottom: 20px;
            right: 12px;
            display: block;
          ">
          <div></div>
          <button style="
              font-size: 24px;
              color: rgb(255, 255, 255);
              background: linear-gradient(
                90deg,
                rgb(18, 198, 101) 0.85%,
                rgb(0, 148, 70) 100%
              );
              border-radius: 50%;
              padding: 10px;
              outline: none;
              border: none;
              cursor: pointer;
              height: 60px;
              width: 60px;
            ">
            <img data-cy="chat-widget-icon" src="https://stkiwiwebdev.z23.web.core.windows.net/assets/svg/whatsapp-icon.svg" style="width: 100%; height: 100%" />
          </button>
        </div>
        <!-- chat bot end -->

        <!-- modal start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="p-4">
                <div class="fs-20px mb-2 position-relative custom--boot-h3 SFProBold text-opacity-90 d-flex align-items-center justify-content-between"> Recharge Your Wallet <span style="cursor: pointer" data-bs-dismiss="modal" aria-label="Close" class="position-absolute right-0 onhover-pointer d-flex">
                    <img apppathcorrection="" data-src="assets/svg/cross-dark.svg" alt="cross" src="https://sr-sidebar.shiprocket.in/assets/svg/cross-dark.svg" />
                  </span>
                </div>
                <h4 class="fs-12px mb-3 custom--boot-h4 custom--boot-text-opacity-60 SFProRegular text-opacity-60 ls-24"> Current Wallet Amount&nbsp;&nbsp; <span class="text-darkgreen SFProSemiBold ls-24">₹3405.77</span>
                </h4>
                <form novalidate="" class="custom-rechangre-wallet-form ng-pristine ng-valid ng-touched">
                  <div class="bg-lightblue p-3 pb-2 border-radius-8px">
                    <div class="fs-12px opacity-90 mb-2 ls-24 sfpro-medium"> Enter Amount in Multiples of 100 Below </div>
                    <div class="mb-1 position-relative">
                      <div class="position-relative">
                        <input type="number" min="0" formcontrolname="rechargeAmount" placeholder="Enter Amount" class="custom-form-control fs-18px border-radius-8px recharge-amount ls-36 opacity-80 SFProSemiBold border-none ng-pristine ng-valid ng-touched" style="padding-right: 33px" />
                        <span class="close-popup remove-filled-amount">
                          <img apppathcorrection="" data-src="assets/svg/cross.svg" alt="cross" src="https://sr-sidebar.shiprocket.in/assets/svg/cross.svg" />
                        </span>
                      </div>
                      <!---->
                      <!---->
                    </div>
                    <p class="fs-10px opacity-50 mb-3 custom-boot-p"> Min value:₹500 &amp; Max value: ₹50,00,000 </p>
                    <div class="fs-12px opacity-90 mb-2"> Or Select From Below </div>
                    <div class="custom-row custom-boot-row">
                      <div class="custom-col-5 mb-2 custom-css ng-star-inserted" style="">
                        <div class="fs-12px opacity-80 p-1 feature-amount custom-boot-text-center ls-24 w-60px h-24px pt-4px unselected-amount"> ₹500 </div>
                      </div>
                      <div class="custom-col-5 mb-2 custom-css ng-star-inserted" style="">
                        <div class="fs-12px opacity-80 p-1 feature-amount custom-boot-text-center ls-24 w-60px h-24px pt-4px unselected-amount"> ₹1000 </div>
                      </div>
                      <div class="custom-col-5 mb-2 custom-css ng-star-inserted" style="">
                        <div class="fs-12px opacity-80 p-1 feature-amount custom-boot-text-center ls-24 w-60px h-24px pt-4px unselected-amount"> ₹2500 </div>
                      </div>
                      <div class="custom-col-5 mb-2 custom-css ng-star-inserted" style="">
                        <div class="fs-12px opacity-80 p-1 feature-amount custom-boot-text-center ls-24 w-60px h-24px pt-4px unselected-amount"> ₹5000 </div>
                      </div>
                      <div class="custom-col-5 mb-2 custom-css ng-star-inserted" style="">
                        <div class="fs-12px opacity-80 p-1 feature-amount custom-boot-text-center ls-24 w-60px h-24px pt-4px unselected-amount"> ₹10000 </div>
                      </div>
                      <!---->
                    </div>
                  </div>
                  <div class="mb-2 mt-2 ng-star-inserted" style="">
                    <h3 class="fs-12px opacity-90 mb-2 custom--boot-h3 ls-24 font-weight-500 sfpro-medium"> Have a Coupon </h3>
                    <div class="custom-boot-row mb-2">
                      <div class="custom-boot-col-7">
                        <div class="position-relative">
                          <input formcontrolname="couponCodetext" type="text" placeholder="Enter Coupon Code here" class="custom-form-control fs-10px border-radius-8px pe-3 custom--boot-text-opacity-60 custom--mw-100-w208px h-28px ps-4 border-onfocus pcolor ng-untouched ng-pristine ng-valid" style="padding-right: 46px !important" />
                          <button class="fs-10px text-lightpurple custom-boot-btn p-0 coupon-apply-btn btn-without-focus sfpro-medium"> Apply </button>
                        </div>
                      </div>
                      <div class="custom-boot-col-5">
                        <div class="fs-10px view-coupons custom-boot-text-end opacity-80 SFProRegular me-2 d-flex justify-content-end align-items-center">
                          <span> View Available Coupons </span>
                          <img apppathcorrection="" data-src="assets/svg/arrowdownn.png" alt="arrow-down" class="h-16px w-16px mb-1" src="https://sr-sidebar.shiprocket.in/assets/svg/arrowdownn.png" />
                        </div>
                      </div>
                      <!---->
                    </div>
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="bg-verylightgrey p-3 border-radius-8px mb-3">
                    <div class="custom-boot-row">
                      <div class="custom-boot-col-6 mb-1">
                        <div class="fs-12px opacity-70 ls-24 SFProRegular"> Recharge Amount </div>
                      </div>
                      <div class="custom-boot-col-6 custom-boot-text-end mb-1">
                        <div class="fs-12px opacity-70 ls-24 SFProRegular"> ₹500 </div>
                      </div>
                      <div class="custom-boot-col-6 mb-1 mt-1">
                        <div class="fs-12px opacity-70 ls-24 SFProRegular"> Coupon Code Amount </div>
                      </div>
                      <div class="custom-boot-col-6 mb-1 custom-boot-text-end mt-1">
                        <div class="fs-12px opacity-70 ls-24 SFProRegular"> ₹0 </div>
                      </div>
                    </div>
                    <hr class="mb-1 mt-1 opacity-50" style="color: #e3e3e3" />
                    <div class="custom-boot-row">
                      <div class="custom-boot-col-6 mt-1">
                        <div class="fs-12px opacity-90 ls-24 SFProBold">
                          <strong>Payable Amount</strong>
                        </div>
                      </div>
                      <div class="custom-boot-col-6 mt-1 custom-boot-text-end">
                        <div class="fs-12px opacity-90 ls-24 SFProBold">
                          <strong>₹500</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-boot-text-center mt-3">
                    <button class="custom-boot-btn border-lightpurple custom-boot-text-white bg-lightpurple fs-14px ps-4 pe-4 SFProSemiBold ls-28 font-weight-600 custom-border-radius-6px custom--height-36px custom--mw-100-w198px"> Continue to Payment </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal end -->

      </div>
      <!-- page-body-wrapper-end -->

    </div>  
 
    {{--Start Footer--}}
    @include('layouts.footer')
    {{--End Footer--}}

  </body>
</html>