<?php include("header.php"); ?>


<style>
   .testimonial_item {
   display: flex;
   align-items: center;
   justify-content: center;
   gap: 20px; /* Spacing between text and image */
}

.testimonial {
   width: 500px;
   padding: 20px;
}

.person_img {
    position: relative;
    width: 474px;
    height: 444px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.person_img::before {
    content: "";
    position: absolute;
    top: 0;
    left: 35px;
    width: 100%;
    height: 100%;
    background-image: url(assets/images/pattern-bg.svg);
    background-size: cover;
    background-position: center;
    z-index: 0;
    border-radius: 10px;
}
.person_img .testimonial_person {
    position: absolute;
    z-index: 1;
    /* top: 1px; */
    left: 44px;
    width: 340px;
    height: 327px;
    border-radius: 10px;
    
}
.owl-carousel .owl-item img {
    display: block;
    width: 71% !important; 
}
/* Style for the rating stars */
.rating {
         display: flex;
         flex-direction: row-reverse;
         justify-content: start;
      }

      .rating input {
         display: none; /* Hide radio buttons */
      }

      .rating label {
         font-size: 2rem; /* Adjust star size */
         color: #ffcc00; /* Default star color */
         cursor: pointer;
         transition: color 0.3s ease;
      }

      .rating input:checked ~ label,
      .rating input:hover ~ label,
      .rating label:hover ~ label {
         color: #ffcc00; /* Highlighted star color */
      }
      .tech_titile {
         color: #1c6125;
      }

      @media(max-width:600px){
         .testimonial_item {
            display: block;
         }
         .testimonial {
            width: 100%;
            padding: 0px 20px;
         }
         .person_img::before {
            display: none;
         }
         .person_img {
            width: 100%;
            height: 340px;
         }
         .testimonial h4{
            font-size: 17px;
         }
         .testimonial p{
            margin-bottom: 0rem;
            text-align: justify;
         }
         .health_update .owl-carousel .owl-nav button {
            top: 60% !important;
         }
      }
</style>

<link rel="stylesheet" type="text/css" href="assets/css/about-us.css">


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
      <div class="inner_banner" style="background-image: url(assets/images/value_banner.png);">
         <div class="container-fluid text-center">
            <div class="inner_bantext">
               <h2>Our Values</h2>
            </div>
         </div>
      </div>
   </section>


   <section class="overvalue_sec">
      <div class="container">
         <div class="row patient_stories_wrapper">
            <div class="col-md-12">
               <h2 class="text-left tech_titile mb-3 mb-md-5">OUR VALUES</h2>
               <h4>We Care:</h4>
               <p>To evolve as world class medical facility delivering quality health care by employing the best practices and technology. The organization shall be a source of pride to all those associated with it.</p>
               <h4>Safety First:</h4>
               <p>We believe the safety of the highest standard has to be ensured to the patients and families who trust us. Safety first and delivering high quality healthcare is of paramount importance to us.</p>
               <h4>Excellence at all times:</h4>
               <p>Striving for excellence at all times. Nothing is taken for granted. Embracing the best of technologies by our excellent team goes a long way in ensuring service levels of the highest standards.</p>
            </div>
         </div>
      </div>
   </section>

   

   <section class="health_update">
      <div class="container">
         <h2 class="text-center h3-tit mb-4 mb-md-5">PATIENT TESTIMONIALS</h2>
         <div class="owl-carousel owl-theme health_update_slider">
            <div class="item">
               <div class="testimonial_item">
                  <div class="testimonial">
                     <p>"Very friendly doctors and neatly maintained hospital. I came for the treatment of my mother, and the way
                         they took care from beginning to end was amazing! Very professional and friendly ☺️. I would absolutely
                          recommend with no second thoughts. Saying 'Thanks' is not enough for their service!!!"</p>
                          <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5">
                              <label for="star5" title="5 stars">★</label>
                              
                              <input type="radio" id="star4" name="rating" value="4">
                              <label for="star4" title="4 stars">★</label>
                              
                              <input type="radio" id="star3" name="rating" value="3">
                              <label for="star3" title="3 stars">★</label>
                              
                              <input type="radio" id="star2" name="rating" value="2">
                              <label for="star2" title="2 stars">★</label>
                              
                              <input type="radio" id="star1" name="rating" value="1">
                              <label for="star1" title="1 star">★</label>
                           </div>
                     <h4>Sriram</h4>
                  </div>
                  <div class="person_img">
                     <img src="assets/images/profile-1.png" alt="" class="testimonial_person">
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="testimonial_item">
                  <div class="testimonial">
                     <p>"Received excellent care, Dr. Jawahar listened to me attentively did through exam and him and his
                         staff gave me excellent treatment, he visited me every day during the hospital stay and reassured me and that made me feel  better
                        Overall Excellent care providers. All down to dedicated people (Staff) delivering direct and indirect care."</p>
                        <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5">
                              <label for="star5" title="5 stars">★</label>
                              
                              <input type="radio" id="star4" name="rating" value="4">
                              <label for="star4" title="4 stars">★</label>
                              
                              <input type="radio" id="star3" name="rating" value="3">
                              <label for="star3" title="3 stars">★</label>
                              
                              <input type="radio" id="star2" name="rating" value="2">
                              <label for="star2" title="2 stars">★</label>
                              
                              <input type="radio" id="star1" name="rating" value="1">
                              <label for="star1" title="1 star">★</label>
                           </div>

                     <h4>Anshitha</h4>
                  </div>
                  <div class="person_img">
                     <img src="assets/images/profile-2.png" alt="" class="testimonial_person">
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="testimonial_item">
                  <div class="testimonial">
                     <p>"Mom was admitted for jaundice. And she was cured. Very caring staffs. They also co ordinated well 
                        for my insurance reimbursement successfully."</p>
                        <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5">
                              <label for="star5" title="5 stars">★</label>
                              
                              <input type="radio" id="star4" name="rating" value="4">
                              <label for="star4" title="4 stars">★</label>
                              
                              <input type="radio" id="star3" name="rating" value="3">
                              <label for="star3" title="3 stars">★</label>
                              
                              <input type="radio" id="star2" name="rating" value="2">
                              <label for="star2" title="2 stars">★</label>
                              
                              <input type="radio" id="star1" name="rating" value="1">
                              <label for="star1" title="1 star">★</label>
                           </div>
                     <h4>Saishanmugapriya</h4>
                  </div>
                  <div class="person_img">
                     <img src="assets/images/profile-3.png" alt="" class="testimonial_person">
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="testimonial_item">
                  <div class="testimonial">
                     <p>"I have severe pain in my legs for a long time. I went to many doctors. Money is spent. No solution found.
                         Finally I came to Dr. Jawahar sir. After reading all the reports, he diagnosed me with arthritis in my 
                         leg and gave me the right medicine. Now I can walk well. I go walking every day. Thanks to jawahar sir
                           and jawahar hospital."</p>
                           <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5">
                              <label for="star5" title="5 stars">★</label>
                              
                              <input type="radio" id="star4" name="rating" value="4">
                              <label for="star4" title="4 stars">★</label>
                              
                              <input type="radio" id="star3" name="rating" value="3">
                              <label for="star3" title="3 stars">★</label>
                              
                              <input type="radio" id="star2" name="rating" value="2">
                              <label for="star2" title="2 stars">★</label>
                              
                           </div>
                     <h4>Saravanan Ragavendran</h4>
                  </div>
                  <div class="person_img">
                     <img src="assets/images/profile-4.png" alt="" class="testimonial_person">
                  </div>
               </div>
            </div>
            
            

         </div>
      </div>
   </section>

   <section class="git-outer-wrapper">
      <div class="get_in_touch">
         <div class="container text-center">
            <h2 class="mb-3">Let us help you find the right doctor</h2>
            <p class="mb-3">Feel free to get in touch with us</p>
            <a href="javascript:;" class="btn-style1 slide_from_left">Get in touch</a>
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
            items: 1
         },
         1000: {
            items: 1
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
                   required
                 />
               </div>
               <div class="formbold-mb-5">
                 <label for="phone" class="formbold-form-label"> Phone Number </label>
                 <input
                   type="number"
                   name="phone"
                   id="phone"
                   placeholder="Enter your phone number"
                   class="formbold-form-input"
                   required
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
                   required
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
                       required
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
                       required
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
                         name="address"
                         id="address"
                         placeholder="Enter Address"
                         class="formbold-form-input"
                         required
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
                         required
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
                         required
                       />
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
                         required
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

<!-- Mirrored from www.ravinahospital.com/our-values.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 05:09:36 GMT -->

</html>