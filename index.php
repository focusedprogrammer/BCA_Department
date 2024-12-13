<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPGC BCA DEPARTMENT</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   <link rel="stylesheet" href="style3.css">
    <style>
     .testimonials {
      padding-top: 20px;
      background: url("niceadmin/assets/college-pics/alfawithsir.jpg") no-repeat;
      background-position: center center;
      background-size: cover;
      position: relative;
    }

    .testimonials::before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background: rgba(12, 11, 10, 0.7);
    }

    .testimonials .section-header {
      margin-bottom: 40px;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      text-align: center;
      color: #fff;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 100px;
      border-radius: 50%;
      border: 6px solid rgba(255, 255, 255, 0.15);
      margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0 5px 0;
      color: #fff;
      font-family: "Poppins", sans-serif;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      color: #ddd;
      margin: 0 0 15px 0;
      font-family: "Comic Neue", sans-serif;
    }

    .testimonials .testimonial-item .stars {
      color: #ffb03b;
      margin-bottom: 10px;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
      color: rgba(255, 255, 255, 0.4);
      font-size: 26px;
    }

    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 auto 15px auto;
      color: #eee;
    }

    .testimonials .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: rgba(255, 255, 255, 0.5);
      opacity: 1;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #ffb03b;
    }

    @media (min-width: 992px) {
      .testimonials .testimonial-item p {
        width: 80%;
      }
    }
    </style>
</head>
<body>
    <?php
    include "header.php";
    ?>
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="niceadmin/assets/college-pics/alfa2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="niceadmin/assets/college-pics/alfa.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="niceadmin/assets/college-pics/alfawithsir.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="niceadmin/assets/college-pics/withjunior.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        <!-- this is card -->

        <div class="main">
        <div class="heading">
            <h1>Department Teacher's</h1>
        </div>
      
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/dineshsir.jpg" class="img card-img-top" alt="Deepak Singh">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Dinesh Kumar</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/deepaksir.jpg" class="img card-img-top" alt="Shiv Yadav">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Deepak Singh</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/shivsir.jpg" class="img card-img-top" alt="Vaibhav Mishra">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Shiv Yadav</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/vaibhavsir.jpg" class="img card-img-top" alt="New Teacher">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Vaibhav Mishra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<!-- end card -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="niceadmin/assets/college-pics/ashish.jpg" class="testimonial-img" alt="">
                <h3>Ashish Maurya</h3>
                <h4>Programmer &amp; Devloper</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="niceadmin/assets/college-pics/deepaksir.jpg" class="testimonial-img" alt="">
                <h3>Deepak Singh</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="niceadmin/assets/college-pics/shivsir.jpg" class="testimonial-img" alt="">
                <h3>Shiv Yadav</h3>
                <h4>Teacher</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="niceadmin/assets/college-pics/vaibhavsir.jpg" class="testimonial-img" alt="">
                <h3>Vaibhav Mishra</h3>
                <h4>Teacher</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="niceadmin/assets/college-pics/dineshsir.jpg" class="testimonial-img" alt="">
                <h3>Dinesh Kumar</h3>
                <h4>H.O.D.</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var swiper = new Swiper('.testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        loop: true,  // Optional: to enable infinite loop
        autoplay: {
          delay: 5000,  // Optional: adjust delay as needed
        },
      });
    });
  </script>
    
</body>
</html>