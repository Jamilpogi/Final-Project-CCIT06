<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="flowers.php">Flowers</a>
          </li>
          <li class="nav-item">
            <a href="logout.php"><button>Logout</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="banner" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>FLOWER SHOP</h1>
          <p>A flower cannot blossom without sunshine, and man cannot live without love.</p>
          <a href="#about" class="btn btn-brand"> Please Click Here!</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT SECTION -->
  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="download.jpeg" alt="" class="img-about">
        </div>
        <div class="col-lg-6">
          <h2>ABOUT US</h2>
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore.</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </p>
          <a href="#about" class="btn btn-brand"> Please Click Me!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services">
    <div class="container">
      <div class="text-center">
        <h2>SERVICES</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quaerat!</p>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 18rem;">
            <img src="trees.jpeg" class="card-img-top bisag-unsa mx-auto cardss" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand"> Go Here! </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 18rem;">
            <img src="flower.jpg" class="card-img-top bisag-unsa mx-auto cardss" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand"> Go Here!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 18rem;">
            <img src="road.jpeg" class="card-img-top bisag-unsa mx-auto cardss" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Card title </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand"> Go Here! </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- call to action -->
  <div id="cta" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Lorem, ipsum dolor sit amet consectetur adipisicing.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, possimus consequatur.</p>
          <a href="#about" class="btn btn-brand"> Please Click Here!</a>
        </div>
      </div>
    </div>
  </div>


  <!-- REVIEWS -->
  <section id="reviews">
    <div class="container">
      <div class="text-center">
        <h2>REVIEWS</h2>
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis provident delectus fugiat.</p>
      </div>
      <!-- REVIEW ITEM-->
      <div class="row row-cols-lg-3">
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="profile.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatem commodi ullam sequi
              eligendi.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Accordion -->
  <section id="faq">
    <div class="container">
      <h2>FREQUENTLY ASKED QUESTION</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the
              overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
              with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
              can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the
              overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
              with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
              can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the
              overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
              with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
              can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- footer-->
  <footer class="footer text-white" id="footer">
    <div class="container">
      <div class="row al">
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <img src="flower.jpg" alt="Logo" height="100px">
          </a>
          <h5 class="mt-4">About Us</h5>
          <p> Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center">
          <h5>Services</h5>
          <ul class="list-unstyled">
            <li><a href="#">Services1</a></li>
            <li><a href="#">Services2</a></li>
            <li><a href="#">Services3</a></li>
            <li><a href="#">Services4</a></li>
            <li><a href="#">Services5</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <h5>Contact Us</h5>
          <p>123 Street Name, <br>City, Country</p>
          <p>Email: example@example.com <br>Phone: +1234567890</p>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <h5>Newsletter</h5>
          <form>
            <div class="input-group mb-3">
              <input type="text" class="form-control" style="border-radius: 1px;" placeholder=Email">

              <button class="btn btn-outline-light" type="button" id="button-addon2">Subscribe</button>
            </div>
          </form>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam.</p>
        </div>
      </div>
    </div>
  </footer>





</body>

</html>