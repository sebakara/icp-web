<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - ICP RWANDA</title>
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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="assets/img/RW blck letter.png" alt="">
        <!-- <span class="d-none d-lg-block">ICP RWANDA</span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> --><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/icpimage.png" alt="Profile" class="rounded-circle">
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
            <a href="{{ route('showCreateBlogForm') }}">
              <i class="bi bi-circle"></i><span>Create a Blog</span>
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

    <div class="pagetitle">
      <h1>Create Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>

        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div id="alert-area"></div>


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Create a Blog Post</h2>
              <!-- Blog form -->
              <form id="create-blog-form" action="{{ route('storeBlog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Cover image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="image">
                  </div>
                </div>

                <div>
                  <label for="content">Content:</label> <br> <br>
                  <!-- Create the editor container -->
                  <div id="editor"></div>
                  <textarea name="content" id="content" style="display:none"></textarea>
                </div> <br> <br>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Create Blog</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </div>
              </form>



            </div>
          </div>

        </div>

        <div class="col-lg-6">

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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Custom image upload handler with resizing
    function selectLocalImage() {
      const input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
      input.click();

      input.onchange = function() {
        const file = input.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(event) {
            const imgElement = document.createElement('img');
            imgElement.src = event.target.result;

            imgElement.onload = function(e) {
              const canvas = document.createElement('canvas');
              const MAX_WIDTH = 500; // Set the max width for the image
              const scaleSize = MAX_WIDTH / e.target.width;
              canvas.width = MAX_WIDTH;
              canvas.height = e.target.height * scaleSize;

              const ctx = canvas.getContext('2d');
              ctx.drawImage(e.target, 0, 0, canvas.width, canvas.height);

              // Convert the canvas image to base64 format
              const resizedImage = canvas.toDataURL('image/jpeg', 0.7); // Adjust quality if needed

              // Insert the resized image into the Quill editor with styling
              insertToEditor(resizedImage, {
                style: "border: 4px solid #fff; border-radius: 15px; margin: 10px 0; max-width: 100%; height: auto;"
              });
            };
          };
          reader.readAsDataURL(file);
        }
      };
    }

    // Function to insert the resized image into the Quill editor
    function insertToEditor(imageBase64, attributes = {}) {
      const range = quill.getSelection();
      quill.insertEmbed(range.index, 'image', imageBase64);

      // Apply additional styling if provided
      if (attributes.style) {
        const insertedImage = quill.root.querySelector(`img[src="${imageBase64}"]`);
        if (insertedImage) {
          insertedImage.setAttribute('style', attributes.style);
        }
      }
    }


    // Initialize Quill editor
    var quill = new Quill('#editor', {
      theme: 'snow',
      placeholder: 'Write your blog content here...',
      modules: {
        toolbar: {
          container: [
            [{
              'size': []
            }],
            ['bold', 'italic', 'underline'],
            [{
              'align': ''
            }, {
              'align': 'center'
            }],
            [{
              'color': []
            }, {
              'background': []
            }],
            ['blockquote'],
            ['link', 'image'],
          ],
          handlers: {
            'image': selectLocalImage // Custom image handler
          }
          //
        }
      }
    });

    document.getElementById('create-blog-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent form from submitting the traditional way

      // Capture the content from the Quill editor
      document.getElementById('content').value = quill.root.innerHTML;

      // Collect form data
      let formData = new FormData(this);

      // Send the data to the server using fetch
      fetch('/store/blog', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: formData
        })
        .then(response => {
          if (!response.ok) {
            return response.json().then(err => {
              // Throw an error containing the error details
              throw new Error(err.error || 'Something went wrong');
            });
          }
          return response.json();
        })
        .then(data => {
          // Create and display the success alert
          const alertContainer = document.createElement('div');
          alertContainer.className = 'alert alert-success bg-success text-light border-0 alert-dismissible fade show';
          alertContainer.role = 'alert';
          alertContainer.innerHTML = `
          ${data.success}
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      `;

          // Append the alert to a specific element (e.g., a div with id 'alert-area')
          document.getElementById('alert-area').appendChild(alertContainer);

          // Clear the Quill editor and form fields
          quill.setText(''); // Clear the Quill editor
          document.getElementById('create-blog-form').reset(); // Reset form fields

          // Optional: Automatically remove the alert after a few seconds
          setTimeout(() => {
            alertContainer.classList.remove('show');
            alertContainer.classList.add('fade');
            setTimeout(() => alertContainer.remove(), 150); // Remove from DOM after fade
          }, 5000); // Adjust time as needed
        })
        .catch(error => {
          console.error('Error:', error.message);
          alert('Error creating blog post: ' + error.message);
        });
    });
  </script>

</body>

</html>