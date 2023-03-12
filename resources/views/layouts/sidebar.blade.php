     <!-- sidebar start -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
          </a>
          <a class="sidebar-brand brand-logo-mini" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
          </a>
        </div>
        <ul class="nav">
          <!--<li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('home') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>-->
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('home') }}">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-outline"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
  

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="order">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-outline"></i>
              </span>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="order">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('search.order') }}">Search Order </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.orders') }}">View Order </a>
                </li>
                
              </ul>
            </div>
          </li>

           
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('customers') }}">Customer List </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('pending') }}">Pending Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('approve') }}">Approved Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('rejected') }}">Rejected Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('users') }}">Manage User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('customer.customer_api_setting') }}">Api Setting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('customer.pre.awb') }}">Pre Awb dashboard</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="finance">
              <span class="menu-icon">
                <i class="mdi mdi-wallet"></i>
              </span>
              <span class="menu-title">Finance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="finance">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('finance.customer_allow_credit') }}">Allow Credit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('finance.user_wallet_balance') }}">User Wallet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('finance.customer_used_credit') }}">Customer Used Credit</a>
                </li>
                
              </ul>
            </div>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#price" aria-expanded="false" aria-controls="price">
              <span class="menu-icon">
                <i class="mdi mdi-cash"></i>
              </span>
              <span class="menu-title">Price</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="price">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logistics') }}">Logistics </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('shippings') }}">Shipping Price</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('manage_price1') }}">Manage Price</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('metrocity') }}">Metrocity</a>
                </li>
                
              </ul>
            </div>
          </li>

          <!--<li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('logisticPriority') }}">
              <span class="menu-icon">
                <i class="mdi mdi-bullseye-arrow"></i>
              </span>
              <span class="menu-title">Logistic Priority</span>
            </a>
          </li>-->

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.settings.courier.priority') }}">
              <span class="menu-icon">
                <i class="mdi mdi-bullseye-arrow"></i>
              </span>
              <span class="menu-title">Logistic Priority</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('address') }}">
              <span class="menu-icon">
                <i class="mdi mdi-bank"></i>
              </span>
              <span class="menu-title">Pickup Address</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('label.assign_label') }}">
              <span class="menu-icon">
                <i class="mdi mdi-book-multiple"></i>
              </span>
              <span class="menu-title">Label</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#cod" aria-expanded="false" aria-controls="cod">
              <span class="menu-icon">
                <i class="mdi mdi-cash"></i>
              </span>
              <span class="menu-title">COD Remittance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cod">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cod.cod_remittance_list') }}">Remittance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cod.all_cod_remittance_list') }}">All Cod Remittance List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cod.cod_remittance') }}">Cod Transactions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cod.next_cod_remittance_list') }}">Next Cod Remittance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cod.next_cod_remittance_all_data') }}">Next Cod Remittance List</a>
                </li>

              </ul>
            </div>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.returns') }}">
              <span class="menu-icon">
                <i class="mdi mdi-truck-delivery"></i>
              </span>
              <span class="menu-title">Returns</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.ndr') }}">
              <span class="menu-icon">
                <i class="mdi mdi-cash-multiple"></i>
              </span>
              <span class="menu-title">NDR</span>
            </a>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Weight Mangement</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.weight.discrepancies') }}">  Weight Discrepancy  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.weight.freeze') }}">  Weight Freeze  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Setup & Manage</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.channels') }}">Channels</a>
                </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Catalogue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Courier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Packaging</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Customers</a>
                </li>-->
              </ul>
            </div>
          </li>
          <!--<li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#Buyer" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Buyer Experience</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Buyer">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Tracking Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Buyer Communication</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Returns & Refunds</a>
                </li>
              </ul>
            </div>
          </li>-->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.billing') }}">
              <span class="menu-icon">
                <i class="mdi mdi-currency-inr"></i>
              </span>
              <span class="menu-title">Billing</span>
            </a>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#tools" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Tools</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tools">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.tools.ratecalculator') }}">Rate Calculator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.tools.ratecard') }}">Rate Card</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.tools.reports') }}">Reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.tools.activities') }}">Activity Logs</a>
                </li>
              </ul>
            </div>
          </li>

         <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.settings.courier.priority') }}">Courier Priority</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.settings.add.warehouse') }}">Add Warehouse</a>
                </li>
                
              </ul>
            </div>
          </li>-->

        </ul>
      </nav>
      <!-- sidebar end -->