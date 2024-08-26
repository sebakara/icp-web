<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Modal - ICP RWANDA </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ route('showAllBlog') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
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
        <a href="{{ route('showCerticateCreateForm') }}">
          <i class="bi bi-circle"></i><span>Generate Certificate</span>
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
        <a href="{{ route('showAllStaff') }}">
          <i class="bi bi-circle"></i><span>View All Team members</span>
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
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  
</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ICP ADMIN DASHBOARD</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Modal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="width: 500px;">
            <div class="card-body">
              <h5 class="card-title">What we Do</h5>
              <p>Welcome to ICP Rwanda, a pioneering tech community based in Rwanda, dedicated to empowering individuals and businesses in the dynamic realm of web3 development.</p>

              <!-- Basic Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Edit
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Delete
              </button>
              <!-- <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Basic Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>

          <div class="card" style="width: 500px;">
            <div class="card-body">
              <h5 class="card-title">Our Mission</h5>
              <p>Our mission is to democratize access to web3 technologies, empower individuals with the knowledge and skills needed to thrive in the digital economy, and drive sustainable growth and innovation in Rwanda and beyond. We are committed to providing a supportive and inclusive environment where aspiring and existing web3 developers can learn, collaborate, and succeed.</p>

              <!-- Scrolling Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollingModal">
                Edit
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollingModal">
                Delete              </button>
              <!-- <div class="modal fade" id="scrollingModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Scrolling Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="min-height: 1500px;">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Modal Dialog Scrollable -->
  

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card" style="width: 500px;">
            <div class="card-body">
              <h5 class="card-title">Our Vision</h5>
              <p>Our vision is to position Rwanda as a hub for web3 innovation and entrepreneurship, driving economic growth, social impact, and technological advancement. We envision a future where individuals and businesses harness the full potential of decentralized technologies to create positive change and build a more inclusive and equitable society.</p>

              
              <!-- Large Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Edit
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Delete
              </button>

              <!-- <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Large Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>

          <div class="card" style="width: 500px;">
            <div class="card-body">
              <h5 class="card-title">What we Do</h5>
              
              <ul>
                <li><i class="ri-check-double-line"></i> <b>Education:</b> We offer a range of educational programs, workshops, and resources designed to equip individuals</li>
                <li><i class="ri-check-double-line"></i> <b>Community Building:</b> We foster a vibrant and inclusive community of web3 developers, enthusiasts, and experts through networking events, meetups, and online forums.</li>
                <li><i class="ri-check-double-line"></i> <b>Advocacy and Awareness:</b> We actively promote awareness and adoption of web3 technologies through advocacy campaigns, outreach initiatives, and partnerships with industry stakeholders. </li>
              </ul>

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Edit
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Delete
              </button>
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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/mains.js"></script>

</body>

</html>