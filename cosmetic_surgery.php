<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/sevice-style.css">
<style>
    .hp_wrapper .blg_img {
        position: relative;
        overflow: hidden;
        height: 370px;
    }
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DRP84Q28NE"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-DRP84Q28NE');
</script>
<main class="main_wrapper">
    <section class="section_banner">
        <div class="inner_banner" style="background-image: url(assets/images/specialities_banner.png);">
            <div class="container-fluid text-center">
                <div class="inner_bantext">
                    <h2>Cosmetic-surgery</h2>
                </div>
                <div class="breadcrumb-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Specialities</a></li>
                        <li class="active">Cosmetic-surgery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="servdetail-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget widget-categories">
                            <h5 class="widget-title">Other Specialities</h5>
                            <ul>
                                <li><a href="paediatrician.php">Paediatrician <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="pulmonology.php">Pulmonologist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="anaesthesia.php">Anaesthesia <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="ortho.php">Ortho Specialist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="cardiologist.php">Cardiologist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="diabetology.php">Diabetologist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="child_specialist.php">Child Specialist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="Neurologist.php">Neurologists <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="general_surgeries.php">General Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="joint-replacement.php">Joint Replacement<img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="nephorologist.php">Nephrologist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="obstetrics.php">Obstetrics &amp; Gynaecology <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="physiotherapist.php">Physiotherapist <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="oral_maxillo.php">Oral &amp; Maxillo Facial Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="pulmonology_services.php">Pulmonology Services <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="gastroenterologist.php">Gastroenterologiest <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="trauma_specialist.php">Trauma <img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="kidney_transplant.php">Kidney Transplant Surgeons<img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="cosmetic_surgery.php">Cosmetic-surgery<img src="assets/images/circle-next-arrow.svg"></a></li>
                                <li><a href="ent_surgery.php">ENT Surgeons<img src="assets/images/circle-next-arrow.svg"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 scleft">
                    <div class="service-content">
                        <div class="hp_wrapper">

                            <div class="blg_img">
                                <img src="assets/images/cosmetic_surgery.jpg">
                            </div>
                            <div class="blog_details">
                                <h4>Cosmetic Surgery Specialities</h4>
                                <p>At Jawahar Hospital, we offer a wide range of advanced cosmetic surgery services designed to enhance your appearance and boost your confidence. Our team of skilled surgeons combines expertise with state-of-the-art technology to deliver exceptional results tailored to your unique needs.</p>
                                <ul>
                                    <li><strong>Experienced Cosmetic Surgeons:</strong> Highly trained specialists with extensive expertise in aesthetic and reconstructive procedures.</li>
                                    <li><strong>Advanced Surgical Techniques:</strong> Cutting-edge methods to ensure precision, safety, and natural-looking outcomes.</li>
                                    <li><strong>Wide Range of Services:</strong> From facial rejuvenation and body contouring to reconstructive surgeries, we address all your cosmetic needs.</li>
                                    <li><strong>Personalized Treatment Plans:</strong> Tailored solutions to meet individual goals and expectations for a confident, refreshed look.</li>
                                    <li><strong>Post-Surgery Care:</strong> Comprehensive follow-up and support to ensure optimal recovery and long-term satisfaction.</li>
                                </ul>
                                <p>At Jawahar Hospital, we are dedicated to helping you achieve your aesthetic goals with compassion, precision, and the highest standards of care.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<?php include("footer.php"); ?>


<div class="contact-right clearfix hidden-xs">
    <a href="javaScript:void(0);" class="contact-btn  text-uppercase" id="flotenqform" onclick="enquire()">
        <i class="icon-pencil-squared" aria-hidden="true"></i> Enquire Now</a>
    <div class="contact-slide">
        <h3 class="title-sm">Let Our Experts Call You Back</h3>
        <form action="enquire_mail.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="number" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <input type="text" name="url" class="form-control" placeholder="URL" style="display:none">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" style="resize:none" required></textarea>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block" name="contactfrm">
            </div>
        </form>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="../cdn.jsdelivr.net/gh/michalsnik/aos%402.0.4/dist/aos.js"></script>
<script>
    AOS.init({
        once: !0,
        mirror: !0,
        duration: 500,
        easing: "ease-out-quart",
        disable: 'mobile'
    });
</script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/megamenu.js"></script>
<script>
    $('.health_update_slider').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

<div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup">
    <div class="custom-popup__holder js-custom-popup-holder"><span class="custom-popup__close js-close-popup"></span>
        <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="formbold-form-wrapper">
                <form action="appointment_mail.php" method="POST">
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label"> Full Name </label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Full Name"
                            class="formbold-form-input"
                            required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                        <input
                            type="number"
                            name="phone"
                            id="phone"
                            placeholder="Enter your phone number"
                            class="formbold-form-input"
                            required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label"> Email Address </label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Enter your email"
                            class="formbold-form-input"
                            required />
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5 w-full">
                                <label for="date" class="formbold-form-label"> Date </label>
                                <input
                                    type="date"
                                    name="date"
                                    id="date"
                                    class="formbold-form-input"
                                    required />
                            </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                                <label for="time" class="formbold-form-label"> Time </label>
                                <input
                                    type="time"
                                    name="time"
                                    id="time"
                                    class="formbold-form-input"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="formbold-mb-5 formbold-pt-3">
                        <label class="formbold-form-label">
                            Address Details
                        </label>
                        <div class="flex flex-wrap formbold--mx-3">
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input
                                        type="text"
                                        name="address"
                                        id="address"
                                        placeholder="Enter Address"
                                        class="formbold-form-input"
                                        required />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input
                                        type="text"
                                        name="city"
                                        id="city"
                                        placeholder="Enter city"
                                        class="formbold-form-input"
                                        required />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input
                                        type="text"
                                        name="state"
                                        id="state"
                                        placeholder="Enter state"
                                        class="formbold-form-input"
                                        required />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input
                                        type="text"
                                        name="post_code"
                                        id="post_code"
                                        placeholder="PinCode"
                                        class="formbold-form-input"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="formbold-btn">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>


<script>
    function customPopup() {

        let $btnShowPopup = $('.js-open-popup');
        let $btnClosePopup = $('.js-close-popup');
        let $popup = $('.js-custom-popup');

        $btnShowPopup.on('click', function() {

            let targetPopup = $(this).attr('data-target');
            $("[data-popup=" + targetPopup + "]").addClass('is-active');

        });

        $btnClosePopup.on('click', function() {
            $(this).parents('.is-active').removeClass('is-active');
        });

        $popup.on('click', function(event) {
            if (!$(event.target).closest('.js-custom-popup-holder').length && !$(event.target).is('js-custom-popup')) {
                if ($popup.hasClass('is-active')) {
                    $popup.removeClass('is-active');
                }
            }
        });

    }
    customPopup();
</script>

</body>

<!-- Mirrored from www.ravinahospital.com/visitor-hours.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 05:09:52 GMT -->

</html>