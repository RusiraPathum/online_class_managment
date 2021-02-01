<?php
session_start();
include './db.php';
$name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Widura Video</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/video.css">



</head>
<body>

<!--Start content section-->
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm" style="background-color: #f7631b; z-index: 1" href="#">
        <i class="fas fa-bars" style="background-color: #f7631b; color: black; "></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand row">
                <div class="col-10">
                    <h4 class="text-uppercase">
                        <?php
                        echo "Hi ".$name;
                        ?>
                    </h4>
                </div>
                <div class="col-2" id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Search...">
                        <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar-search  -->

            <div class="sidebar-menu">
                <ul>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>English</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Topic 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Topic 2</a>
                                </li>
                                <li>
                                    <a href="#">Topic 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Topic 1

                                    </a>
                                </li>
                                <li>
                                    <a href="#">Topic 2

                                    </a>
                                </li>
                                <li>
                                    <a href="#">Topic 3

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Maths</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Topic 1</a>
                                </li>
                                <li>
                                    <a href="#">Topic 2</a>
                                </li>
                                <li>
                                    <a href="#">Topic 3</a>
                                </li>
                                <li>
                                    <a href="#">Topic 4</a>
                                </li>
                                <li>
                                    <a href="#">Topic 5</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <form method="post" action="custom/php/logout.php">
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <button type="submit" class="btn mb-1 align-items-center" style="background-color: red; font-size: 0.5rem"  value=""><i class="fa fa-power-off"></i></button>


            </div>
        </form>

    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
        <div class="container-fluid">
            <div class="embed-responsive embed-responsive-16by9">
                <?php
                $db = new db();
                $query = "SELECT * FROM video_uplod ORDER BY id";
                $rs = $db->Search($query);

                if ($rs->rowCount() > 0) {
                    while ($row = $rs->fetch(2)) {
                        $name = $row['name'];
                        $video = $row['video'];
                        echo "<div style='height:100%; margin-right: 5px;'>
                                <video oncontextmenu='return false;' disablePictureInPicture autoplay controls controlsList='nodownload' src='" . $video . "' controls ></video>
                            </div>";
                    }
                } else {
                    echo "<p class=text>Video Not Found</p>";
                }
                ?>
            </div>

            <!--All courses-->
            <section class="" id="all_course">
                <div class="all-courses">
                    <div class="">
                        <div class="row">
                            <div class="col-12 ">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-maths-tab" data-toggle="tab" href="#nav-maths"
                                           role="tab" aria-controls="nav-maths" aria-selected="true">Overview</a>
                                        <a class="nav-item nav-link" id="nav-biology-tab" data-toggle="tab" href="#nav-biology"
                                           role="tab" aria-controls="nav-biology" aria-selected="false">Q&A</a>
                                        <a class="nav-item nav-link" id="nav-art-tab" data-toggle="tab" href="#nav-art" role="tab"
                                           aria-controls="nav-art" aria-selected="false">Review</a>
                                        <a class="nav-item nav-link" id="nav-technology-tab" data-toggle="tab"
                                           href="#nav-technology" role="tab" aria-controls="nav-technology" aria-selected="false">Announcement</a>
                                    </div>
                                </nav>
                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-maths" role="tabpanel"
                                         aria-labelledby="nav-maths-tab">
                                        <div class="bg-success" style="height: 100px"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-biology" role="tabpanel" aria-labelledby="nav-biology-tab">
                                        <div class="bg-primary" style="height: 100px"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-art" role="tabpanel" aria-labelledby="nav-art-tab">
                                        <div class="bg-dark" style="height: 100px"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-technology" role="tabpanel"
                                         aria-labelledby="nav-technology-tab">
                                        <div class="bg-danger" style="height: 100px"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--All courses-->

            <br><br>
            <!-- start footer Area -->
            <footer class="footer-area section-g p-5 ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Top Products</h4>
                                <ul>
                                    <li><a href="#">Managed Website</a></li>
                                    <li><a href="#">Manage Reputation</a></li>
                                    <li><a href="#">Power Tools</a></li>
                                    <li><a href="#">Marketing Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Quick links</h4>
                                <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Features</h4>
                                <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Resources</h4>
                                <ul>
                                    <li><a href="#">Guides</a></li>
                                    <li><a href="#">Research</a></li>
                                    <li><a href="#">Experts</a></li>
                                    <li><a href="#">Agencies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom row align-items-center justify-content-between">
                        <p class="footer-text m-0 col-lg-6 col-md-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://www.optimizesolutions.lk/Home" target="_blank">Optimize Solutions</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        <div class="col-lg-6 col-sm-12 footer-social">
                            <a href="#"><i class="fab fa-facebook"></i></i></a>
                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble-square"></i></a>
                            <a href="#"><i class="fab fa-behance-square"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->
        </div>
    </main>
    <!-- page-content" -->
</div>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<script src="custom/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>

    // window.onload = function() {
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('GET', 'mov_bbb.mp4', true);
    //     xhr.responseType = 'blob'; //important
    //     xhr.onload = function(e) {
    //         if (this.status == 200) {
    //             console.log("loaded");
    //             var blob = this.response;
    //             var video = document.getElementById('id');
    //             video.oncanplaythrough = function() {
    //                 console.log("Can play through video without stopping");
    //                 URL.revokeObjectURL(this.src);
    //             };
    //             video.src = URL.createObjectURL(blob);
    //             video.load();
    //         }
    //     };
    //     xhr.send();
    // }

    $(document).bind("contextmenu",function(e) {
        e.preventDefault();
    });

    document.onkeydown = function(e) {
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }

    jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () {
            $(".page-wrapper").addClass("toggled");
        });


    });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</>
</html>