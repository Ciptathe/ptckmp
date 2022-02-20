
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Cipta Karya Mustika Papua</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <li class="navbar-brand"><a>PT Cipta Karya Mustika Papua</a></li>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Dokumentasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL::to('/login')}}">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di</div>
                <div class="masthead-heading text-uppercase">Mustika Group</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/about/wagub/5.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pemasangan PJU</div>
                                <div class="portfolio-caption-subheading text-muted">Ked Wakil Gubernur</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/about/sekdaprov/1.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pemasangan PJU</div>
                                <div class="portfolio-caption-subheading text-muted">Ked Sekda Prov</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/about/gubernur/1.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pemasangan PJU</div>
                                <div class="portfolio-caption-subheading text-muted">Ked Gubernur Mandopi</div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pemasangan 2022</h2>
                    <h3 class="section-subheading text-muted">Pemasangan Lampu PJU 2022</h3>
                </div>
                <ul class="timeline">
                    
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/gubernur.jpeg" style="height:156px "alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Kediaman Gubernur Papua Barat</h4>
                                <h4 class="subheading">Pemasangan 3 Unit Pada Kediaman Gubernur Papua Barat</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pemasangan Pju Solar Cell pada Kediaman Gubernur Papua Barat dengan Rincian Unit, 2 Lengan 1 Unit dan 1 lengan 2 Unit Total Keseluruhan Berjumlah 3 Unit </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/sekdaprov.jpeg" style="height:156px "style="widht:330px " alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Januari 2022</h4>
                                <h4 class="subheading">Kediaman Sekda Prov Papua Barat</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pemasangan sebanyak 5 Unit, 2 Lengan 5 Unit Dengan Rincian 3 Unit Di kediaman Susweni Dan 2 Unit Kediaman Mulyono</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/wagub2unit.jpeg" style="height:156px" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Januari 2022</h4>
                                <h4 class="subheading">Rumah Wakil Gubernur</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pemasangan Lampu Solar Cell Bertipe 1 Lengan Sebanyak 2 Unit, Pada Kediaman Pribadi Wakil Gubernur </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        {{-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> --}}
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ked Wakil Gubernur</h2>
                                    <p class="item-intro text-muted">Pemasangan Lampu Solar Cell 1 Lengan 2 Unit</p>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Wagub 1"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Wagub 2"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Wagub 3"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Wagub 4"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Wagub 5"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Wagub 6"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Wagub 7"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Wagub 8"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Wagub 9"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Wagub 10"></button>
                                        </div>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="assets/img/about/wagub/1.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/2.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/3.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/4.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/5.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/6.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/7.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/8.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/9.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/wagub/10.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pemasangan PJU 2 Lengan</h2>
                                    <p class="item-intro text-muted">Ked Gubernur Papua Barat</p>
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="sekda 1"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="sekda 2"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="sekda 3"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="sekda 4"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="sekda 5"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="5" aria-label="sekda 6"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="6" aria-label="sekda 7"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="7" aria-label="sekda 8"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="8" aria-label="sekda 9"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="9" aria-label="sekda 10"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="10" aria-label="sekda 11"></button>
                                        </div>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="assets/img/about/sekdaprov/1.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/3.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/5.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/8.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/14.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/16.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/20.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/21.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/27.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="assets/img/about/sekdaprov/25.jpeg" class="d-block w-100" alt="...">
                                          </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                    <p>Pemasangan Pju di Kediaman Sekda Provinsi Sebanyak 5 Unit Dengan Type 2 Lengan, 2 Unit Kediaman Mulyono, dan 3 Unit Kediaman Susweni</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pemasangan Pju 1L & 2L</h2>
                                    <p class="item-intro text-muted">Pemasangan Pju 1L 2 unit dan 2L 1 Unit Di Kediaman Gubernur Mandopi</p>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Wagub 1"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Wagub 2"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Wagub 3"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Wagub 4"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Wagub 5"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Wagub 6"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Wagub 7"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Wagub 8"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Wagub 9"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Wagub 10"></button>
                                        </div>
                                        <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/about/gubernur/1.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item ">
                                        <img src="assets/img/about/gubernur/3.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item ">
                                        <img src="assets/img/about/gubernur/5.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item ">
                                        <img src="assets/img/about/gubernur/8.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item ">
                                        <img src="assets/img/about/gubernur/9.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item ">
                                        <img src="assets/img/about/gubernur/10.jpeg" class="d-block w-100" alt="...">
                                      </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                    


                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
