<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 13:21:19 GMT -->

<body>
<!-- header -->
@include('app')
<!-- header-end -->
<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
        <input type="text" name="s" id="search" placeholder="Search"/>
        <button><i class="fa fa-search"></i></button>
    </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul  class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="courses.html">Courses</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Teacher</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-12" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-end -->
<!-- main-area -->
<main>
    <!-- slider-area -->

    <!-- search-area-end -->
    <!-- admission-area -->
    <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background-image:url(img/bg/admission_bg.png); background-repeat: no-repeat; background-position: top;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ asset('images/123554738_1049170792220038_1374060645322425100_o-1.jpg') }}" alt="img">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h2> Université<span> Technique </span> M'siri</h2>
                        </div>
                        <p class="txt-clr"> L’histoire de la chefferie Yeke a déjà été racontée par maints historiens habiles, voyageurs, visiteurs ou explorateurs de grand renom;</p>
                        <p class="txt-clr"> les divers évènements ayant survenu dans notre chefferie ont été relatés (et continuent à l’être d’ailleurs) par de nombreux ouvrages: journaux, livres… dû  aux plumes les plus autorisées.</p>


                    </div>
                </div>

            </div>
        </div>
    </section>


</main>
<!-- main-area-end -->

<!-- footer -->
@include('footer')
<!-- footer-end -->

<!-- JS here -->

</body>

</html>
