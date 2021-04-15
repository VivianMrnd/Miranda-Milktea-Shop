<?php
  require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo1.png">

    <!-- for icon -->
    <link href="vendor/css/all.css" rel="stylesheet">
    <!-- for icon -->

    <title>Miranda Milktea Shop</title>

  </head>
  <body>
    
    <header id="home">

            <div class="container-flui navs">
                <!-- navigation -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                    <div class="container">
                    <a class="navbar-brand" href="#home"><p><img src="images/logo1.png" alt="logo"><b> My Milktea Shop</b></p></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav text-white">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            <a class="nav-link" href="#gallery">Gallery</a>
                            <a class="nav-link" href="#aboutus">About Us</a>
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </div>
                    </div>
                    </div>
                </nav>
            <!-- navigation -->
            </div>

            <div class="container">
                <div class="py-5 text-info">
                    <h2 class="pb-2 border-bottom main-text">Pick your best flavor!</h2>
                    <a href="#gallery">
                    <div class="row g-5 py-5">
                        <div class="col-md-4 d-flex align-items-start">
                            <div class="card card-category">
                               <img src="images/hot.png" class="card-img" alt="hot" height="200px">
                                <div class="card-img-overlay">
                                    <h6 class="card-title category">Hot drinks</h6>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 d-flex align-items-start">
                            <div class="card card-category">
                                <img src="images/cold.png" class="card-img" alt="cold" height="200px">
                                <div class="card-img-overlay">
                                    <h6 class="card-title category">Cold drinks</h6>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 d-flex align-items-start">
                            <div class="card card-category">
                                <img src="images/addons.jpg" class="card-img" alt="add ons" height="200px">
                                <div class="card-img-overlay">
                                    <h6 class="card-title category">Add-ons</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
    
    </header>

    <section id="gallery">
        <div class="container">
            <h2 class=" border-bottom flavors">Flavors</h2>
            <div class="row">
                <div class="col-md-4 pt-md-5 col-gallery">
                    <div class="card gallery">
                        <img src="images/kokoa.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title title-gallery">With kokoa</h5>
                          <a href="#" class="btn menu-btn">MENU</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-md-5 col-gallery">
                    <div class="card gallery">
                        <img src="images/milktea.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title title-gallery">MilkTea</h5>
                          <a href="#" class="btn menu-btn">MENU</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-md-5 col-gallery">
                    <div class="card gallery">
                        <img src="images/shakes.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title title-gallery">Shakes</h5>
                          <a href="#" class="btn menu-btn">MENU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutus">
        <div class="container">
            <h2 class=" border-bottom aboutus-text">About Us</h2>
            <div class="row">
                <div class="col-md-6 pt-5">
                    <div class="card location-card">
                      <div class="card-body">
                        <h5 class="card-header aboutus-header">Location</h5>
                        <p class="card-text aboutus-body">1319 Malunggay St. Agustin Makati City (Main Branch)</p>
                        <a href="#" class="btn branches">Check other branches</a>
                      </div>
                    </div>
                </div>

                <div class="col-md-6 pt-5">
                    <img src="images/logo.png" alt="logo" height="500px">
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card contact-card">
                      <div class="card-body">
                        <h5 class="card-header aboutus-header">Contacts</h5>
                        <p class="card-text aboutus-body">
                            <b>Email: </b> miranda_MTShop@gmail.com <br>
                            <b>Tel. #: </b> 913-8834 <br>
                            <b>Contact #:</b> 09673867352 <br>
                            <b>Page: </b> facebook.com/mymilkteashop
                        </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <h2 class=" border-bottom Review-text pt-5">Reviews</h2>
            <h5 class="text-info comment-text">COMMENTS</h5>
            <div class="mt-2">
              <div class="row">
                <div class="col-md-6 comments">
                  <?php viewApprove(); ?>
                </div>
                <div class="col-md-6">
                  <form action="" method="GET">
                        <div class="row">
                          <div class="col form-group pb-3 name">
                            <input type="text" name="names" class="form-control" placeholder="Type your name here" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col form-group pb-3">
                            <textarea type="text" name="review" class="form-control" placeholder="Insert your feedback here!" required></textarea>
                          </div>
                        </div>

                        <div>
                            <input class="btn btn-secondary text-dark btn-review" type="submit" name="" value="SUBMIT" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        </div>

                  </form>
                  <?php insertR();?>   
                </div>
              </div>
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md">
              <p class="ft">
                THIS IS FOR EDUCATIONAL PURPOSES ONLY. <br>
                Info ~ Support ~ Marketing &nbsp;&nbsp;&nbsp;
                Terms of Use ~ Privacy Policy
              </p>
            </div>
            <div class="col-md">
              <p class="ft2">
                Copyright My Milktea Shop 2021 &nbsp;&nbsp;&nbsp;
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
              </p>
            </div>
          </div>
        </div>
    </footer>
  
    <div class="rtbutton">
        <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>