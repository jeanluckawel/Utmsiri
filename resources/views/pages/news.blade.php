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
    <!-- steps-area-end -->
    <!-- event-area -->
    <section class="event pt-20 pb-90 p-relative fix">
        <div class="animations-06"><img src="img/bg/an-img-06.png" alt="an-img-01"></div>
        <div class="animations-07"><img src="img/bg/an-img-07.png" alt="contact-bg-an-01"></div>
        <div class="animations-08"><img src="img/bg/an-img-08.png" alt="contact-bg-an-01"></div>
        <div class="animations-09"><img src="img/bg/an-img-09.png" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-relative">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>
                            Actualités
                        </h2>

                    </div>
                </div>

            </div>
            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('storage/' . $blog->image) }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
{{--                            date --}}
                            <div class="date"><strong>{{ $blog->created_at->format('d') }}</strong> {{ $blog->created_at->format('M') }}, {{ $blog->created_at->format('Y') }}</div>
                            <h3><a href="#">{{ $blog->title }}</a></h3>
                            <p>{{ $blog->content }}</p>
                            <div class="time">{{ $blog->created_at->format('h - m - s') }}<i class="fal fa-long-arrow-right"></i> <strong>{{ $blog->author }}</strong></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- search-area-end -->
    <!-- admission-area -->



</main>
<!-- main-area-end -->

<!-- footer -->
@include('footer')
<!-- footer-end -->

<!-- JS here -->

</body>

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 13:24:12 GMT -->
</html>
