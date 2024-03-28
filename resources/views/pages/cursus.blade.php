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

<br>
<main>
    <!-- slider-area -->
    <!-- steps-area -->
    <section class="steps-area p-relative p-5"  style="background-color: #032e3f;">
        <div class="animations-10"><img src="img/bg/an-img-10.png" alt="an-img-01"></div>
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title mb-35 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>Facultés organisées</h2>
                    </div>
                    <ul class="pr-20">
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Préparatoire (Pré-U) </h3>
                                    <p>Tout étudiant, qui a obtenu moins de 60 pourcent aux examens d’Etat, doit impérativement suivre les cours de mis à niveau et de cadrages pour éviter une désorientation lors de choix d’une faculté.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon02.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Faculté des Sciences Hospitalières</h3>
                                    <p>L’abondance de pluies qui provoquent la multiplication de moustiques lesquels sont à la base des maladies telles que la malaria, le cholera, fièvre typhoïde etc.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Faculté de Géo-mine</h3>
                                    <p>Il a fallu attendre l’arrivé au trône du 8em      successeur de M’siri, Mwami M’siri Mwenda Bantu Kaneranera Godefroid Munongo pour que les autres domaines soient finalement connus dans le grand Katanga</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="step-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ asset('images/corses.jpg') }}" alt="class image">
                    </div>

                </div>



            </div>

        </div>
    </section>
    <!-- steps-area-end -->
    <!-- event-area -->


    <!-- search-area-end -->
    <!-- admission-area -->



</main>

<br>
<!-- main-area-end -->

<!-- footer -->
@include('footer')
<!-- footer-end -->


</body>

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 13:24:12 GMT -->
</html>
