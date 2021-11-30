<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Factories | Saclux Paints</title>
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
    <div class="inner-banner2">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Our Factories</h4>
                <ul class="breadcrumbs-custom-path">
                    <!-- <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li> -->
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-text-6">
        <div class="text-6-mian bottom-space py-5">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="row top-cont-grid align-items-center">
                    <div class="col-lg-5 right-img sec-img-ab">
                        <img src="assets/images/fact.jpg" alt="" class="img-responsive img-fluid" />
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-6 left-cont mb-lg-0 mb-5">
                        <!-- <h6>Saclux Paint</h6> -->
                        <h4>Our Factories</h4>
                        <p>Our factories are located in Abia State Nigeria and has been producing quality paints for over 45 years.</p>
                        <h5><b>REGISTERED OFFICE:</b> </h5><br>
                            OHOKOBE AFARAUKWU IBEKU <br>
                            ABA ROAD, <br>
                            P.O BOX 1409, <br>
                            UMUAHIA, <br>
                            ABIA STATE.</p>

                            <h5><b>FACTORIES:</b></h5> <br>
                            SACLUX PAINTS <br>
                            OHOKOBE AFARAUWKU – IBEKU <br>
                            ALONG OLD ABA ROAD, <br>
                            UMUAHIA NORTH LGA, <br>
                            ABIA STATE.</p>
                            
                            <p>ROSHED INDUSTRIES <br>
                            UMUOKO AMUZUKWU – IBEKU <br>
                            UMUAHIA NORTH LGA, <br>
                            ABIA STATE.</p>

                            <p>MONICA INTEGRATED <br>
                            ALONG OLD ABA ROAD <br>
                            OPPOSITE MODERN CERAMICS INDUSTRIES, <br>
                            UMUAHIA, <br>
                            ABIA STATE.</p>
                    </div>
                </div>
               <br> <br> <br>
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