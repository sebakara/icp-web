<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / General - ICP RWANDA</title>
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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/RW blck letter.png') }}" alt="">
                <!-- <span class="d-none d-lg-block">ICP RWANDA</span> -->
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/icpimage.png') }}" alt="Profile" class="rounded-circle">
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

                        <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

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
                        <a href="{{ route('showCreateCourseForm') }}">
                            <i class="bi bi-circle"></i><span>Add New Course</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('showCreateBlogForm') }}">
                            <i class="bi bi-circle"></i><span>Create a Blog</span>
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
                        <a href="{{ route('showAllCertificates') }}">
                            <i class="bi bi-circle"></i><span>View All Certificates</span>
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

        <!-- Spinner Button (Hidden by Default) -->
        <button id="spinner" style="display: none; margin-left: 40%; background-color: green" class="btn btn-secondary" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Generating Certificate....
        </button>



        <div class="pagetitle">
            <h1>Courses and Students</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>

                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Select Course</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="courseDropdown" onchange="loadStudents()">
                    <option selected="">Select a Course to view the Attendies</option>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 1200px;">
                        <div class="card-body" id="student-list">

                            <h5 class="card-title" style="font-size: 1.5em; font-weight: bold;">All Students Attended <span id="courseName" style="font-size: 1em; font-weight: bold;">[Select Course to View List]</span></h5>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Biography</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="studentTable">
                                    <!-- Students will be populated here using JavaScript -->

                                </tbody>

                            </table>

                            <div id="pagination"></div>
                        </div>
                        <!-- Spinner (Hidden by Default) -->
                        <div id="spinner1" class="spinner-border" style="width: 20px; height: 20px; display: none; margin-left:40%" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>ICP RWANDA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

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

    <script>
        window.generateCompletionCertificate = function(studentId, studentName, studentProgram, studentEmail) {
            const spinnerButton = document.getElementById('spinner');

            // Display the spinner while the request is being processed
            spinnerButton.style.display = 'inline-block';

            // Prepare the data for certificate generation and email
            const data = {
                id: studentId,
                name: studentName,
                program: studentProgram,
                email: studentEmail, // Add email field
                date: new Date().toISOString().split('T')[0], // Today's date in YYYY-MM-DD format

            };

            // Send a POST request to generate the certificate and send an email
            fetch(`/certificates/create`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(errData => {
                            console.error('Server error:', errData);
                            throw new Error('Failed to generate certificate');
                        });
                    }
                    return response.blob(); // Get the certificate PDF as a blob
                })
                .then(blob => {
                    // Create a URL for the PDF blob and open it in a new tab
                    const url = window.URL.createObjectURL(blob);
                    window.open(url);

                    // Optionally, show a success message for the email sending
                    alert(`The certificate has been generated and sent to ${studentEmail}`);
                })
                .catch(error => console.error('Error generating certificate:', error))
                .finally(() => {
                    // Hide the spinner after the request is complete
                    spinnerButton.style.display = 'none';
                });
        }


        function loadStudents(page = 1) {
            var courseId = document.getElementById('courseDropdown').value;
            var courseName = courseDropdown.options[courseDropdown.selectedIndex].text;

            if (courseId) {
                // Set the course name in the title
                document.getElementById('courseName').textContent = courseName;

                // Show the spinner while loading
                document.getElementById('spinner1').style.display = 'block';

                // Make an AJAX request to fetch students for the selected course
                fetch(`/courses/${courseId}/students?page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        displayStudents(data.students, courseName);
                        createPagination(data.pagination);
                    })
                    .catch(error => console.error('Error fetching students:', error))
                    .finally(() => {
                        // Hide the spinner
                        document.getElementById('spinner1').style.display = 'none';
                    });
            } else {
                document.getElementById('studentTable').innerHTML = ''; // Clear the table if no course is selected
            }
        }

        function displayStudents(students, courseName) {
            let tableBody = '';

            students.forEach(student => {
                tableBody += `
            <tr>
                <td>${student.full_name}</td>
                <td>${student.email}</td>
                <td>${student.biography_description}</td>
                <td>
                   <button class="btn btn-success btn-sm" onclick="generateCompletionCertificate(${student.id}, '${student.full_name}', '${courseName}', '${student.email}')"><i class="bi bi-arrow-down-circle"></i></button>
                </td>
            </tr>
        `;
            });

            document.getElementById('studentTable').innerHTML = tableBody;
        }

        function createPagination(pagination) {
            const paginationDiv = document.getElementById('pagination');
            paginationDiv.innerHTML = ''; // Clear the pagination

            let paginationHTML = '';

            // Previous Page Link
            if (pagination.current_page > 1) {
                paginationHTML += `<button class="btn btn-light" onclick="loadStudents(${pagination.current_page - 1})">Previous</button>`;
            }

            // Page Numbers
            for (let page = 1; page <= pagination.last_page; page++) {
                paginationHTML += `<button class="btn btn-success" onclick="loadStudents(${page})" ${page === pagination.current_page ? 'disabled' : ''}>${page}</button>`;
            }

            // Next Page Link
            if (pagination.current_page < pagination.last_page) {
                paginationHTML += `<button class="btn btn-light" onclick="loadStudents(${pagination.current_page + 1})">Next</button>`;
            }

            paginationDiv.innerHTML = paginationHTML;
        }
    </script>

    <!-- <button class="btn btn-info btn-sm"  onclick="editStudent(${student.id})"><i class="bi bi-pen"></i></button> 
<button class="btn btn-danger btn-sm"   onclick="deleteStudent(${student.id})"><i class="bi bi-trash"></i></button> 
<button class="btn btn-success btn-sm"   onclick="generateCertificate(${student.id}, '${student.full_name}', '${courses}')"><i class="bi bi-arrow-down-circle"></i></button> -->

</body>

</html>