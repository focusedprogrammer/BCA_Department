<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPGC BCA DEPARTMENT</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style3.css">
    <style>

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
                        <img src="niceadmin/assets/college-pics/ashish.jpg" class="card-img-top" alt="Deepak Singh">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Dinesh Kumar</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/deepak sir.jpg" class="card-img-top" alt="Shiv Yadav">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Deepak Singh</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/shivsir.jpg" class="card-img-top" alt="Vaibhav Mishra">
                        <div class="card-body">
                            <h5 class="card-title">Position: </h5>
                            <p class="card-text">Name: Shiv Yadav</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="niceadmin/assets/college-pics/ashish.jpg" class="card-img-top" alt="New Teacher">
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


    <?php  include "footer.php"  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>