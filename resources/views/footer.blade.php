<footer class="footer-bg footer-p pt-90" style="background-color: #125875; background-image: url(img/bg/footer-bg.png);">
    <div class="footer-top pb-70">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>A propos</h2>
                        </div>
                        <div class="f-contact">
                            <p>Afin de comprendre les origines, la dénomination, les facultés organisées de/ et à l’Université Technique M’siri 1er et son impact sur le développement</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Nos Liens</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{ route('/') }}">Accueil</a></li>
                                <li><a href="{{ route('cursus') }}"> Cursus</a></li>
                                <li><a href="{{ route('news') }}">Actualités</a></li>
                                <li><a href="{{ route('about') }}">À propos</a></li>
                                <li><a href="#">Cours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Galerie</h2>
                        </div>
                        <div class="recent-blog-footer">
                            <ul>
                                <li>
                                    <div class="thum"> <img src="{{ asset('images/123554738_1049170792220038_1374060645322425100_o-1.jpg') }}" alt="img"></div>
                                    <div class="text"> <a href=#">comprendre les origines, la dénomination</a>
                                     </div>
                                </li>

                                <li>
                                    <div class="thum"> <img src="{{ asset('images/123764522_1049165405553910_853396159264557082_n.jpg') }}" alt="img"></div>
                                    <div class="text"> <a href="#">comprendre les origines, la dénomination, </a>
                                    </div>
                                </li>

                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Contact </h2>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li>
                                    <i class="icon fal fa-phone"></i>
                                    <span><a href="#">+243 974 453 545</a><br><a href="#">+243 840 843 195</a></span>
                                </li>
                                <li><i class="icon fal fa-envelope"></i>
                                    <span>
                                            <a href="#">info@msiri.com</a>
                                       <br>
                                       <a href="#">support@msiri.com</a>
                                       </span>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
