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
        <!-- All tab: Display one image per category -->
        @foreach($featuredImages as $image)
        <div class="col-lg-4 col-md-6 portfolio-item filter-active">
          
          <div class="portfolio-wrap">
            <img src="{{ asset($image->Image) }}" class="img-fluid" alt="" data-toggle="modal" data-target="#modal-{{ Str::slug($image->Image_category) }}">
            <div class="portfolio-info">
              <h4>{{ $image->Image_category }}</h4>
            </div>
          </div>
          
        </div>
        @endforeach

        <!-- Other tabs: Display one image per event title -->
        @foreach($categories as $category)
        @foreach($subEvents[$category->name] as $eventTitle => $images)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ Str::slug($category->name) }}">
          <div class="portfolio-wrap">
            <img src="{{ asset($images->first()->Image) }}" class="img-fluid" alt="" data-toggle="modal" data-target="#modal-{{ Str::slug($eventTitle) }}">
            <div class="portfolio-info">
              <h4>{{ $eventTitle }}</h4>
              <div class="portfolio-links">
                <a href="#" data-toggle="modal" data-target="#modal-{{ Str::slug($eventTitle) }}" title="View All Images"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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

      <!-- Modal for each event title -->
      @foreach($categories as $category)
      @foreach($subEvents[$category->name] as $eventTitle => $images)
      <div class="modal fade" id="modal-{{ Str::slug($eventTitle) }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ Str::slug($eventTitle) }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel-{{ Str::slug($eventTitle) }}">{{ $eventTitle }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                @foreach($images as $image)
                <div class="col-md-4">
                  <a href="{{ asset($image->Image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $image->event_title }}">
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
      @endforeach
    </div>
  </section>

</main><!-- End #main -->


@include('includes.footer')