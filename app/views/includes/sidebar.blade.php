            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="{{ URL::to('/')}}">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Branches-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Branches
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ URL::to('branch/show') }}">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Branches</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('branch/create') }}">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Branch</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--Food-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Food
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Foods</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Food</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--Order-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Order
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Orders</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Order</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--Food Category-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Food Categories
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Categories</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Category</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--Delivery Locations-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Delivery Locations
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Locations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Location</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--Customer-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        Customer
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Customers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New Customer</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <!--User-->
                    <li>
                          <a href="#" class="menu-dropdown">
                                    <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                    <span class="menu-text">
                                        User
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">List Users</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">New User</span>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->