<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Roboto:wght@100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="container-fluid p-0">
    <header>
      <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/img/lumin_prev_ui.png" alt="logo" style="width: 70px; height: auto" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars navbar-icon"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item text-white">
                <a class="nav-link text-center text-md-left text-white" href="#about-me">About Me</a>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link text-center text-md-left text-white" href="#">Portfolio</a>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link text-center text-md-left text-white" href="#tutorial">tutorial</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="banner" class="h-75">
        <div class="banner-container h-100 d-flex justify-content-center align-items-center">
          <div class="banner-content text-center">
            <h1 class="font-weight-bolder text-white p-5 animate__animated animate__fadeIn">
              Hi I'm <span class="text-danger">Sajid</span>
              <p id="animatedText">I'm your favourate Developer</p>
            </h1>
            <button class="btn btn-primary me-3" onclick="location.href='#tutorial'">
              <i class="fab fa-facebook me-2"></i>Facebook
            </button>

            <button class="btn btn-primary" onclick="window.open('https://www.youtube.com/@BimboCartoon-01')">
              <i class="fab fa-linkedin me-2"></i>linked in
            </button>
          </div>
        </div>
      </section>
    </header>

    <main>
      <section id="features" class="text-center py-5">
        <div class="row">
          <!-- Feature Box -->
          <div class="col-md-3 d-block d-lg-flex">
            <div class="features-col">
              <i class="fas fa-hand-holding-usd fa-3x icon-style rounded-circle"></i>
              <h5 class="font-weight-bolder">Cost efefective</h5>
              <p class="small" id="animatedText">
                Highly cost-effective, offering great performance and essential features while staying within budget for maximum value
              </p>
            </div>
          </div>

          <div class="col-md-3 d-block d-lg-flex">
            <div class="features-col">
              <i class="fas fa-rocket fa-3x icon-style rounded-circle"></i>
              <h5 class="font-weight-bolder">Fast and Smooth</h5>
              <p class="small">
               My work is fast, smooth, and efficient—ensuring quick delivery, seamless performance, and a professional experience every time.

              </p>
            </div>
          </div>

          <div class="col-md-3 d-block d-lg-flex">
            <div class="features-col">
              <i class="fas fa-mobile-alt fa-3x icon-style rounded-circle"></i>
              <h5 class="font-weight-bolder">Mobile Friendly</h5>
              <p class="small">
                Looks great on all screen sizes – desktop, tablet, and mobile.
              </p>
            </div>
          </div>

          <div class="col-md-3 d-block d-lg-flex">
            <div class="features-col">
              <i class="fas fa-cogs fa-3x icon-style rounded-circle"></i>
              <h5 class="font-weight-bolder">Easy Customization</h5>
              <p class="small">
                Easily edit content and styling to suit your personal needs.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat, vitae?
              </p>
            </div>
          </div>
        </div>
      </section>


      <!-- about me section start  -->


      <section id="about-me" class="container text-center text-lg-left">
        <div class="section-title text-center text-lg-left">
          <h1 class="text-center">about me</h1>
          <hr class="hr-style mx-auto" style="border-color: black" />
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="basic-desc">
              <i class="icon-style rounded-circle far fa-user fa-3x"></i>
              <h5 class="font-weight-bolder">personal info</h5>
              <p class="pi">Md Sajid Foysal</p>
              <p>profession: <span class="fw-bold text-primary">Laravel Full Stack</span> <br>
              <span>Location: [Dhaka, Bangladesh] <br></span>
              <span>0.5 year experience</span>
            </p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7"></div>
          <div class="col-lg-5" id="sp">
            <i class="icon-style rounded-circle far fa-user fa-3x"></i>
            <p>Description section</p>
            <p><span>It is me your </span> favuriate webdesigner</p>
            <p>you can <span>marry me</span> <div id="animatedText">whenever you want</div></p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="skill-desc">
            <i class="icon-style rounded-circle fas fa-briefcase fa-3x"></i>
            <h5 class="font-weight-bolder">Skills</h5>

            <table class="table table-bordered mx-auto">
              <!-- TABLE CENTER BOOTSTRAP CLASS-->
              <tr>
                <td>Html</td>
                <td>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td>CSS</td>
                <td>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td>JavaScript</td>
                <td>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td>PHP</td>
                <td>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </span>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7"></div>
          <div class="col-lg-5" id="sp">
            <i class="icon-style rounded-circle fa-solid fa-bell fa-3x"></i>
            <p>Description section</p>
            <p>If you nead any Help<span> Contact me ! <br> </span>
          <span>I hardly get any time, so don't think I'm rude</span>
        </p>
            
          </div>
        </div>
      </section>
      <section id="tutorial">
        <div class="section-title">
          <h3 class="text-center">Visit</h3>
          <hr class="hr-style mx-auto" style="border-color: black" />
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/giftzonebodlogo.png" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our E-comarce Site</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/nutsit.png" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our iT-fram</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/whiteai.jpg" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our ai company</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/as.png" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">2nd hand site</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/bookandtea.jpg" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our tea caffe</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/selfedu .jpg">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our education platform</h3>
                <a href="#" class="streched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/julypc.png" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">Our hardware site</h3>
                <a href="#" class="stretched-link"></a>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-5 m-lg-0">
              <img class="card-img-top" src="img/ein2.jpg" alt="">
              <div class="card-body">
                <h3 class="text-center card-title font-weight-bolder">I am atomic</h3>
                <a href="#" class="stretched-link"></a>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- slider section start -->
      <!-- feedback start/ overview-->
      <section id="feedback">
        <div class="section-title">
          <h3 class="text-center">OverView</h3>
          <hr class="hr-style mx-auto" style="border-color: black" />
        </div>

        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <p> 1.Hi I'm Sajid Foysal</p>
                <img class="rounded-circle feedback-img" src="/img/sajid.png" alt="">
                <h6>Sajid Foysal</h6>
              </div>

              <div class="carousel-item">
                <p>My motto is: the bigger, the better.</p>
                <img class="rounded-circle feedback-img" src="/img/sajidlogo.png" alt="">
                <h6>logo</h6>
              </div>

              <div class="carousel-item">
                <p>I like to play games </p>
                <img class="rounded-circle feedback-img" src="/img/lumin_prev_ui.png" alt="">
                <h6>Play genshin imapct</h6>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>

      <!-- contack me starts here -->
      <section id="contact">
  <div class="section-title">
    <h3 class="text-center">Contact Me</h3>
    <hr class="hr-style mx-auto" style="border-color: black" />
  </div>

  <div class="row">
    <div class="col-lg-12">
      <!-- ✅ enctype ঠিক করে দেওয়া হয়েছে -->
      <form action="mail.php" method="post" class="was-validated">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <!-- ✅ id ও name ঠিক করা হয়েছে -->
          <input type="text" class="form-control" id="fullname" name="fullname" required>
          <div class="valid-feedback">Valid</div>
          <div class="invalid-feedback">Please enter your full name before submitting.</div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <!-- ✅ id ও name ঠিক করা হয়েছে -->
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="valid-feedback">Valid</div>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <!-- ✅ id ও name ঠিক করা হয়েছে -->
          <textarea style="resize: none;" id="message" name="message" class="form-control" cols="30" rows="10" required></textarea>
          <div class="valid-feedback">Valid</div>
          <div class="invalid-feedback">Please write a message.</div>
        </div>

        <div class="form-group text-center">
          <input type="submit" class="btn btn-primary mr-3" value="Submit">
          <input type="reset" class="btn btn-secondary" value="Reset">
        </div>
      </form>
    </div>
  </div>
</section>



      <!-- contack me end here here -->

    </main>

    <footer class="text-center py-4">
      <div class="row text-white">
        <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
          <p class="amall mb-0 mt-1 ">&copy;Md. Sajid Foysal</p>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <a href="#">Home</a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </footer>
  </div>

  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/script.js"></script>
  <script>
        const animatedText = document.getElementById('animatedText');
        let colorIndex = 0;

        function changeColor() {
            const colors = ['red', 'green', 'blue', 'orange']; // Add more colors as needed
            animatedText.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
        }

        // Change text color every 1000 milliseconds (1 second)
        setInterval(changeColor, 10000);
    </script>
</body>

</html>