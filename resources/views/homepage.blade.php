<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <!-- AOS LINK -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CUSTOMS CSS -->
    <link rel="stylesheet" href="/style.css">
    <title>Josell Vibar</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-lg">
        <a class="navbar-brand text-success fw-bold fs-4" href="#home">PORTFOLIO</a>
        <button class="navbar-toggler btn btn-success px-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-success" href="#home">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-success" href="#about">ABOUT ME</a>
                <a class="nav-item nav-link text-success" href="#services">SERVICES</a>
                <a class="nav-item nav-link text-success" href="#portfolio">PROJECTS</a>
                <a class="nav-item nav-link text-success" href="#contact">CONTACT ME</a>
            </div>
        </div>
    </div>
</nav>

<!-- NAVBAR END -->

<!-- HOME SECTION START -->
<section class="py-5" id="home">
    @if (session()->has('success'))
  <div class="container container--narrow">
    <div class="alert alert-success text-center mt-4">
      {{session('success')}}
    </div>
  </div>
@endif

@if (session()->has('failure'))
  <div class="container container--narrow">
    <div class="alert alert-danger text-center mt-4">
      {{session('failure')}}
    </div>
  </div>
@endif
    <div class="container-lg">
        <div class="row min-vh-100 align-item-center align-content-center">
            <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-left" data-aos-duration="3000">
                <div class="home-img text-center">
                    <img src="images/profileej-modified_373x373.png" class="mw-100" alt="profile_img">
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 order-md-first" data-aos="fade-right" data-aos-duration="3000">
                <div class="home-text">
                    <p class="text-muted mb-1">Hello I'm</p>
                    <h2 class="fs-4">Josell Vibar</h2>
                    <h1 class="text-success text-uppercase fs-1 fw-bold">Web Developer</h1>
                    <p class="mt-2 text-muted">Creating solid, scalable websites with exceptional user experiences is my passion.</p>
                    <a id="myWork" href="#portfolio" class="btn btn-warning px-3 mt-1">My Work</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME SECTION END -->

<!-- ABOUT SECTION START -->

<section class="about py-5" id="about">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-down" data-aos-duration="2000">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">About Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-up-right" data-aos-duration="2000">
                <div class="about-text">
                    <h3 class="fs-4 mb-3">I'm an Aspiring Web Developer</h3>
                    <p class="text-muted">

                        proficient in building both the front-end and back-end of websites, 
                        which ultimately contributes to the overall success of the product. 
                        Please take a look at some of my work showcased in the Portfolio section. 
                        Additionally, I enjoy sharing valuable content on topics I have learned in web development to assist other members of the developer community. 
                        You are welcome to follow me on GitHub, where I regularly post useful information related to web development and programming. 
                        I am actively seeking job opportunities that allow me to contribute, learn, and grow. 
                        If you have a suitable opportunity that aligns with my skills and experience, 
                        please do not hesitate to contact me.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center">
                        <a href="{{ route('download.cv') }}" class="btn px-3 btn-warning me-5">Download CV</a>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Lordejay/" class="text-dark me-2"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ejayvibar/?fbclid=IwAR1SNefXCE9Y0vuAasnqiCvMqyE2c16gx2lziSIJ6OEQDR1wG08j7bVqINg"
                                class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/feed/" class="text-dark me-2"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/ejayjayjayjayjay" class="text-dark me-2"><i
                                    class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-up-left" data-aos-duration="2000">
                <div class="skill-item mb-4">
                    <h3 class="fs-6">HTML</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">CSS</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">JAVASCRIPT</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">PHP & LARAVEL</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION END -->

<!-- SERVICES SECTION START -->

<section class="services py-5" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-down" data-aos-duration="2000">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Services</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div class="service-item p-4 rounded">
                    <div class="icon my-3 text-success fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="fs-5 py-2">Web Development</h3>
                    <ul class="list-unstyled">
                        <li class="text-muted">Custom website development tailored to your specific needs and requirements.</li>
                        <li class="text-muted">Front-end development using modern frameworks and technologies such as HTML5, CSS3, and JavaScript.</li>
                        <li class="text-muted">Back-end development to create robust and scalable web applications using PHP and Laravel frameworks.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="service-item p-4 rounded">
                    <div class="icon my-3 text-success fs-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="fs-5 py-2">Creative Design</h3>
                    <ul class="list-unstyled">
                        <li class="text-muted">Wireframing and prototyping to visualize the structure and functionality of your website.</li>
                        <li class="text-muted">User experience (UX) design to create intuitive and user-friendly interfaces.</li>
                        <li class="text-muted">Designing Websites with a Wow Factor: Captivating Audiences, Driving Results.</li>
                        <li class="text-muted">Ongoing support and maintenance to keep your website up to date.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SERVICES SECTION END -->

<!-- PORTFOLIO SECTION START -->

<section class="portfolio py-5" id="portfolio">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-duration="3000">
                <div class="portfolio-item text-center">
                    <img src="/images/unitop.png" class="w-100 img-thubmnail" alt="item1">
                    <h3 class="text-capitalize fs-5 my-2">Unitop Metalwire Corp.</h3>
                    <p class="mb-4"><a href="https://unitop.fun/" class="text-warning text-decoration-none">Live Demo</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-duration="3000">
                <div class="portfolio-item text-center">
                    <img src="images/cookready.png" class="w-100 img-thumbnail" alt="item1">
                    <h3 class="text-capitalize fs-5 my-2">CookReady</h3>
                    <p class="mb-4"><a href="https://ejayjayjayjayjay.github.io/MP-2-V2/"
                            class="text-warning text-decoration-none">Live Demo</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-duration="3000">
                <div class="portfolio-item text-center">
                    <img src="images/blackjack.png" class="w-100 img-thumbnail" alt="item1">
                    <h3 class="text-capitalize fs-5 my-2">BlackJack App</h3>
                    <p class="mb-4"><a href="https://ejayjayjayjayjay.github.io/v2BlackjackApp/"
                            class="text-warning text-decoration-none">Live Demo</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PORTFOLIO SECTION END -->

<!-- FREELANCER AVAILABLE SECTION START -->
<section class="freelancer-available py-5 bg-success">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p class="text-light fs-5">Do you have any project ?</p>
                <h2 class="fs-1 text-white mb-4">I'm Available for Freelancer Projects</h2>
                <a href="#contact" class="btn bg-warning btn-outline-dark">Hire Me</a>
            </div>
        </div>
    </div>
</section>
<!-- FREELANCER AVAILABLE SECTION END -->

<!-- CONTACT SECTION START -->

<section class="contact py-5" id="contact">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="contact-item d-flex mb-3">
                    <div class="icon fs-4 text-success">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Email</h3>
                        <p class="text-muted">vibarjosell@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item d-flex mb-3">
                    <div class="icon fs-4 text-success">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Phone</h3>
                        <p class="text-muted">09770747348</p>
                    </div>
                </div>
                <div class="contact-item d-flex mb-3">
                    <div class="icon fs-4 text-success">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Address</h3>
                        <p class="text-muted">Talon 5 Las Pinas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-form">
                    <form action="{{url('contact_mail')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <input type="text" placeholder="Your Name" name="name" class="form-control form-control-lg 
                                fs-6 border-0 shadow-sm" autocomplete="off">
                                @error('name')
                                    <p class="ms-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4">
                                <input type="email" placeholder="Your Email" name="email" class="form-control form-control-lg 
                                fs-6 border-0 shadow-sm" autocomplete="off">
                                @error('email')
                                    <p class="ms-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <input type="text" placeholder="Subject" name="subject" class="form-control form-control-lg 
                                fs-6 border-0 shadow-sm" autocomplete="off">
                                @error('subject')
                                    <p class="ms-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <textarea placeholder="Your Message" name="message" class="form-control form-control-lg 
                                fs-6 border-0 shadow-sm" autocomplete="off"></textarea>
                                @error('message')
                                    <p class="ms-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Send Message" class="form-control form-control-lg btn btn-warning py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION END -->

<!-- FOOTER START -->
<footer class="footer border-top py-4">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <p class="m-0 text-center text-muted">&copy; {{date('Y')}} Josell P. Vibar</p>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- BOOTSTRAP JS BUNDLE -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>


<!-- AOS JS LINK -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>