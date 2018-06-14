<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113383451-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-113383451-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="The EPOS suite tailored for Sales, Buyback, Cheque Cashing and Currency">
    <meta name="keywords" content="EPOS, Buyback, Pawnbroking, Software, Cheque, Currency">
    <meta name="author" content="Nosco Management Solutions">
    <link rel="icon" href="images/icon.ico">

    <title>NosPos | EPOS Suite</title>

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur:700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>

    <?php require('contact.php'); ?>

    <script>
        $(document).ready(function() {
            $('a[href^="#"]').click(function(event) {
                var id = $(this).attr("href");
                var offset = 60;
                var target = $(id).offset().top - offset;
                $('html, body').animate({scrollTop:target}, 500);
                event.preventDefault();
            });
        });
    </script>

    <header id="top">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand noclick logofont" href="#top">NOSPOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link logofont" href="https://noscosystems.com/" target="_blank">NOSCO<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main">

        <div class="jumbotron">
            <div class="header-overlay mt-5"></div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 fadein mt-5">
                    <div>
                        <div class="headline noclick">NOSPOS</div>
                        <div class="nosco"><h2>by NOSCO</h2></div>
                        <div class="subline noclick">The EPOS suite tailored for Sales, Buyback, Pawnbroking, Cheque Cashing & Currency</div>
                        <div class="subline mt-4"><a class="btn btn-lg btn-success" href="http://www.demo.nospos.com/" target="_blank" role="button">Online Demo</a></div>
                    </div>
                </div>
                <div class="col-lg-5 mt-3">
                    <div id="crossfade">
                        <img class="demoimg noclick mt-3" src="images/monitor1.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor2.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor3.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor4.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor5.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor6.png" alt="Demo slideshow"/>
                        <img class="demoimg noclick mt-3" src="images/monitor1.png" alt="Demo slideshow"/>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container marketing">

        <h1 class="subtitle noclick" id="product">Features</h1>

        <div class="row featurelist">
            <div class="col-lg-4 features">
                <img class="screen mb-3" src="images/num2.png" alt="Intuitive Design" width="300" height="175">
                <h2 class="mb-3">Intuitive Design</h2>
                <p>NosPos can be installed on any personal computer, allowing hardware costs to be minimised. The intuitive design allows you and your staff to get up to speed quickly.</p>
            </div>
            <div class="col-lg-4 features">
                <img class="screen mb-3" src="images/num1.png" alt="Fully Featured" width="300" height="175">
                <h2 class="mb-3">Fully Featured</h2>
                <p>NosPos is a complete solution for the Buyback and Pawnbroking sector. Transaction processing, reporting, and target setting is all built in as standard.</p>
            </div>
            <div class="col-lg-4 features">
                <img class="screen mb-3" src="images/num3.png" alt="Fantastic Support" width="300" height="175">
                <h2 class="mb-3">Fantastic Support</h2>
                <p>Contact our UK based Support and Development team and speak directly to the developers. Talk to us about a bespoke solution that fits the way that you do business.</p>
            </div>
        </div>

        <!-- PRICING -->

        <h1 class="subtitle noclick" id="pricing">Pricing</h1>
        <div class="prices">
            <div class="row">
                <div class="card col-lg-5 price noclick">
                    <h2>One Time Setup</h2>
                    <h5>£5000 per store</h5>

                </div>
                <div class="card col-lg-5 price noclick">
                    <h2>Subscription</h2>
                    <h5>£200 per month per store</h5>
                </div>
            </div>

        </div>
    </div>

    <!-- CONTACT & ABOUT -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="subtitle noclick" id="contact">Arrange a demo</h1>
                <?php if (!$messageSent): ?>
                    <form method="post" action="index.php#contact">
                        <div class="form-group">
                            <input type="text" class="form-control centr" name="name" maxlength="50" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control centr" name="company" maxlength="50" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control centr" name="email"  maxlength="50" aria-describedby="emailHelp" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control centr" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "number"
                            maxlength = "18" placeholder="Phone Number">
                        </div>
                        <div class="row">
                            <input type="submit" name="contact" value="Send Enquiry" class="btn btn-success submitbtn mt-2">
                        </div>
                    </form>
                <?php else: ?>
                    <div class="col-xs-12 text-xs-center">
                        <div class="alert alert-success" role="alert">
                            Your enquiry has been delivered successfully. Please wait 48 hours for a response. Thank you.
                        </div>
                    </div>
                <?php endif ?>
            </div>

            <div class="col-md-6" id="about">
                <h1 class="subtitle noclick">About Us</h1>
                <div class="col-sm-10 centerl">
                    <p>NosPos is developed by Nosco, a small team based in Pontypridd, South Wales. We pride ourselves on our relationships with our customers, making you our priority.</p>
                    <div class="contact">
                        <a class="white-text" href="https://goo.gl/maps/2d5FsvzqUBx" target="_blank"><i class="material-icons md-16">business</i> 5 High Street, Pontypridd, CF37 1QJ</a><br>
                        <a class="white-text" href="tel:+441443400998"><i class="material-icons md-16">call</i> 01443 340 998</a><br>
                        <a class="white-text" href="mailto:admin@noscosystems.com/"><i class="material-icons md-16">email</i> admin@nosco-systems.com</a><br>
                        <a class="white-text" href="https://noscosystems.com/" target="_blank"><i class="material-icons md-16">web</i> www.noscosystems.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<footer class="container mt-5">
    <h4 class="float-right"><a href="#top" class="fa fa-angle-up white-text"></a></h4>
    <p class="copyright">&copy; <span id="year"></span> Nosco Management Solutions &nbsp 
        <a href="https://www.facebook.com/noscosystems/" class="fa fa-facebook-square white-text" target="_blank"></a>&nbsp
        <a href="https://twitter.com/nosco_systems?lang=en" class="fa fa-twitter-square white-text" target="_blank"></a>&nbsp
        <a href="https://www.linkedin.com/company/nosco-systems" class="fa fa-linkedin-square white-text" target="_blank"></a></p>
    </footer>

    <script>
        var d = new Date();
        document.getElementById("year").innerHTML = d.getFullYear();
    </script>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/bootstrap/holder.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-50290689-5"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-50290689-5');
</script>


</body>
</html>
