@extends('layout.guest')

@section('content')
@include('partial.nav')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center m-0">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h1>Browse for amazing product here!</h1>
                <h2>We are selling any product with high quality and best price for your sports needs</h2>
                <div>
                    <div class="text-center text-lg-start">
                        <a href="{{ route('shop') }}"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center py-4">
                            <span>Start Shopping</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 hero-img ">
                <img src="{{ asset('img/sepatu.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
<!-- ======= Services Section ======= -->
<section id="services" class="services">

    <div class="container">

        <header class="section-header">
            <p>Values</p>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi blanditiis dolorum reprehenderit,
                reiciendis doloremque praesentium voluptatibus cumque, vitae molestiae eos quisquam, aut voluptatem
                provident aliquid accusantium laudantium hic placeat nesciunt.</h3>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="service-box blue">
                    <i class='bx bx-star icon'></i>
                    <h3>High Quality</h3>
                    <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                        perferendis tempore et consequatur.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-box orange">
                    <i class='bx bx-dollar icon'></i>
                    <h3>Best Price</h3>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non
                        ut nesciunt dolorem.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-box green">
                    <i class='bx bxs-truck icon'></i>
                    <h3>Fast Delivery</h3>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                        adipisci eos earum corrupti.</p>
                </div>
            </div>


        </div>

    </div>

</section><!-- End Services Section -->
<!-- ======= Portfolio Section ======= -->
{{-- <section id="portfolio" class="portfolio m-0">

        <div class="container" >

          <header class="section-header">
            <p>Product</p>
            <h3>Check Our New Product</h3>

          </header>

          <div class="row" >
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Shoes</li>
                <li data-filter=".filter-card">Kaos Kaki</li>
                <li data-filter=".filter-web">T-Shirt</li>
              </ul>
            </div>
          </div>

          <div class="row gy-4 portfolio-container" >
            @for ($i=0;$i<3;$i++)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{ asset('img/Product/shoes.jpg') }}" class="img-fluid" alt="">
<div class="portfolio-info">
    <h4>Nike Shoes</h4>
    <p>Rp. 500.000</p>
    <div class="portfolio-links">
        <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i
                class='bx bx-add-to-queue'></i></a>
        <a href="/shop/1" title="More Details"><i class='bx bx-info-circle'></i></a>
    </div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <div class="portfolio-wrap">
        <img src="{{ asset('img/Product/sock.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Jordan Socks</h4>
            <p>Rp. 50.000</p>
            <div class="portfolio-links">
                <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i
                        class='bx bx-add-to-queue'></i></a>
                <a href="/shop/1" title="More Details"><i class='bx bx-info-circle'></i></a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
        <img src="{{ asset('img/Product/tshirt.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Jordan T-Shirt</h4>
            <p>Rp. 60.000</p>
            <div class="portfolio-links">
                <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i
                        class='bx bx-add-to-queue'></i></a>
                <a href="/shop/1" title="More Details"><i class='bx bx-info-circle'></i></a>
            </div>
        </div>
    </div>
</div>
@endfor

</div>

</div>

</section><!-- End Portfolio Section --> --}}
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">

    <div class="container">

        <header class="section-header">
            <p>F.A.Q</p>
            <h3>Frequently Asked Questions</h3>

        </header>

        <div class="row">
            <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                Bagaimana cara memesan produk ?
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                Bagaimana cara melakukan pembayaran pesananan?
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                Metode pembayaran apa saja yang dapat digunakan?
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2-content-1">
                                Metode pengiriman apa saja yang tersedia?
                            </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2-content-2">
                                Bagaimana cara untuk melakukan login kedalam website?
                            </button>
                        </h2>
                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End F.A.Q Section -->



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">


    <div class="footer-top">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-4 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="assets/img/logo.png" alt="">
                        <span>FlexStart</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Top Category</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Sepatu</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">T-Shirt</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Kaos Kaki</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Sleeve Pad</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Rigid Tape</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Banjarbaru, Kalimantan Selatan<br>
                        Indonesia <br><br>
                        <strong>Phone:</strong> +62 812-5034-8410<br>
                        <strong>Email:</strong> nicestoreid@gmail.com<br>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class='bx bx-up-arrow-alt'></i></i></a>
@endsection
