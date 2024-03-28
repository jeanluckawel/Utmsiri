<!doctype html>
<html class="no-js" lang="zxx">


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

    <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
        <div class="animations-02"><img src="{{ asset('images/123518964_1049164255554025_3671555435746405338_o.jpg') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ asset('images/123529546_1049166755553775_416203239047421444_o.jpg') }}" alt="img">
                        <div class="about-text second-about">
                            <span>25 <sub>+</sub></span>
                            <p>Years of Experience</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h5><i class="fal fa-graduation-cap"></i> A Propos</h5>
                            <h2>Pourquoi l'Université Technique M'siri ?</h2>
                        </div>
                        <p>Afin de comprendre les origines, la dénomination, les facultés organisées de/ et à l’Université Technique M’siri 1er et son impact sur le développement de la province de Lualaba en général et du district de Lubudi et celui de Kolwezi en particulier, il est indispensable de recourir à un bref rappel sur la situation géographique.</p>
                        {{--                         --}}
                        {{--                        <div class="slider-btn mt-20">--}}
                        {{--                            <a href="about.html" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>--}}
                        {{--                        </div>--}}
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

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 13:24:12 GMT -->
</html>
