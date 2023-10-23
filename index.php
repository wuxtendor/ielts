<?php
require "db.php";
 if( isset($_SESSION['logged_user']) ) :
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>Learning english together</title>
        <meta charset="utf-8">

        <link href="https://google.com" rel="stylesheet">
        <link rel="stylesheet" href="logged/css/bootstrap.min.css">
        <link rel="stylesheet" href="logged/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="logged/css/animate.css">

        <link rel="stylesheet" href="logged/css/owl.carousel.min.css">
        <link rel="stylesheet" href="logged/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="logged/css/icomoon.css">
        <link rel="stylesheet" href="logged/css/style.css">
    </head>
    <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" style="width: 1500px;">
                    <li class="nav-item active"><a href="#section-home" class="nav-link"><font color="black"><b>Home |</b></font></a></li>
                    <li class="nav-item"><a href="#section-features" class="nav-link"><font color="black"><b>IELTS materials |</b></font></a></li>
                    <li class="nav-item"><a href="#section-services" class="nav-link"><font color="black"><b>IELTS Tips |</b></font></a></li>
                    <li class="nav-item"><a href="#section-vocabulary" class="nav-link"><font color="black"><b>Vocabulary improvement |</b></font></a></li>
                    <li class="nav-item"><a href="#section-checkyourlevel" class="nav-link"><font color="black"><b>Check your level |</b></font></a></li>
                    <li class="nav-item"><a href="#section-mock-exam" class="nav-link"><font color="black"><b>MOCK EXAM |</b></font></a></li>
                    <li class="nav-item"><a href="http://localhost/phptest/logout.php" class="nav-link"><font color="black"><b>Log out |</b></font></a></li>
                    <li class="nav-item" style="background-color: #76a1ef; border-radius: 5px;"><a class="nav-link" href="http://localhost/phptest/acc/acc.php" style=""><font color="black"><b>MY ACCOUNT</b></font></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



    <section class="ftco-cover ftco-slant" style="background-image: url(logged/images/ielts-2.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-10">
                    <h1 class="ftco-heading ftco-animate"></h1>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section bg-light  ftco-slant ftco-slant-white" id="section-features">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">Our Awesome Library</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Here you can find the past IELTS exams and prepare to new ones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="logged/images/headset.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Listening</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="logged/images/bookicon.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Reading</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="logged/images/feather.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Writing</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section ftco-slant" id="section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">IELTS TIPS</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">How to get higher score in IELTS. These tips will help you during the real exam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="logged/images/fields.jpg" height="1080px" width="1920px" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 1. Don't leave the fields empty. </h3>
                        <p class="mb-4">During the listening and reading you may not know the answer to one of the questions. In this case  you try to guess the answer. When all fields are filled you get an extra point.</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>No skips</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Intellectual guesses</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Extra points</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="logged/images/synonyms1.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 2. Use as much synonyms as you can.</h3>
                        <p class="mb-4">While writing task 1 you better different word to describe the gives graph(gradual, sharply, dramatically, significantly, considerably , slightly)</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Use synonyms</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Demonstrate your vocabulary</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>If it's not rich use our site to improve it.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="logged/images/confidence.png" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 3. Be confident</h3>
                        <p class="mb-4">Speaking examiner is the only one who will give you a mark(speaking section only.He(She) will pay attention how confident you are during you speech.</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Be brave</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Note keywords on 2 part of speaking</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Speak a lot , but not too much</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-vocabulary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">IMPROVE YOUR VOCABULARY</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">We offer you few options to choose. The difference between them is in rarety of using of provided word.If you just began start due to your opinion about your level, else pass mock test and check out your level and pick appropriate one. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">NOOB</font>
                        <p class="ftco-price-per text-center"><strong>25</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Word that are being used in everyday life.</li>
                            <li>Recommended for persons , who just began learning English</li>
                            <li>Have fun</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">INTERMEDIATE</font>
                        <p class="ftco-price-per text-center"><strong>75</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Basic word , which are needed for comfortable dialog</li>
                            <li>Recommended for people who have expirience in learning English</li>
                            <li>Good luck</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="w-100 clearfix d-xl-none"></div>
                <div class="col-md bg-white  ftco-pricing-popular p-5 m-2 text-center mb-2 ftco-animate">
                    <span class="popular-text">MOST USED</span>
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">ADVANCED</font>
                        <p class="ftco-price-per text-center"><strong class="text-primary">135</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Necessary words for expressing your opinion in more detailed way.</li>
                            <li>Recommended for smart guys</li>
                            <li>Happy test</li>
                        </ul>
                        <p><a href="#" class="btn btn-primary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">PROFICIENCY</font>
                        <p class="ftco-price-per text-center"><strong>215</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>User in discussions of scientists. Includes proverbs.</li>
                            <li>Recommended for native speakers</li>
                            <li>Hope you enjoy that</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-checkyourlevel">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">CHECK YOUR LEVEL</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">According to the results of your MOCK TEST we will estimate your academic perfomance</p>
                            <p><a href="https://witcher.fandom.com/wiki/Witcher_Wiki" target="_blank" class="btn btn-primary ftco-animate">CHECK IT OUT</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
    </section>

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-mock-exam">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">MOCK EXAM</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">Pass an exam to try your forces <a href="https://google.com">START</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->


            <div class="row no-gutters align-items-center ftco-animate">
                <div class="col-md-6 mb-md-0 mb-5">
                    <img src="logged/images/ielts-listening.png" alt="Free Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="col-md-6 p-md-5">
                    <h3 class="h3 mb-4">You will pass 2 categories. First is LISTENING</h3>
                    <p>You will meet 40 questions which are spread into 4 sections. Each section has it's own audio file. You better launch the audio immidiantly after getting to the page with questions.</p>
                    <p class="mb-5"><a href="#">START</a></p>
                </div>
            </div>
            <div class="row no-gutters align-items-center ftco-animate">
                <div class="col-md-6 order-md-3 mb-md-0 mb-5">
                    <img src="logged/images/reading.png" alt="Free Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="col-md-6 p-md-5 order-md-1">
                    <h3 class="h3 mb-4">Second is READING</h3>
                    <p>You will have 3 different texts and 40 questions about them. You have only 60 minutes to give your answers.</p>
                    <p class="mb-5"><a href="#">START</a></p>
                </div>
            </div>

        </div>
    </section>
    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-counter">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">Fun Facts</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="34146">0</span>
                        <span class="ftco-label">Hours spent by student in learning</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="1239">0</span>
                        <span class="ftco-label">Students passed mock exam higher than 7.0 score.</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="124">0</span>
                        <span class="ftco-label">Number of students</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="ftco-section bg-white ftco-slant ftco-slant-dark" id="section-contact-wuxi">
        <div class="container">
            <div class="row">

                <div class="col-md pr-md-5 mb-5">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md" id="map">
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">About</a></li>
                                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                                    <li><a href="#" class="py-2 d-block">Press</a></li>
                                    <li><a href="#" class="py-2 d-block">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Communities</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Support</a></li>
                                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                    <li><a href="#" class="py-2 d-block">Good Template</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p>&copy; Exclusivity 2020. All Rights Reserved.  Made by <a href="http://steamcommunity.com/id/wuxtend0r"> <u>Wuxorporation</u> </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>


    <script src="logged/js/jquery.min.js"></script>
    <script src="logged/js/popper.min.js"></script>
    <script src="logged/js/bootstrap.min.js"></script>
    <script src="logged/js/jquery.easing.1.3.js"></script>
    <script src="logged/js/jquery.waypoints.min.js"></script>
    <script src="logged/js/owl.carousel.min.js"></script>
    <script src="logged/js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="logged/js/google-map.js"></script>

    <script src="logged/js/main.js"></script>


    </body>
    </html>
<?php else : ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>Learning english together</title>
        <meta charset="utf-8">

        <link href="https://google.com" rel="stylesheet">
        <link rel="stylesheet" href="Logged%20out/css/bootstrap.min.css">
        <link rel="stylesheet" href="Logged%20out/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="Logged%20out/css/animate.css">

        <link rel="stylesheet" href="Logged%20out/css/owl.carousel.min.css">
        <link rel="stylesheet" href="Logged%20out/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="Logged%20out/css/icomoon.css">
        <link rel="stylesheet" href="Logged%20out/css/style.css">
    </head>
    <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#section-home" class="nav-link"><font color="black"><b>Home |</b></font></a></li>
                    <li class="nav-item"><a href="#section-features" class="nav-link"><font color="black"><b>IELTS materials |</b></font></a></li>
                    <li class="nav-item"><a href="#section-services" class="nav-link"><font color="black"><b>IELTS Tips |</b></font></a></li>
                    <li class="nav-item"><a href="#section-vocabulary" class="nav-link"><font color="black"><b>Vocabulary improvement |</b></font></a></li>
                    <li class="nav-item"><a href="#section-checkyourlevel" class="nav-link"><font color="black"><b>Check your level |</b></font></a></li>
                    <li class="nav-item"><a href="#section-mock-exam" class="nav-link"><font color="black"><b>MOCK EXAM |</b></font></a></li>
                    <li class="nav-item"><a href="#section-contact-wuxi" class="nav-link"><font color="black"><b>Contact Wuxi |</b></font></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover ftco-slant" style="background-image: url(Logged%20out/images/ielts-2.jpg);" id="section-home">
        <div class="container">
            <a id="signupB" href="http://localhost/phptest/signup.php">Join us</a>
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-10">
                    <h1 class="ftco-heading ftco-animate"></h1>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section bg-light  ftco-slant ftco-slant-white" id="section-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">Our Awesome Library</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Here you can find the past IELTS exams and prepare to new ones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="Logged%20out/images/headset.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Listening</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="Logged%20out/images/bookicon.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Reading</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                        <div class="ftco-icon mb-3"><img src="Logged%20out/images/feather.png" width="100px"/></div>
                        <div class="media-body">
                            <h5 class="mt-0">Writing</h5>
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section ftco-slant" id="section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">IELTS TIPS</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">How to get higher score in IELTS. These tips will help you during the real exam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="Logged%20out/images/fields.jpg" height="1080px" width="1920px" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 1. Don't leave the fields empty. </h3>
                        <p class="mb-4">During the listening and reading you may not know the answer to one of the questions. In this case  you try to guess the answer. When all fields are filled you get an extra point.</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>No skips</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Intellectual guesses</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Extra points</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="Logged%20out/images/synonyms1.jpg" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 2. Use as much synonyms as you can.</h3>
                        <p class="mb-4">While writing task 1 you better different word to describe the gives graph(gradual, sharply, dramatically, significantly, considerably , slightly)</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Use synonyms</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Demonstrate your vocabulary</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>If it's not rich use our site to improve it.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 ftco-animate">
                    <figure><img src="Logged%20out/images/confidence.png" alt="Free Template by Free-Template.co" class="img-fluid"></figure>
                    <div class="p-3">
                        <h3 class="h4">Tip 3. Be confident</h3>
                        <p class="mb-4">Speaking examiner is the only one who will give you a mark(speaking section only.He(She) will pay attention how confident you are during you speech.</p>
                        <ul class="list-unstyled ftco-list-check text-left">
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Be brave</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Note keywords on 2 part of speaking</span></li>
                            <li class="d-flex mb-2"><span class="oi oi-check mr-3 text-primary"></span> <span>Speak a lot , but not too much</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-vocabulary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">IMPROVE YOUR VOCABULARY</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">We offer you few options to choose. The difference between them is in rarety of using of provided word.If you just began start due to your opinion about your level, else pass mock test and check out your level and pick appropriate one. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">NOOB</font>
                        <p class="ftco-price-per text-center"><strong>25</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Word that are being used in everyday life.</li>
                            <li>Recommended for persons , who just began learning English</li>
                            <li>Have fun</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">INTERMEDIATE</font>
                        <p class="ftco-price-per text-center"><strong>75</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Basic word , which are needed for comfortable dialog</li>
                            <li>Recommended for people who have expirience in learning English</li>
                            <li>Good luck</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="w-100 clearfix d-xl-none"></div>
                <div class="col-md bg-white  ftco-pricing-popular p-5 m-2 text-center mb-2 ftco-animate">
                    <span class="popular-text">MOST USED</span>
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">ADVANCED</font>
                        <p class="ftco-price-per text-center"><strong class="text-primary">135</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>Necessary words for expressing your opinion in more detailed way.</li>
                            <li>Recommended for smart guys</li>
                            <li>Happy test</li>
                        </ul>
                        <p><a href="#" class="btn btn-primary btn-sm">START</a></p>
                    </div>
                </div>
                <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
                    <div class="ftco-pricing">
                        <font size="5" color="black" face="mv boli">PROFICIENCY</font>
                        <p class="ftco-price-per text-center"><strong>215</strong><span>words</span></p>
                        <ul class="list-unstyled mb-5">
                            <li>User in discussions of scientists. Includes proverbs.</li>
                            <li>Recommended for native speakers</li>
                            <li>Hope you enjoy that</li>
                        </ul>
                        <p><a href="#" class="btn btn-secondary btn-sm">START</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-checkyourlevel">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">CHECK YOUR LEVEL</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">According to the results of your MOCK TEST we will estimate your academic perfomance</p>
                            <p><a href="https://witcher.fandom.com/wiki/Witcher_Wiki" target="_blank" class="btn btn-primary ftco-animate">CHECK IT OUT</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
    </section>

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-mock-exam">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">MOCK EXAM</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">Pass an exam to try your forces <a href="https://google.com">START</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->


            <div class="row no-gutters align-items-center ftco-animate">
                <div class="col-md-6 mb-md-0 mb-5">
                    <img src="Logged%20out/images/ielts-listening.png" alt="Free Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="col-md-6 p-md-5">
                    <h3 class="h3 mb-4">You will pass 2 categories. First is LISTENING</h3>
                    <p>You will meet 40 questions which are spread into 4 sections. Each section has it's own audio file. You better launch the audio immidiantly after getting to the page with questions.</p>
                    <p class="mb-5"><a href="#">START</a></p>
                </div>
            </div>
            <div class="row no-gutters align-items-center ftco-animate">
                <div class="col-md-6 order-md-3 mb-md-0 mb-5">
                    <img src="Logged%20out/images/reading.png" alt="Free Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="col-md-6 p-md-5 order-md-1">
                    <h3 class="h3 mb-4">Second is READING</h3>
                    <p>You will have 3 different texts and 40 questions about them. You have only 60 minutes to give your answers.</p>
                    <p class="mb-5"><a href="#">START</a></p>
                </div>
            </div>

        </div>
    </section>
    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-counter">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">Fun Facts</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="34146">0</span>
                        <span class="ftco-label">Hours spent by student in learning</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="1239">0</span>
                        <span class="ftco-label">Students passed mock exam higher than 7.0 score.</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="124">0</span>
                        <span class="ftco-label">Number of students</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="ftco-section bg-white ftco-slant ftco-slant-dark" id="section-contact-wuxi">
        <div class="container">
            <div class="row">

                <div class="col-md pr-md-5 mb-5">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md" id="map">
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">About</a></li>
                                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                                    <li><a href="#" class="py-2 d-block">Press</a></li>
                                    <li><a href="#" class="py-2 d-block">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Communities</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Support</a></li>
                                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                    <li><a href="#" class="py-2 d-block">Good Template</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p>&copy; Exclusivity 2020. All Rights Reserved.  Made by <a href="http://steamcommunity.com/id/wuxtend0r"> <u>Wuxorporation</u> </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>


    <script src="Logged%20out/js/jquery.min.js"></script>
    <script src="Logged%20out/js/popper.min.js"></script>
    <script src="Logged%20out/js/bootstrap.min.js"></script>
    <script src="Logged%20out/js/jquery.easing.1.3.js"></script>
    <script src="Logged%20out/js/jquery.waypoints.min.js"></script>
    <script src="Logged%20out/js/owl.carousel.min.js"></script>
    <script src="Logged%20out/js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="Logged%20out/js/google-map.js"></script>

    <script src="Logged%20out/js/main.js"></script>


    </body>
    </html>
<?php endif ; ?>