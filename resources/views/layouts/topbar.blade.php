        <!-- top navbar start -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
            </a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <!-- <ul class="navbar-nav w-100"><li class="nav-item w-100"><form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"><input type="text" class="form-control" placeholder="Search products"></form></li></ul> -->
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false" class="btn btn-primary bg-darker-blue br-30 mr-3">
                  <svg id="Thunder" data-name="Thunder" xmlns="http://www.w3.org/2000/svg" width="14.053" height="18.945" viewBox="0 0 14.053 18.945">
                    <path id="Path_72" data-name="Path 72" d="M9.727,0l3.841,6.159H0Z" transform="matrix(0.695, -0.719, 0.719, 0.695, 0.197, 14.667)" fill="#ffb013"></path>
                    <path id="Path_73" data-name="Path 73" d="M3.815,6.118,0,0H13.476Z" transform="matrix(0.695, -0.719, 0.719, 0.695, 0, 9.694)" fill="#ffb013"></path>
                  </svg> Quick actions </a>
                <span class="count bg-success"></span>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list action-dropdown" aria-labelledby="messageDropdown">
                  <div class="modal-content">
                    <div class="quick-actions-outer" hidden="" style="display: block !important">
                      <div class="quick-actions-wrp">
                        <div class="p-lg-4 p-md-2 custom-boot-text-center pb-0">
                          <div class="custom-row clearfix">

                            <div class="custom-col-5 ng-star-inserted">
                              <div mattooltipposition="below" mattooltipclass="quick-action-tooltip quick-action-tooltip-top" class="mat-tooltip-trigger quick-action-box ps-2 pe-2 pt-3 pb-3 fs-14px opacity-90 text-dark" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="">
                                <a class="custom-boot-d-block custom-boot-text-decoration-none text-dark" href="{{ route('user.orders.create') }}">
                                  <img apppathcorrection="" alt="quick action" class="custom-boot-d-inline-block" data-src="assets/svg/add_order.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/add_order.svg" />
                                  <span class="custom-boot-d-block mt-2">Add an Order</span>
                                </a>
                              </div>
                            </div>
                            
                            
                            <div class="custom-col-5 ng-star-inserted">
                              <div mattooltipposition="below" mattooltipclass="quick-action-tooltip quick-action-tooltip-top" class="mat-tooltip-trigger quick-action-box ps-2 pe-2 pt-3 pb-3 fs-14px opacity-90 text-dark" aria-describedby="cdk-describedby-message-1" cdk-describedby-host="">
                                <a class="custom-boot-d-block custom-boot-text-decoration-none text-dark" href="{{ route('user.returns') }}">
                                  <img apppathcorrection="" alt="quick action" class="custom-boot-d-inline-block" data-src="assets/svg/truck.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/truck.svg" />
                                  <span class="custom-boot-d-block mt-2">Returns</span>
                                </a>
                              </div>
                            </div>

                            <div class="custom-col-5 ng-star-inserted">
                              <div mattooltipposition="below" mattooltipclass="quick-action-tooltip quick-action-tooltip-top" class="mat-tooltip-trigger quick-action-box ps-2 pe-2 pt-3 pb-3 fs-14px opacity-90 text-dark" aria-describedby="cdk-describedby-message-2" cdk-describedby-host="">
                                <a class="custom-boot-d-block custom-boot-text-decoration-none text-dark" href="{{ route('user.tools.ratecalculator') }}">
                                  <img apppathcorrection="" alt="quick action" class="custom-boot-d-inline-block" data-src="assets/svg/rate_calulator.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/rate_calulator.svg" />
                                  <span class="custom-boot-d-block mt-2">Rate Calculator</span>
                                </a>
                              </div>
                            </div>
                            
                            <div class="custom-col-5 ng-star-inserted">
                              <div mattooltipposition="below" mattooltipclass="quick-action-tooltip quick-action-tooltip-top" class="mat-tooltip-trigger quick-action-box ps-2 pe-2 pt-3 pb-3 fs-14px opacity-90 text-dark" aria-describedby="cdk-describedby-message-3" cdk-describedby-host="">
                                <a class="custom-boot-d-block custom-boot-text-decoration-none text-dark" href="{{ route('user.tools.ratecard') }}">
                                  <img apppathcorrection="" alt="quick action" class="custom-boot-d-inline-block" data-src="assets/svg/create_ticket.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/create_ticket.svg" />
                                  <span class="custom-boot-d-block mt-2">Rate Card</span>
                                </a>
                              </div>
                            </div>

                            <div class="custom-col-5 ng-star-inserted">
                              <div mattooltipposition="below" mattooltipclass="quick-action-tooltip quick-action-tooltip-top" class="mat-tooltip-trigger quick-action-box ps-2 pe-2 pt-3 pb-3 fs-14px opacity-90 text-dark" aria-describedby="cdk-describedby-message-4" cdk-describedby-host="">
                                <a class="custom-boot-d-block custom-boot-text-decoration-none text-dark" href="{{ route('user.billing') }}">
                                  <img apppathcorrection="" alt="quick action" class="custom-boot-d-inline-block" data-src="assets/svg/track_shipment.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/track_shipment.svg" />
                                  <span class="custom-boot-d-block mt-2">Billing</span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <hr class="custom-boot-hr mt-2 mb-2 ng-star-inserted" style="background: #e3ddff; margin-top: 0 !important" />
                        <div class="p-3 pt-0 custom-boot-text-center ng-star-inserted" style="line-height: 1">
                          <a class="custom-boot-d-inline-block no-hover fs-10px custom-boot-text-decoration-none text-purple cursor-pointer">Close Action Descriptions</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="javascript:void(0)" style="
                  background: transparent;
                  border: none;
                  padding: 0;
                  color: #000;
              " data-toggle="dropdown" aria-expanded="false" class="btn btn-primary bg-darker-blue br-30 mr-3">
                  <img data-src="assets/svg/wallet.svg" alt="wallet" src="https://sr-sidebar.shiprocket.in/assets/svg/wallet.svg"> ₹3,405.77 </a>
                <span class="count bg-success"></span>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list action-dropdown wallet-dropdown" aria-labelledby="messageDropdown">
                  <div class="modal-content">
                    <div class="quick-actions-outer wallet-balance" hidden="" style="display: block !important">
                      <div class="quick-actions-wrp">
                        <div class="p-2 ps-3 pe-3">
                          <ul class="custom-boot-text-center p-0 m-0">
                            <li>
                              <span class="fs-14px me-2">Usable Amount:</span>
                              <strong class="fs-14px">₹3,405.77</strong>
                            </li>
                            <li class="ng-star-inserted">
                              <span class="fs-14px me-2">Available Amount:</span>
                              <strong class="fs-14px">₹3405.77</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary bg-darker-blue br-30 mr-3"> Recharge Wallet </a>
                <span class="count bg-success"></span>
              </li>
              <li class="nav-item dropdown" style="min-width: auto;">
               <!-- <button class="p-0 ms-2 me-2 prod-update bell-icon-btn">
                  <span class="position-relative">
                    <img data-src="assets/svg/bell_icon.svg" alt="bell_icon" src="https://sr-sidebar.shiprocket.in/assets/svg/bell_icon.svg" />
                  </span>
                </button>-->
                <div class="product-updates ng-tns-c44-3 ng-trigger ng-trigger-openCloseSidebar">
                  <div class="p-4 p-u-heading ng-tns-c44-3">
                    <div class="position-relative d-flex fs-18px ng-tns-c44-3">
                      <span class="open-sans color ng-tns-c44-3"> Product Updates </span>
                      <span class="ng-trigger-openCloseSidebar-close position-absolute right-0 onhover-pointer ng-tns-c44-3">
                        <img apppathcorrection="" data-src="assets/svg/cross-dark.svg" alt="cross" class="ng-tns-c44-3" src="https://sr-sidebar.shiprocket.in/assets/svg/cross-dark.svg">
                      </span>
                    </div>
                  </div>
                  <div class="p-u-body p-4 ng-tns-c44-3">
                    <div class="ng-tns-c44-3 ng-star-inserted">
                      <div class="p-u-boxes p-4 mb-4 ng-tns-c44-3 ng-star-inserted">
                        <div class="custom-boot-align-item-center custom-boot-row mb-3 ng-tns-c44-3">
                          <div class="custom-boot-col-6 ng-tns-c44-3">
                            <span class="new-tag border-radius-4px fs-10px p-2 pe-3 ps-3 ng-tns-c44-3"> New </span>
                          </div>
                          <div class="custom-boot-col-6 custom-boot-text-end ng-tns-c44-3">
                            <span class="fs-12px ng-tns-c44-3" style="color: #838383; font-weight: 300;"> Dec 6, 2022 </span>
                          </div>
                        </div>
                        <div class="custom-boot-d-flex custom-boot-align-item-center mb-3 ng-tns-c44-3">
                          <div style="width: 40px;" class="ng-tns-c44-3">
                            <div class="ng-tns-c44-3">
                              <img alt="product-icon" style="max-width: 40px; max-height: 40px;" class="ng-tns-c44-3" src="{{ asset('assets/images/logo.png') }}">
                            </div>
                          </div>
                          <div class="ps-1 ng-tns-c44-3" style="width: calc(100% - 40px);">
                            <div class="ng-tns-c44-3">
                              <div class="fs-15px open-sans headline ng-tns-c44-3"> Attention! Change in Call Center Call and Chat Timings </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 ng-tns-c44-3">
                          <!--<div class="ng-tns-c44-3">
                            <img alt="banner" class="border-radius-8px ng-tns-c44-3 ng-star-inserted" style="width: 100%;" src="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/agreements/1670317311sBHmK.png">
                          </div>-->
                        </div>
                        <div class="mb-4 ng-tns-c44-3">
                          <p class="fs-12px open-sans m-0 hide-snippet ng-tns-c44-3">
                          <p>
                            <span style="font-weight: 400;">We have changed our call center call and chat timings to serve you better. Now, you can connect with our support team between 09:00 AM to 07:00 PM on all 7 days of a week.</span>
                          </p>
                          </p>
                        </div>
                        <div class="d-flex ng-tns-c44-3">
                          <button class="btn-prod-update custom-boot-btn fs-14px pe-3 ps-3 rate-us-primary-btn me-2 ng-tns-c44-3 ng-star-inserted"> Know More </button>
                        </div>
                      </div>
                      <div class="p-u-boxes p-4 mb-4 ng-tns-c44-3 ng-star-inserted">
                        <div class="custom-boot-align-item-center custom-boot-row mb-3 ng-tns-c44-3">
                          <div class="custom-boot-col-6 ng-tns-c44-3">
                            <span class="new-tag border-radius-4px fs-10px p-2 pe-3 ps-3 ng-tns-c44-3"> New </span>
                          </div>
                          <div class="custom-boot-col-6 custom-boot-text-end ng-tns-c44-3">
                            <span class="fs-12px ng-tns-c44-3" style="color: #838383; font-weight: 300;">
                              <mat-icon role="img" class="mat-icon notranslate fs-12px me-1 material-icons-outlined ng-tns-c44-3 material-icons mat-icon-no-color" style="width: auto; height: auto; vertical-align: text-top;" aria-hidden="true" data-mat-icon-type="font"> schedule </mat-icon> Dec 6, 2022
                            </span>
                          </div>
                        </div>
                        <div class="custom-boot-d-flex custom-boot-align-item-center mb-3 ng-tns-c44-3">
                          <div style="width: 40px;" class="ng-tns-c44-3">
                            <div class="ng-tns-c44-3">
                              <img alt="product-icon" style="max-width: 40px; max-height: 40px;" class="ng-tns-c44-3" src="{{ asset('assets/images/logo.png') }}">
                            </div>
                          </div>
                          <div class="ps-1 ng-tns-c44-3" style="width: calc(100% - 40px);">
                            <div class="ng-tns-c44-3">
                              <div class="fs-15px open-sans headline ng-tns-c44-3"> Product Update: Highlights from November 2022 </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 ng-tns-c44-3">
                          <!--<div class="ng-tns-c44-3">
                            <img alt="banner" class="border-radius-8px ng-tns-c44-3 ng-star-inserted" style="width: 100%;" src="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/agreements/1670316899Ttblq.png">
                          </div>-->
                        </div>
                        <div class="mb-4 ng-tns-c44-3">
                          <p class="fs-12px open-sans m-0 hide-snippet ng-tns-c44-3">
                          <p>We are back with our monthly roundup of the latest updates, improvements, announcements, and more.&nbsp;Check it out now!</p>
                          </p>
                        </div>
                        <div class="d-flex ng-tns-c44-3">
                          <a target="_blank" class="custom-boot-btn fs-14px pe-3 ps-3 rate-us-primary-btn ng-tns-c44-3 ng-star-inserted" href="https://www.shiprocket.in/blog/product-highlights-from-november-2022/">Check Updates <img width="14" height="14" apppathcorrection="" data-src="assets/notification/newlaunch.svg" alt="" class="pb-2px ng-tns-c44-3" src="https://sr-sidebar.shiprocket.in/assets/notification/newlaunch.svg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="mat-focus-indicator mat-menu-trigger p-0 me-2 mat-button mat-button-base ng-star-inserted" aria-haspopup="true">
                  <span class="mat-button-wrapper">
                    <img data-src="assets/svg/apps.svg" alt="apps" src="https://sr-sidebar.shiprocket.in/assets/svg/apps.svg" />
                  </span>
                  <span matripple="" class="mat-ripple mat-button-ripple"></span>
                  <span class="mat-button-focus-overlay"></span>
                </button>
                <div class="menu-dropdown-container">
                  <div class="mat-menu-content ng-tns-c36-1">
                    <button class="mat-focus-indicator app-switch-list mat-menu-item ng-tns-c36-1 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="logo" style="width: 120px; margin: 0;max-width: initial;" data-src="assets/svg/fullfilment_logo.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/fullfilment_logo.svg" />
                      <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>
                    <button class="mat-focus-indicator app-switch-list mat-menu-item ng-tns-c36-1 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="logo" style="width: 120px; margin: 0;max-width: initial;" data-src="assets/svg/rocket_box_logo.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/rocket_box_logo.svg" />
                      <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown user-dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face15.jpg') }}" alt="" />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name blackText"> {{ Auth::user()->first_name.' '.Auth::user()->last_name }} </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu-right user-dd dropdown-menu" x-placement="bottom-right" style="
                    position: absolute;
                    top: 40px;
                    right: 0px;
                    will-change: transform;
                    transform: translate(-230px, 64px);
                    width: 290px;
                  ">
                  <div class="mat-menu-content ng-tns-c36-2">
                    <a href="{{ route('user.user.page') }}"><button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/user-profile.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/user-profile.svg" style="display: inline-block" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/user-profile-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/user-profile-hover.svg" /> User Profile <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button></a>
                    <!--<hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/current-plan.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/current-plan.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/current-plan-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/current-plan-hover.svg" /> Current Plan <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>
                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/refer-earn.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/refer-earn.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/refer-earn-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/refer-earn-hover.svg" /> Refer &amp; Earn <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>
                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/rate-us.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/rate-us.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/rate-us-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/rate-us-hover.svg" /> Rate Us <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>
                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/t&amp;c.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/t&amp;c.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/t&amp;c-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/t&amp;c-hover.svg" /> Terms &amp; Conditions <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>-->
                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <a href="{{ route('user.change.password') }}"><button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/change-pass.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/change-pass.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/change-pass-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/change-pass-hover.svg" /> Change Password <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button></a>
                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                    <button class="mat-focus-indicator app-switch-list user-profile-list fs-14px text-dark-black mat-menu-item ng-tns-c36-2 ng-star-inserted" role="menuitem" tabindex="0" aria-disabled="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <img apppathcorrection="" alt="user_profile" data-src="assets/svg/user-profile-icons/logout.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/logout.svg" />
                      <img apppathcorrection="" alt="user_profile" style="display: none" data-src="assets/svg/user-profile-icons/logout-hover.svg" src="https://sr-sidebar.shiprocket.in/assets/svg/user-profile-icons/logout-hover.svg" /> Logout <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <hr class="hr-1 ng-tns-c36-2 ng-star-inserted" />
                  </div>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- top navbar end -->