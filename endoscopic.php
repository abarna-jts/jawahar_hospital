<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/sevice-style.css">
<style>
   .hp_wrapper .blg_img {
    position: relative;
    overflow: hidden;
    height: 310px;
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
      <div class="inner_banner" style="background-image: url(assets/images/services_banner.png);">
         <div class="container-fluid text-center">
            <div class="inner_bantext">
               <h2>Endoscopic Spinal Surgeries</h2>
            </div>
            <div class="breadcrumb-menu">
               <ul>
                  <li><a href="index-2.html">Home</a></li>
                  <li><a href="javascript:;">Services</a></li>
                  <li class="active">Endoscopic Spinal Surgeries</li>
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
                     <h5 class="widget-title">Other Services</h5>
                     <ul>
                        <li><a href="accident_emergency.php">Accident / Emergency Care <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="twin_operation.php">Twin Operation Theatre <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="fracture_clinic.php">24 hrs Fracture Clinic <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="laproscopic.php">Laproscopic-key Hole Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="arthroscopy_surgeries.php">Arthroscopy Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="Trauma.php">Head Injury Care/Poly Trauma <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="kidney_stone.php">Laser Kidney Stone Center <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="endoscopic.php">Endoscopic Spinal Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="joint_replacement.php">Joint Replacement Surgeries <img src="assets/images/circle-next-arrow.svg"></a></li>
                        <li><a href="intramedullary_nailing.php">Intramedullary nailing <img src="assets/images/circle-next-arrow.svg"></a></li>
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
                           <img src="assets/images/spinal_surgery.png">
                        </div>
                        <div class="blog_details">
                           <h4>Endoscopic Spinal Surgeries</h4>
                           <p> At Jawahar Hospital, we specialize in Endoscopic Spinal Surgeries, a minimally invasive procedure
                             designed to treat spinal conditions with precision and care. This advanced technique ensures reduced 
                             pain, faster recovery, and minimal disruption to daily life, providing patients with effective and
                              long-lasting relief.</p>
                           <ul>
                              <li><strong>Minimally Invasive Approach: </strong> Small incisions result in less pain, minimal scarring, and quicker recovery times.</li>
                              <li><strong>Expert Spine Surgeons:  </strong>Our highly skilled team specializes in treating a wide range of spinal conditions.</li>
                              <li><strong>Advanced Technology: </strong> Equipped with cutting-edge endoscopic tools for accurate diagnosis and treatment.</li>
                              <li><strong>Comprehensive Treatment:  </strong>Effective for conditions like herniated discs, spinal stenosis, and nerve compression.</li>
                              <li><strong>Shorter Hospital Stays: </strong>Most patients return home the same day or within 24 hours..</li>
                           </ul>
                           <p>At Jawahar Hospital, we are committed to improving your spinal health with advanced techniques, ensuring a pain-free and active lifestyle.</p>

                           
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