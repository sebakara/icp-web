<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - ICP RWANDA </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/RW blck letter.png')}}" alt="">
                <!-- <span class="d-none d-lg-block">ICP RWANDA</span> -->
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{asset('assets/img/icpimage.png')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Icp User</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>ICP USER</h6>
                            <span>ADMIN</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('showUserProfilePage') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('showUserProfilePage') }}">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/signout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Modify Web</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('showCreateForm') }}">
                            <i class="bi bi-circle"></i><span>Create ICP Service</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showStaffCreateForm') }}">
                            <i class="bi bi-circle"></i><span>Add Staff Member</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showGalleryCreateForm') }}">
                            <i class="bi bi-circle"></i><span>Add Image to Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showCreateBlogForm') }}">
                            <i class="bi bi-circle"></i><span>Create a Blog</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showCreateStudentForm') }}">
                            <i class="bi bi-circle"></i><span>Add New Student</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showCerticateCreateForm') }}">
                            <i class="bi bi-circle"></i><span>Generate Special Certificate</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showCreateCourseForm') }}">
                            <i class="bi bi-circle"></i><span>Add New Course</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>View Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('showMessageForm') }}">
                            <i class="bi bi-circle"></i><span>User's Messages</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showAllServices') }}">
                            <i class="bi bi-circle"></i><span>View All Services</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('students.all') }}">
                            <i class="bi bi-circle"></i><span>View All Students</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showStudentAndCertificates') }}">
                            <i class="bi bi-circle"></i><span>Courses and Students</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showAllStaff') }}">
                            <i class="bi bi-circle"></i><span>View All Team members</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showAllBlog') }}">
                            <i class="bi bi-circle"></i><span>View All Blogs</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('courses.ShowAll') }}">
                            <i class="bi bi-circle"></i><span>View All Courses</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('ShowAllGallery') }}">
                            <i class="bi bi-circle"></i><span>Gallery</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('showUserProfilePage') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <section>
            <div style="padding: 10%; margin-left: 10%; background-color: white; text-align: justify">
                {!! $blog->content !!} <!-- Render the full blog content with all formatting -->
            </div>

        </section>

    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/mains.js') }}"></script>

</body>

</html>