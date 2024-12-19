<style>
  @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap');
  *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
     font-family: 'Titillium Web', sans-serif;
      font-weight: 400;
  
}

.wrapper-1{
  width:100%;
/*  height:100vh;*/
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
  font-family: 'Titillium Web', sans-serif;
  font-size:3em;
  letter-spacing:3px;
  color:#000;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
    margin: 0;
    font-size: 16px;
    color: #6f6f6f;
    font-family: 'Titillium Web', sans-serif;
    line-height: 26px;
    font-weight: 500;
}


.btn-style-one {
  position: relative;
  display: inline-block;
  text-align: center;
  letter-spacing: 0.05em;
  background: #ff8600;
  color: #222429;
  border-radius: 5px;
  overflow: hidden;
  transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  margin-top: 20px;
}

.btn-style-one .btn-title {
    position: relative;
    display: block;
    font-size: 1em;
    line-height: 30px;
    font-weight: 400;
    letter-spacing: .1em;
    padding: 9px 30px 10px;
    z-index: 1;
}

.btn-style-one:hover {
  background: #ffaa17;
  color: #ffffff;
}

.btn-style-one .btn-curve {
  position: absolute;
  right: -15px;
  top: 0;
  width: 26px;
  height: 100%;
  background: #222429;
  opacity: 0.2;
  z-index: 0;
  transform: skewX(-22deg);
  transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
}

.btn-style-one:hover .btn-curve {
  opacity: 1;
  right: 0;
  width: 100%;
  transform: skewX(0deg);
}
a, a:hover{
  text-decoration: none !important;
}
.menuhover_style1 {
    font-weight: 500;
    border: solid 2px #ff8600;
    outline: 0;
    padding: 14px 40px;
    font-size: 18px;
    border-radius: 0.35rem;
    position: relative;
    cursor: pointer;
    color: #FFFFFF;
    display: inline-block;
    margin-top: 30px;
    background: #ff8600;
}

.menu-button .menuhover_style1:hover {
    color: #000;
}
.menuhover_style1:hover::after {
    top: -0.4rem;
    left: -0.4rem;
    width: calc(100% + 0.4rem * 2);
    height: calc(100% + 0.4rem * 2);
}

.success-checkmark {
  width: 80px;
  height: 115px;
  margin: 0 auto;
}
.success-checkmark .check-icon {
  width: 80px;
  height: 80px;
  position: relative;
  border-radius: 50%;
  box-sizing: content-box;
  border: 4px solid #4CAF50;
}
.success-checkmark .check-icon::before {
  top: 3px;
  left: -2px;
  width: 30px;
  transform-origin: 100% 50%;
  border-radius: 100px 0 0 100px;
}
.success-checkmark .check-icon::after {
  top: 0;
  left: 30px;
  width: 60px;
  transform-origin: 0 50%;
  border-radius: 0 100px 100px 0;
  animation: rotate-circle 10s ease-in;
}
.success-checkmark .check-icon::before, .success-checkmark .check-icon::after {
  content: "";
  height: 100px;
  position: absolute;
  background: #FFFFFF;
  transform: rotate(-45deg);
}
.success-checkmark .check-icon .icon-line {
  height: 5px;
  background-color: #4CAF50;
  display: block;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
}
.success-checkmark .check-icon .icon-line.line-tip {
  top: 46px;
  left: 14px;
  width: 25px;
  transform: rotate(45deg);
  animation: icon-line-tip 0.75s;
}
.success-checkmark .check-icon .icon-line.line-long {
  top: 38px;
  right: 8px;
  width: 47px;
  transform: rotate(-45deg);
  animation: icon-line-long 0.75s;
}
.success-checkmark .check-icon .icon-circle {
  top: -4px;
  left: -4px;
  z-index: 10;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: absolute;
  box-sizing: content-box;
  border: 4px solid rgba(76, 175, 80, 0.5);
}
.success-checkmark .check-icon .icon-fix {
  top: 8px;
  width: 5px;
  left: 26px;
  z-index: 1;
  height: 85px;
  position: absolute;
  transform: rotate(-45deg);
  background-color: #FFFFFF;
}

@keyframes rotate-circle {
  0% {
    transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
  }
}
@keyframes icon-line-tip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}
@keyframes icon-line-long {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  /*box-shadow: 4px 8px 40px 8px rgb(30 94 106 / 9%);*/
}
  
}
@media (max-width: 767.98px){
  .wrapper-2{
  padding :5px;
  text-align:center;
}
.btn-style-one .btn-title{
    font-size: 0.8em;
    padding: 7px 25px 6px;
  }
}
</style>
<div class="content">
  <div class="wrapper-1">
    <div class="wrapper-2">
      <div class="success-checkmark">
  <div class="check-icon">
    <span class="icon-line line-tip"></span>
    <span class="icon-line line-long"></span>
    <div class="icon-circle"></div>
    <div class="icon-fix"></div>
  </div>
</div>
      <h1>Thank you!</h1>
      <p>The form was submitted successfully. We'll get back with you shortly!</p>
      <!-- <div class="link-box mt-3">
                     <a class="theme-btn btn-style-one" href="index.php">
                     <i class="btn-curve"></i>
                     <span class="btn-title">Go Home</span>
                     </a>
      </div> -->
      <a class="menuhover_style1" href="#" onclick="goBack()">Go Back</a>
    </div>
</div>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>