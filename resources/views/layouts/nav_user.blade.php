<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('assets/images/logo-icon.png')}}
                        " class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Social Jiili--</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('home') }}">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('service_package') }}">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Service List</div>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="javascript:;" class="has-arrow">--}}
{{--                        <div class="parent-icon"><i class="bx bx-cog"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Setting</div>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li> <a href="{{ url('/') }}"><i class="bx bx-right-arrow-alt"></i>System</a></li>--}}
{{--                        <li> <a href="{{ route('service.index') }}"><i class="bx bx-right-arrow-alt"></i>Services</a></li>--}}
{{--                        <li> <a href="{{ route('package.index') }}"><i class="bx bx-right-arrow-alt"></i>Packages</a></li>--}}
{{--                        <li> <a href="{{ url('/') }}"><i class="bx bx-right-arrow-alt"></i>Pages</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-group"></i>
                        </div>
                        <div class="menu-title">Order</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('user-order.index') }}"><i class="bx bx-right-arrow-alt"></i>Order List</a></li>
                        <li> <a href="{{ route('user-order.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Order</a></li>
                        <li> <a href="{{ route('user_mass_order') }}"><i class="bx bx-right-arrow-alt"></i>Create Mass Order</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-group"></i>
                        </div>
                        <div class="menu-title">Automate</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('/') }}"><i class="bx bx-right-arrow-alt"></i>Send orders</a></li>
                        <li> <a href="{{ url('/') }}"><i class="bx bx-right-arrow-alt"></i>Get order status</a></li>
                    </ul>
                </li>



                <li>
                    {{-- <a href="">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title"></div>
                    </a> --}}

                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-group"></i>
                        </div>
                        <div class="menu-title">Support Ticket</div>
                    </a>
                    <ul>
                        <li> <a href="{{  route('support-ticket.index')  }}"><i class="bx bx-right-arrow-alt"></i>Support Ticket List</a></li>
                        <li> <a href="{{ route('support-ticket.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Support Ticket</a></li>
                    </ul>
                </li>

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
