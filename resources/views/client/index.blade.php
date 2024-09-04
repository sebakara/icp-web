@include('includes.header')
<!-- icprwanda.com -->
<!-- blockchainvibes.org -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <!-- <h1>Better Solutions For Your Business</h1> -->
        <h2>ICP Rwanda is dedicated to raising awareness, providing education, and fostering evangelism among aspiring and existing web3 developers.</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
          <a href="https://www.youtube.com/watch?v=DYVPq_vMB8w&t=184s&ab_channel=DFINITY" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/icpimage.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Cliens Section ======= -->
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Welcome to ICP Rwanda, a pioneering tech community based in Rwanda, dedicated to empowering individuals and businesses in the dynamic realm of web3 development.
          </p>
          <h3>What we Do</h3>
          <ul>
            <li><i class="ri-check-double-line"></i> <b>Education:</b> We offer a range of educational programs, workshops, and resources designed to equip individuals</li>
            <li><i class="ri-check-double-line"></i> <b>Community Building:</b> We foster a vibrant and inclusive community of web3 developers, enthusiasts, and experts through networking events, meetups, and online forums.</li>
            <li><i class="ri-check-double-line"></i> <b>Advocacy and Awareness:</b> We actively promote awareness and adoption of web3 technologies through advocacy campaigns, outreach initiatives, and partnerships with industry stakeholders. </li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>Our Mission</h3>
          <p>
            Our mission is to democratize access to web3 technologies, empower individuals with the
            knowledge and skills needed to thrive in the digital economy, and drive sustainable growth and innovation in Rwanda and beyond.
            We are committed to providing a supportive and inclusive environment where aspiring and existing web3 developers can learn,
            collaborate, and succeed.
          </p>

          <h3>Our Vision</h3>
          <p>
            Our vision is to position Rwanda as a hub for web3 innovation and entrepreneurship, driving economic growth,
            social impact, and technological advancement. We envision a future where individuals and businesses harness the
            full potential of decentralized technologies to create positive change and build a more inclusive and equitable society.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Blog Section ======-->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Latest Blogs</h2>
        <p>Stay updated with the latest news, insights, and updates from our team.</p>
      </div>

      <div class="row">
        @foreach($blogs as $blog)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" style="margin-top: 2%;">
          <div class="blog-item">
            
              <img src="{{ asset($blog->image) }}" class="img-fluid" alt="{{ $blog->title }}" style="width: 150px; height:auto;">
            
            <div class="card-body">
              <h4 class="card-title">{{ $blog->title }}</h4>

              <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
              <a href="{{ route('blogs.show',  ['id' => $blog->id]) }}" class="btn btn-primary" style="margin-bottom:1%">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Blog Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Welcome to our tech space in Rwanda, a vibrant community dedicated to empowering aspiring and existing web3 developers! At our spoke, we provide a range of services aimed at raising awareness, offering education, and fostering evangelism in the exciting world of web3 development. Here's a glimpse of what we offer:</p>
      </div>

      <div class="row">
        @foreach($services as $service)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box" style="margin-top: 10%;">
            <div class="icon"> <img src="{{ asset($service->Icon) }}" alt="Service Icon" style="width: 60px; height: 50px; border-radius: 20%; object-fit: cover;"></div>
            <h4><a href="">{{ $service->Service_title }}</a></h4>
            <p>{{ $service->Service_description }}</p>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->



  <!-- Gallery section -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Step into the world of innovation and creativity at the ICP Rwanda Gallery</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        @foreach($categories as $category)
        <li data-filter=".filter-{{ Str::slug($category->name) }}">{{ $category->name }}</li>
        @endforeach
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($featuredImages as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ Str::slug($item->Image_category) }}">
          <div class="portfolio-wrap">
            <img src="{{ asset($item->Image) }}" class="img-fluid" alt="" data-toggle="modal" data-target="#modal-{{ Str::slug($item->Image_category) }}">
            <div class="portfolio-info">
              <h4>{{ $item->Image_category }}</h4>
              <div class="portfolio-links">
                <a href="#" data-toggle="modal" data-target="#modal-{{ Str::slug($item->Image_category) }}" title="View All Images"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Modal for each category -->
      @foreach($categories as $category)
      <div class="modal fade" id="modal-{{ Str::slug($category->name) }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ Str::slug($category->name) }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel-{{ Str::slug($category->name) }}">{{ $category->name }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <!-- Fetch and display all images for the selected category -->
                @foreach($pictures->where('Image_category', $category->name) as $image)
                <div class="col-md-4">
                  <a href="{{ asset($image->Image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $image->Image_category }}">
                    <img src="{{ asset($image->Image) }}" class="img-fluid" alt="">
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>



  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Get to know the individuals driving our success</p>
      </div>

      <div class="row">
        @foreach($staffs as $member)
        <div class="col-lg-4" style="margin-top: 1%;">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{ asset($member->Profile_image) }}" class="img-fluid" style="width: 50px; height: auto; " alt=""></div>
            <div class="member-info">
              <h4>{{ $member->Full_name }}</h4>
              <span>{{ $member->Position }}</span>
              <p>{{ $member->Biography_description }}</p>
              <div class="social">
                @if($member->twitter)
                <a href="{{ $member->twitter }}" target="_blank" rel="noopener noreferrer">
                  <i class="ri-twitter-fill"></i>
                </a>
                @endif

                @if($member->facebook)
                <a href="{{ $member->facebook }}" target="_blank" rel="noopener noreferrer">
                  <i class="ri-facebook-fill"></i>
                </a>
                @endif

                @if($member->instagram)
                <a href="{{ $member->instagram }}" target="_blank" rel="noopener noreferrer">
                  <i class="ri-instagram-fill"></i>
                </a>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Reach Us through.</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Kigali - Rwanda</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>rwandicp@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+250 786 091 893</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.0592404916215!2d30.063184314262157!3d-1.9494075370760585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19f50befe0e806a1%3A0x56a5cf7c9e6a53e0!2sCareer%20Center!5e0!3m2!1sen!2srw!4v1647896123659" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <!-- @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif -->
          <form action="/customer-support" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="Full_name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="Email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="Subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="Message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              @if(session('success'))
              <div class="sent-message">{{ session('success') }}</div>
              @endif
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


@include('includes.footer')