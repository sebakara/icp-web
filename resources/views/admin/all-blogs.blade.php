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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .blog {
      padding: 60px 0;
    }

    .section-title h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #333;
    }

    .section-title p {
      font-size: 1.1rem;
      color: #666;
    }

    .blog-item {
      border: none;
      margin: 10px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .blog-item img {
      width: 100%;
      height: 200px;
      /* Set a fixed height */
      object-fit: cover;
      /* Ensures the image covers the container without distortion */
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .blog-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      /* Two cards per row */
      gap: 20px;
      /* Space between the cards */
      margin: 20px 0;

    }

    .blog-item:hover {
      transform: scale(1.05);
    }
  </style>
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

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>All Blogs</h2>
          <p>These are blogs created and are displayed on your web</p>
        </div>

        <div class="row">
          <div class="blog-container">
            @foreach($blogs as $blog)
            <div class="blog-item">
              <img src="{{ asset($blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
              <div class="card-body">
                <h4 class="card-title">{{ $blog->title }}</h4>
                <!-- View Blog -->
                <a href="{{ route('blogs.showAdmin', ['slug' => $blog->slug]) }}" class="btn btn-primary" style="margin-bottom:1%">
                  <i class="bi bi-eye"></i>
                </a>
                <!-- Use a data attribute to store the blog ID -->
                <a href="javascript:void(0);" data-id="{{ $blog->id }}" class="btn btn-warning edit-blog"><i class="bi bi-pen"></i></a>
                <a href="javascript:void(0);" data-id="{{ $blog->id }}" class="btn btn-danger delete-blog"><i class="bi bi-trash"></i></a>

              </div>
            </div>
            @endforeach
          </div>
        </div> <br>

        <!-- Pagination Links -->
        {{ $blogs->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
      </div>
    </section>


    <!-- Edit Blog Modal -->
    <div class="modal fade" id="editBlogModal" tabindex="-1" aria-labelledby="editBlogModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editBlogModalLabel">Edit Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="create-blog-form" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
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
                <label for="content">Content:</label>
                <br><br>
                <!-- Create the editor container -->
                <div id="editor"></div>
                <textarea name="content" id="content" style="display:none"></textarea>
              </div>
              <br><br>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Update Blog</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>




  </main>

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
  <script src="assets/js/mains.js"></script>

  <script>
    let quill; // Declare Quill variable globally

    // Initialize Quill when the modal is shown
    $('#editBlogModal').on('show.bs.modal', function() {
      if (!quill) {
        quill = new Quill('#editor', {
          theme: 'snow'
        });
      }
      // You might want to clear the content here if desired:
      // quill.setText(''); // Optional: Uncomment if you want to clear it each time
    });

    // Your existing JavaScript for fetching and populating the form
    document.querySelectorAll('.edit-blog').forEach(btn => {
      btn.addEventListener('click', function() {
        const id = this.getAttribute('data-id');

        fetch(`http://127.0.0.1:8000/blogs/${id}/edit`)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }

            const contentType = response.headers.get('content-type');
            if (contentType && contentType.includes('application/json')) {
              return response.json();
            } else {
              throw new Error('Response is not JSON');
            }
          })
          .then(data => {


            document.querySelector('#title').value = data.title;

            // Check the content type
            console.log("Content before setting in Quill:", data.content); // Log content

            // Open the modal
            $('#editBlogModal').modal('show');

            // Set the content of the Quill editor directly after opening the modal
            if (quill) {
              quill.root.innerHTML = data.content; // Set HTML content directly
            }

            // Set the form action to update the blog
            document.querySelector('#create-blog-form').action = `/blogs/${id}`;
          })
          .catch(error => {
            console.error('Error fetching the blog:', error);
            alert('There was an error fetching the blog. Please try again later.');
          });
      });
    });

    // Handle form submission to set the hidden textarea value
    document.querySelector('#create-blog-form').addEventListener('submit', function() {
      const content = quill.root.innerHTML; // Get the HTML content from the Quill editor
      document.querySelector('#content').value = content; // Set it to the hidden textarea
    });

    document.querySelectorAll('.delete-blog').forEach(btn => {
      btn.addEventListener('click', function() {
        const id = this.getAttribute('data-id');

        // Confirm deletion
        if (confirm('Are you sure you want to delete this blog? This action cannot be undone.')) {
          const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
          const csrfToken = csrfTokenElement ? csrfTokenElement.getAttribute('content') : '';

          fetch(`http://127.0.0.1:8000/blogs/${id}`, {
              method: 'DELETE',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
              }
            })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.json();
            })
            .then(data => {
              // Refresh the page after successful deletion
              location.reload(); // This will reload the current page
            })
            .catch(error => {
              console.error('Error deleting blog:', error);
              alert('There was an error deleting the blog. Please try again later.');
            });
        }
      });
    });
  </script>



</body>

</html>