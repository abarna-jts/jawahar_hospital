<?php include("header.php"); ?>
  <style>
   .contactform {
    padding: 80px 0 100px;
}

.cntformwrapper {
    box-shadow: 0px 30px 60px 0px rgb(0 0 0 / 10%);
    padding: 50px;
    background: #ffecec;
    border-radius: 20px;
    
}
.contactform .row{
    justify-content: center;
}
.form_header{
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0px;
}
.cntformwrapper .form-control {
    height: 54px;
    background: #fbfbfb;
    color: #495057;
    font-size: 14px;
    font-weight: 500;
}
.cntformwrapper .btn-primary {
    color: #fff;
    background-color: #509459;
    border-color: #509459;
    display: inline-block;
    width: 160px !important;
    font-size: 16px;
    font-weight: 500;
    padding-top: 12px;
    padding-bottom: 12px;
    margin-top: 20px;
}
.cntformwrapper h3 {
    color: #ad0a09;
    font-size: 30px;
    font-weight: 700;
    text-transform: capitalize;
    margin-bottom: 40px;
}
.cntformwrapper textarea.form-control {
    height: 90px;
    resize: none;
}
.cntformwrapper .form-control {
    height: 54px;
    background: #fbfbfb;
    color: #70757d;
    font-size: 14px;
    font-weight: 500;
}
.cntformwrapper .btn-form{
    display: flex;
    align-items: center;
    justify-content: center;
}
  </style>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DRP84Q28NE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DRP84Q28NE');
</script>
      <main class="main_wrapper">
         <section class="section_banner">
            <div class="inner_banner" style="background-image: url(assets/images/career_banner.png);">
                <div class="container-fluid text-center">
                  <div class="inner_bantext">
                     <h2>Careers</h2>
                  </div>
               </div>
            </div>
         </section>

         <section class="contactform" id="contactform">
            <div class="container">
               
            <div class="row">
               
               <div class="col-md-8 cntformwrapper">
                  <h3>Send us a message</h3>
                  <form action="career_mail.php" method="post">
                    <div class="col-md-12 form_header">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-top:2rem;">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 form_header">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="number" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Your Specialization</label>
                            <select name="specialization" class="form-control" required>
                                <option value="" disabled selected>Specialization</option>
                                <option value="cardiology">Cardiology</option>
                                <option value="neurology">Neurology</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="orthopedics">Orthopedics</option>
                            </select>
                        </div>
                    </div>
                     
                     <div class="col-md-12">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birthday" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        
                        <div class="form-group">
                            <label>Upload your Resume</label>
                            <input type="file" name="resume" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                            <label>Tell us about your qualifications and experience</label>
                            <textarea class="form-control" name="message" required></textarea>
                        </div>
                     </div>
                     
                     <div class="col-md-12">
                        <div class="form-group mb-0 btn-form">
                        <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block" id="e_submit">
                        </div> 
                     </div>
                     
                  </form>
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
                        <input type="number" name="number" class="form-control" placeholder="Phone" required>
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
      once:!0,mirror:!0,duration:500,easing:"ease-out-quart",disable: 'mobile'
      });
</script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/megamenu.js"></script>
      <script>

         
         $('.health_update_slider').owlCarousel({
         loop:true,
         margin:0,
         dots:false,
         nav:true,
         autoplay:true,
         responsive:{
         0:{
         items:1
         },
         600:{
         items:2
         },
         1000:{
         items:3
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

<!-- Mirrored from www.ravinahospital.com/ravina-hospital.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 05:09:34 GMT -->
</html>