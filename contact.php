<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact | Saclux Paints</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Crimson+Pro:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <?php include ("menu.php") ; ?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner4">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <!-- <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li> -->
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-contacts-12 py-5">
        <div class="container py-lg-5 py-md-4 py-3">
            <h3 class="title-style mb-5">Contact Us</h3>
            <div class="row contact-grids">
                <div class="col-lg-7 contacts12-main">
                    <form action="proc-contact.php" method="post" class="signin-form">
                        <div class="row input-grids">
                            <div class="col-sm-6">
                                <input type="text" name="w3lName" placeholder="Full name" class="contact-input" />
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <input type="email" name="w3lSender" placeholder="Your email" class="contact-input" />
                            </div>
                        </div>
                        <div class="row input-grids my-4">
                            <div class="col-sm-6">
                                <input type="text" name="w3lSubect" placeholder="Subject" class="contact-input" />
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <input type="text" name="w3lName" placeholder="Phone number" class="contact-input" />
                            </div>
                        </div>
                        <textarea name="w3lMessage" placeholder="Type your message here" required=""></textarea>
                        <button class="btn button-style mt-5">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-5 contact-right pl-xl-5 mt-lg-0 mt-5">
                    <div class="details-style d-flex">
                        <span class="fa fa-map"></span>
                        <div class="location-info">
                            <span>Location</span>
                            <p> Saclux Paints Plc</p>
                            <p>108 Aba Road</p>
                            <p>Ohokobe Afara,</p>
                            <p>Umuahaia North Abia (W.A),</p>
                            <p>Nigeria.</p>
                        </div>
                    </div>
                    <div class="details-style d-flex">
                        <span class="fa fa-envelope-open"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:info@sacluxpaints.com"> info@sacluxpaints.com</a>
                        </div>
                    </div>
                    <div class="details-style d-flex">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:(123) 456-78-90"> +234-709-782-4326</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15885.260944567219!2d7.492011!3d5.520153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf45e7ecabd10a5!2sSaclux%20Paints%20Plc!5e0!3m2!1sen!2sng!4v1612251599612!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- //contact page -->

    <!-- footer -->
    <?php include ("footer.php") ; ?>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>