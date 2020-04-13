<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nixon : Admin Kit</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="./assets/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="./assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="./assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="./assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="./assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/lib/nixon.css" rel="stylesheet">
    <link href="./assets/lib/lobipanel/css/lobipanel.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/datatables-select.min.css" rel="stylesheet">
    <link href="./assets/css/datatables.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>
    

    {{--    --}}
</head>

<body>
    <div id="app">
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="active">
                        <a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/">Dashboard 1</router-link></li>
                             
                        </ul>
                    </li>
                      
                      
                    <li><router-link to="/profile"><i class="ti-user"></i> Profile</router-link></li>
                    <li><router-link to="/calendar"><i class="ti-layout-grid2-alt"></i> Calendar</router-link></li>
                    <li><router-link to="/class-schedule"><i class="ti-layout-grid2-alt"></i> Class Schedule</router-link></li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Attendance <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/take-attendance">Take Attendance</router-link></li>
                            <li><router-link to="/attendance-report">Attendance Report</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Vacation <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/request-vacation">Request Vacation</router-link></li>
                            <li><router-link to="/approve-vacation">Approve Vacation</router-link></li>  
                            <li><router-link to="/my-vacation">My Vacations</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Library <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/issue-book">Issue Book</router-link></li>
                            <li><router-link to="/return-book">Return Book</router-link></li>  
                            <li><router-link to="/list-books">List Books</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Employees <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/teachers">Teachers</router-link></li>
                            <li><router-link to="/departments">Departments</router-link></li>  
                            <li><router-link to="/designations">Designations</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Students <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/students">Students</router-link></li>
                            <li><router-link to="/students-admission">Students Admission</router-link></li>  
                            <li><router-link to="/students-category">Student Categories/Class</router-link></li>  
                        </ul>
                    </li>
                    <li><router-link to="/grade"><i class="ti-layout-grid2-alt"></i> Grade Level</router-link></li>
                    <li><router-link to="/materials"><i class="ti-layout-grid2-alt"></i> Study Materials</router-link></li>
                    <li><router-link to="/home-work"><i class="ti-layout-grid2-alt"></i>Home Work</router-link></li>
                    <li><router-link to="/assignments"><i class="ti-layout-grid2-alt"></i>Assignments</router-link></li>
                    <li><router-link to="/exam-list"><i class="ti-layout-grid2-alt"></i>Exam List</router-link></li>
                    <li><router-link to="/online-exam"><i class="ti-layout-grid2-alt"></i>Online Exams</router-link></li>
                    <li><router-link to="/news"><i class="ti-layout-grid2-alt"></i>News Feed</router-link></li>
                    <li><router-link to="/events"><i class="ti-layout-grid2-alt"></i>Events</router-link></li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Payroll <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/make-payment">Make Payment</router-link></li>
                            <li><router-link to="/user-salary">Users Salary</router-link></li>  
                            <li><router-link to="/salary-base">Salary Base</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Accounting <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/invoice">Invoices</router-link></li>
                            <li><router-link to="/due-invoices">Due Invoice</router-link></li>  
                            <li><router-link to="/fee-group">Fees Group</router-link></li>  
                            <li><router-link to="/fee-type">Fees Type</router-link></li>  
                            <li><router-link to="/fee-allocation">Fees Allocation</router-link></li>  
                            <li><router-link to="/fee-discount">Fees Discount</router-link></li>  
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Expenses <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/expenses">Expenses</router-link></li>
                            <li><router-link to="/expenses-categories">Expenses Categoies</router-link></li>    
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Income <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/income">Income</router-link></li>
                            <li><router-link to="/income-categories">Income Categoies</router-link></li>    
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Inventory <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/issue">Issue/Return</router-link></li>
                            <li><router-link to="/item-stock">Item Stock</router-link></li>    
                            <li><router-link to="/inventory-category">Inventory Categoies</router-link></li>    
                            <li><router-link to="/suppliers">Suppliers</router-link></li>    
                            <li><router-link to="/stores">Stores</router-link></li>    
                            <li><router-link to="/item-coding">Item Coding</router-link></li>    
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Classes <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/classes">Classes</router-link></li>
                            <li><router-link to="/section">Section</router-link></li>       
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Hostel Management <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/hostel">Hostel</router-link></li>
                            <li><router-link to="/hostel-category">Hostel Categories</router-link></li>       
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> Transportation <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><router-link to="/transportation">Transportation</router-link></li>
                            <li><router-link to="/transport-vehicles">Transport Vehicles</router-link></li>       
                            <li><router-link to="/members">Members</router-link></li>       
                        </ul>
                    </li>
                    

                    {{--  <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-badges.html">Badges</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-Images.html">Images</a></li> 
                             
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-panel"></i> Components <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="uc-calendar.html">Calendar</a></li>
                            <li><a href="uc-carousel.html">Carousel</a></li>
                              
                            <li><a href="uc-datamap.html">Datamap</a></li>
                            <li><a href="uc-todo-list.html">To do</a></li>
                            <li><a href="uc-scrollable.html">Scrollable</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="uc-range-slider-basic.html">Basic Range Slider</a></li>
                            <li><a href="uc-range-slider-advance.html">Advance Range Slider</a></li>
                            <li><a href="uc-nestable.html">Nestable</a></li>
                            <li><a href="uc-portlets.html">Portlets</a></li>
                              
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Charts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Flot</a></li>
                              
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-basic.html">Basic</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="font-themify.html">Themify</a></li>
                        </ul>
                    </li>
                    <li> 
                    </li>
                    <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="invoice.html">Basic</a></li>
                            <li><a href="invoice-editable.html">Editable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-reset-password.html">Forgot password</a></li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="https://docs.vuejsadmin.com/docs/nixon-admin/"><i class="ti-file"></i> Documentation</a></li>  --}}
                    <li><a><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="pull-left">
            <div class="logo">
                <router-link to="/">
                    <img id="logoImg" src="logo/logo.png" data-logo_big="logo/logo.png" data-logo_small="logo/logoSmall.png" alt="Nixon" />
                </a>
            </div>
            <div class="hamburger sidebar-toggle">
                <span class="ti-menu"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib">
                    <i class="ti-bell"></i>
                    <div class="note-count">2</div>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        
                                <Noti></Noti>
                               
                          
                    </div>
                </li>
                <li class="header-icon dib">
                    <i class="ti-email"></i>
                    <div class="note-count">21</div>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">2 New Messages</span>
                            <a href="app-email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/1.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Doe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Roe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Doe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="./assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Roe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib chat-sidebar-icon"><i class="ti-comments"></i></li>
                <li class="header-icon dib">
                    <img class="avatar-img" src="./assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar">Jane <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Upgrade Now</span>
                            <p class="trial-day">30 Days Trail</p>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="chat-sidebar">
        <!-- BEGIN chat -->
        <div id="mmc-chat" class="color-default">
            <!-- BEGIN CHAT BOX -->
            <div class="chat-box">
                <!-- BEGIN CHAT BOXS -->
                <ul class="boxs"></ul>
                <!-- END CHAT BOXS -->
                <div class="icons-set">
                    <div class="stickers">
                        <div class="had-container">
                            <div class="row">
                                <div class="s12">
                                    <ul class="tabs" style="width: 100%;height: 60px;">
                                        <li class="tab col s3">
                                            <a href="#tab1" class="active">
                                                <img src="./assets/images/1.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="tab col s3"><a href="#tab2">Test 2</a></li>
                                    </ul>
                                </div>
                                <div id="tab1" class="s12 tab-content">
                                    <ul>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                        <li><img src="./assets/images/1.png" alt="" /></li>
                                    </ul>
                                </div>
                                <div id="tab2" class="s12 tab-content">Test 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CHAT BOX -->
            <!-- BEGIN SIDEBAR -->
            <div id="sidebar" class="right scroll">
                <div class="had-container">
                    <!-- BEGIN USERS -->
                    <div class="users">
                        <ul class="user-list">
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="1" data-status="online" data-username="Rufat Askerov" data-position="left" data-filter-item data-filter-name="rufat askerov">
                                <!-- BEGIN USER IMAGE-->
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Rufat Askerov" />
                                </div>
                                <!-- END USER IMAGE-->
                                <!-- BEGIN USERNAME-->
                                <span class="user-name">Rufat Askerov</span>
                                <span class="user-show"></span>
                                <!-- END USERNAME-->
                            </li>
                            <!-- END USER-->
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="3" data-status="online" data-username="Alice" data-position="left" data-filter-item data-filter-name="alice">
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Alice" />
                                </div>
                                <span class="user-name">Alice</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Michael Scofield" data-position="left" data-filter-item data-filter-name="michael scofield">
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Michael Scofield" />
                                </div>
                                <span class="user-name">Michael Scofield</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="5" data-status="online" data-username="Irina Shayk" data-position="left" data-filter-item data-filter-name="irina shayk">
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Irina Shayk" />
                                </div>
                                <span class="user-name">Irina Shayk</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="6" data-status="offline" data-username="Sara Tancredi" data-position="left" data-filter-item data-filter-name="sara tancredi">
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Sara Tancredi" />
                                </div>
                                <span class="user-name">Sara Tancredi</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Jane" data-position="left" data-filter-item data-filter-name="Jane">
                                <div class="user-image">
                                    <img src="./assets/images/avatar/1.jpg" class="avatar" alt="Jane" />
                                </div>
                                <span class="user-name">Jane</span>
                                <span class="user-show"></span>
                            </li>
                        </ul>
                        <div class="chat-user-search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" data-search />
                            </div>
                        </div>
                    </div>
                    <!-- END USERS -->
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END chat -->
    </div>
    <!-- END chat Sidebar-->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="main-content">
                   
                    <widget></widget>

                    <!-- /# row -->
                    {{-- <div class="row">
     
                    </div> --}}
                    <!-- /# row -->
                
                    <div class="row">
                   
                        
                       <transition name="fade">
                <router-view></router-view>
               
            </transition>


         </div>
         <!-- /# row -->
     </div>
     <!-- /# main content -->
 </div>
 <!-- /# container-fluid -->
</div>
<!-- /# main -->
</div>
<!-- /# content wrap -->
</div>

<script src="{{ asset('./js/app.js') }}"></script>


{{--  <script src="././assets/js/lib/jquery.min.js"></script>  --}}
<!-- jquery vendor -->
<script src="././assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="././assets/js/lib/sidebar.js"></script>
<!-- sidebar -->
<script src="././assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="././assets/js/lib/mmc-common.js"></script>
<script src="././assets/js/lib/mmc-chat.js"></script>
<!--  Chart js -->
<script src="././assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="././assets/js/lib/chart-js/chartjs-init.js"></script>
<!-- // Chart js -->
<!--  Datamap -->
<script src="././assets/js/lib/datamap/d3.min.js"></script>
<script src="././assets/js/lib/datamap/topojson.js"></script>
<script src="././assets/js/lib/datamap/datamaps.world.min.js"></script>
<script src="././assets/js/lib/datamap/datamap-init.js"></script>
<script src="././assets/lib/lobipanel/js/lobipanel.js"></script>
<script src="././assets/js/datatables.min.js"></script>
<script src="././assets/js/datatables-select.min.js"></script>
<!-- // Datamap -->
<script src="././assets/js/scripts.js"></script>
<!-- scripit init-->
<script>
    $(document).ready(function() {
        $('#lobipanel-custom-control').lobiPanel({
            reload: false,
            close: false,
            editTitle: false
        });
    });
</script>
</body>

</html>