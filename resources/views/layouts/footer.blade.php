<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <a href="{{ route('home') }}"><img  style="object-fit: cover; height: 90px; width: 90px" src="assets/img/2024/logo.png" alt="Logo"></a>
                        <p>
                            Société commerciale à responsabilité limitée, œuvrant dans le domaine agricole.
                        </p>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Nos liens</h4>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="/#mission">Mission</a>
                            </li>
                            <li>
                                <a href="/#about">A propos</a>
                            </li>
                            <li>
                                <a href="/#objectif">Objectif</a>
                            </li>
                            <li>
                                <a href="/#expertise">Expertise</a>
                            </li>
                            <li>
                                <a href="{{ Request::is('/') ? route('realization'):'#' }}">Realisations</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item recent-post">
                        <h4 class="widget-title">Queques produits</h4>
                        <ul>
                            <li>
                                <div class="thumb">
                                        <img src="assets/img/2024/1.jpg" alt="img">
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                        <img src="assets/img/2024/2.jpg" alt="img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contact</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <strong>Adresse :</strong>
                                    30, boulevard M’siri, C.Kampemba/Lubumbashi.
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email:</strong>
                                    <a href="mailto:sisinamulimajirdc1@gmail.com">sisinamulimajirdc1@gmail.com</a>
                                    <br>
                                    <a href="mailto:ramazanisisinamulimaji@gmail.com">ramazanisisinamulimaji@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <strong>Téléphone:</strong>
                                    <a href="tel:+243813535732">+243 813535732</a>
                                    <br>
                                    <a href="tel:+243993322278">+243 993322278</a>
                                    <br>
                                    <a href="tel:+243855729241">+243 855729241</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Single Itme -->

            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright 2024. Made by  <a href="https://smirltech.com">SmirlTech</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
</footer>