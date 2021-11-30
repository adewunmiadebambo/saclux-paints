<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Request Quote | Saclux Paints</title>
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
    <div class="inner-banner5">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Request A Quote</h4>
                <ul class="breadcrumbs-custom-path">
                    <!-- <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li> -->
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <!---header--->
	<div class="header">
			<!-- <h1>Flat Request Form</h1> -->
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
                <form action="proc-contact.php" method="post">
					<div class="request">
						<div class="request-form">
							<h2>Request a quote</h2>
							<form>
								<input type="text" placeholder=" Your Name"> 
								<input type="text" placeholder="Your Email"> 
								<input type="text" placeholder="Your Phone"> 
							</form>
						</div>
						<div class="preferred">
							<h3>preferred contact method</h3>
							<div class="swit">	
							<div class="check_box"><div class="radio"> 
								<label>
								<input type="radio" name="radio" checked=""><i></i>Email
								</label> 
							</div>
							</div>
							<div class="check_box"><div class="radio"> 
								<label>
								<input type="radio" name="radio"><i></i>Phone
								</label> 
							</div>
							</div>
							</div>
							</div> <br>
						<div class="services">
							<h3>Select Products</h3>
							<select class="sel">
							<option value="">Select</option>
							<option value="">Saclux Emulsion Paint</option>
							<option value="">Bright Aluminum</option>
							<option value="">Sacflash Auto Coat</option>
							<option value="">Trend Satin</option>
							<option value="">Saclux Textured Finish</option>
							<option value="">Saclux Acrylic Emultion</option>
                            <option value="">Sacflash Auto Flex Finish</option>
							</select>
							<form>
							<input type="submit" value="Request Quote">
							</form>
						</div>
						<!-- <div class="social-icons">
							<h5>- OR -</h5>
							<ul>
								<li><a href="#"></a></li>
								<li><a href="#" class="fb"></a></li>
								<li><a href="#" class="be"></a></li>
								<li><a href="#" class="gg"></a></li>
							</ul>	
						</div> -->
					</div>
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