<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        @stack('title')

        <!-- Meta -->
        <meta name="keywords" content="adventure pvt. iti : Best iti college in Nawada,iti in Bihar,iti institute in Nawada,iti course in Nawada, iti electrician in Nawada,iti fitter in Nawada,ncvt iti college in Nawada,ncvt iti college in Hansdiha, electrician trade in Nawada,fitter trade in Nawada" /><meta name="description" content="adventure pvt. ITI का उद्देश्य अपने छात्रों में बौद्धिक, सामाजिक और मजबूत नेतृत्व क्षमता विकसित करना है। हम अपने छात्रों को नए नए Skills सीखने के लिए प्रेरित करता है।" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="dexignlabs" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="images/favicon.png"
        />

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="{{asset('admin/vendor/jqvmap/css/jqvmap.min.css')}} " />
        <link rel="stylesheet" href="{{asset('admin/vendor/chartist/css/chartist.min.css')}} " />
        <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}} "/>
        <link  rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
    </head>
    <body>
        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->

        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                    <h2>Adventure ITI</h2>
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span
                        ><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->
            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div
                            class="collapse navbar-collapse justify-content-between"
                        >
                            <div class="header-left">
                                
                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown header-profile">
                                    <a
                                        class="nav-link"
                                        href="javascript:void(0);"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                    >
                                        <img
                                            src="{{asset('admin/images/profile/education/pic1.jpg')}} "
                                            width="20"
                                            alt=""
                                        />
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right"
                                    >
                                        <button
                                            type="button"
                                            class="dropdown-item ai-icon"
                                            class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#changePassword"
                                        >
                                            <svg
                                                id="icon-user1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="18"
                                                height="18"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-user"
                                            >
                                                <path
                                                    d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                                                ></path>
                                                <circle
                                                    cx="12"
                                                    cy="7"
                                                    r="4"
                                                ></circle>
                                            </svg>
                                            <span class="ms-2">Change Password </span>
                                        </button>
                                        
                                        <a
                                            href="{{route('admin.logout')}}"
                                            class="dropdown-item ai-icon"
                                        >
                                            <svg
                                                id="icon-logout"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="18"
                                                height="18"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-log-out"
                                            >
                                                <path
                                                    d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"
                                                ></path>
                                                <polyline
                                                    points="16 17 21 12 16 7"
                                                ></polyline>
                                                <line
                                                    x1="21"
                                                    y1="12"
                                                    x2="9"
                                                    y2="12"
                                                ></line>
                                            </svg>
                                            <span class="ms-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="dlabnav">
                <div class="dlabnav-scroll">
                    <ul class="metismenu" id="menu">
                        
                        <li>
                            <a class="ai-icon" href="{{route('admin.index')}}" aria-expanded="false" >
                                <i class="la la-calendar"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="ai-icon" href="{{route('admin.addGallery')}}" aria-expanded="false" >
                                <i class="la la-calendar"></i>
                                <span class="nav-text">Add Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a class="ai-icon" href="{{route('admin.galleryList')}}" aria-expanded="false" >
                                <i class="la la-calendar"></i>
                                <span class="nav-text">List Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a class="ai-icon" href="{{route('admin.addNotice')}}" aria-expanded="false" >
                                <i class="la la-calendar"></i>
                                <span class="nav-text">Add Notice</span>
                            </a>
                        </li>
                        <li>
                            <a class="ai-icon" href="{{route('admin.noticeList')}}" aria-expanded="false" >
                                <i class="la la-calendar"></i>
                                <span class="nav-text">List Notice</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a
                                class="has-arrow"
                                href="javascript:void(0);"
                                aria-expanded="false"
                            >
                                <i class="la la-user"></i>
                                <span class="nav-text">Professors</span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="all-professors.html"
                                        >All Professor</a
                                    >
                                </li>
                                <li>
                                    <a href="add-professor.html"
                                        >Add Professor</a
                                    >
                                </li>
                                <li>
                                    <a href="edit-professor.html"
                                        >Edit Professor</a
                                    >
                                </li>
                                <li>
                                    <a href="professor-profile.html"
                                        >Professor Profile</a
                                    >
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!--**********************************
            Sidebar end
        ***********************************-->
