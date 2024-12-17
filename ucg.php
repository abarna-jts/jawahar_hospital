<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/sevice-style.css">
<style>
   .hp_wrapper .blg_img {
    position: relative;
    overflow: hidden;
    height: 346px;
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
      <div class="inner_banner" style="background-image: url(assets/images/facilities_banner.png);">
         <div class="container-fluid text-center">
            <div class="inner_bantext">
               <h2>UCG Special Studies</h2>
            </div>
            <div class="breadcrumb-menu">
               <ul>
                  <li><a href="index-2.html">Home</a></li>
                  <li><a href="javascript:;">Facilities</a></li>
                  <li class="active">UCG Special Studies</li>
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
                     <h5 class="widget-title">Other Facilities</h5>
                     <ul>
                        <li><a href="digital_x-ray.php">Digital X-Ray <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="lab.php">Computerised Lab <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="ecg.php">Echo/ECG <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="Ultrasonogram.php">Ultrasonogram <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="doppler_studies.php">Doppler Studies <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="ucg.php">UCG Special Studies <img src="assets/images/circle-next-arrow.svg"></a></li>
                     </ul>
                  </div>
                  <div class="service-details-contact-info">
                     <div class="sidebar-info-box-bg" style="background-image: url(assets/images/sidebar-info-box-bg.jpg);"></div>
                     <h5>Need Help?</h5>
                     <p>At Jawahar Hospital, Compassion and treatment from a patient perspective is the key</p>
                     <a href="javascript:;">044 - 46040119</a>
                  </div>
               </div>
            </div>
            <div class="col-md-8 scleft">
               <div class="service-content">
                  <div class="hp_wrapper">
                     
                        <div class="blg_img">
                           <img src="assets/images/ucg.png">
                        </div>
                        <div class="blog_details">
                           <h4>UCG Special Studies</h4>
                           <p>At Jawahar Hospital, we provide UCG (Ultracardiography) special studies to assess and monitor 
                            heart health with precision. Our advanced imaging techniques offer the following benefits:</p>
                           <ul>
                              <li><strong>Detailed Heart Evaluation:</strong>UCG provides clear images of the heart’s structure and function, 
                              helping detect abnormalities such as valve disorders, heart enlargement, or blood flow issues.</li>
                              <li><strong>Non-Invasive and Safe:</strong>The procedure uses ultrasound waves, ensuring a painless 
                              and risk-free experience for patients of all ages.</li>
                              <li><strong>Real-Time Results: </strong>  Instant and precise results allow cardiologists to evaluate 
                              heart function in real-time, ensuring timely diagnosis and care.</li>
                              <li><strong>Accurate Diagnosis: </strong>Ideal for assessing heart performance, identifying cardiac
                               conditions, and planning effective treatment strategies.</li>
                           </ul>
                           <p>With state-of-the-art technology and expert cardiologists, our UCG special studies offer comprehensive 
                            cardiac assessments to ensure the best outcomes for heart health.</p>

                           
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
      <form action="https://www.ravinahospital.com/backend.php" method="post">
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
             <form action="https://formbold.com/s/FORM_ID" method="POST">
               <div class="formbold-mb-5">
                 <label for="name" class="formbold-form-label"> Full Name </label>
                 <input
                   type="text"
                   name="name"
                   id="name"
                   placeholder="Full Name"
                   class="formbold-form-input"
                 />
               </div>
               <div class="formbold-mb-5">
                 <label for="phone" class="formbold-form-label"> Phone Number </label>
                 <input
                   type="text"
                   name="phone"
                   id="phone"
                   placeholder="Enter your phone number"
                   class="formbold-form-input"
                 />
               </div>
               <div class="formbold-mb-5">
                 <label for="email" class="formbold-form-label"> Email Address </label>
                 <input
                   type="email"
                   name="email"
                   id="email"
                   placeholder="Enter your email"
                   class="formbold-form-input"
                 />
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
                     />
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
                     />
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
                         name="area"
                         id="area"
                         placeholder="Enter area"
                         class="formbold-form-input"
                       />
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
                       />
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
                       />
                     </div>
                   </div>
                   <div class="w-full sm:w-half formbold-px-3">
                     <div class="formbold-mb-5">
                       <input
                         type="text"
                         name="post-code"
                         id="post-code"
                         placeholder="Post Code"
                         class="formbold-form-input"
                       />
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

$btnShowPopup.on('click', function () {

   let targetPopup = $(this).attr('data-target');
   $("[data-popup=" + targetPopup + "]").addClass('is-active');

});

$btnClosePopup.on('click', function () {
   $(this).parents('.is-active').removeClass('is-active');
});

$popup.on('click', function (event) {
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