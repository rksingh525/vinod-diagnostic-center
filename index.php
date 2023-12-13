
<?php 
$msg="";
if (isset($_POST['book'])) {
include('db.php');
$name= $conn -> real_escape_string($_POST['name']);
$mobile= $conn -> real_escape_string($_POST['mobile']);
$email= $conn -> real_escape_string($_POST['email']);
$regdate= $conn -> real_escape_string($_POST['regdate']);


$sql = "INSERT INTO inquiry (name, mobile, email, regdate)
VALUES ('$name', '$mobile', '$email', '$regdate')";

if ($conn->query($sql) === TRUE) {
    $msg = "Appointment Request Has Been Sent Successfully";
} else {
   $msg = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-5448726897620756">
    <title>Vinod Diagnostic</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5448726897620756"
     crossorigin="anonymous"></script>
   

</head>
<body>
    
<!-- header section starts  -->
<header class="header">
<a href="#home">
    <img id = "header-logo" style="width: 40rem; align-self: flex-start;"  src="image/header logo.png" alt="logo">
</a>
   <!-- <a href="#" class="logo" style = "font-size:xx-large;" style="font-weight: 100"> <i class="fas image\"> </i> VINOD DIAGNOSTIC CENTER </a>
   -->
        <nav class="navbar"  >
         <a href="#download" class="btn"> Get report</a>
        
       <a href="https://vinoddiagnosticcenter.com/dashboard/main.php# " target="blank" rel="noopener noreferrer"class="btn">Dashboard</a>
        <a href="#book" class="btn">book</a>
        <a href="#services">services</a>
        <a href="#about">Why Us</a>
        <a href="#doctors">doctors</a>
        <!--<a href="#machines">machines</a>-->
        <a href="#career"> Career</a>
        <!--<a href="#review">reviews</a>-->
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">
     
    <div class="image">
    
        <img    src="image/home.png" alt=" " >
        
        
    </div>

    <div class="content"> <a href="#">
      
        <p> A NAME YOU CAN TRUST</p> 
        <h2> for the first time in Varanasi we are here  to serve you, with most advanced diagnostic machines ever
            in U.P. </h2>
    
        <a href="tel:+91-8881800778" class="btn"> contact us 24X7 <span class="fas fa-phone"></span> </a>
        
        <a href="#location" class="btn"   > locate us<span class="fas fa-map-marker-alt"></span> </a> 
    </div>

</section>

<!-- home section ends -->
<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Why to</span> Choose us </h1>

    <div class="row">

        <div class="image">
            <img src="image/whyus.gif" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Our Center is having state of art machine with digital AI Technology</p>
            <p> The center is owned and operated by a Radiologist 
                who is trained INDIA'S No.1 private hospital like MEDANTA THE MEDICITY (Gurugram), FORTIS MEMORIAL RESEARCH INSTITUTE (Gurugram), NANAVATI HOSPITAL(Mumbai). </p>
             <p> We have Corteus staff to lower down your activity , We promise to maintain our TAT (turn aroun time ) for Scans and reports. </p> 
             <p> We are here to follow all the protocols required for your test as the test will be done under personal supervision of doctor. </p> 
   
            <a href="#" class="btn" > learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->
<!-- image section starts  -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 72rem;
      position:relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 1.0s ease;
    }
    
    .active {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 0.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
    </head>
    <body>
    

    <div class="mySlides fade" style="text-align:center">
      <div class="numbertext">1 / 3</div>
      <img src="image/imgslide1.png" style="width: 80vw; height: 42rem;">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade" style="text-align:center">
      <div class="numbertext">2 / 3</div>
      <img src="image/imgslide2.png" style="width: 80vw; height: 42rem;">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide3.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide4.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide5.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide6.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide7.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    <div class="mySlides fade"style="text-align:center">
      <div class="numbertext">3 / 3</div>
      <img src="image/imgslide8.png" style="width: 80vw; height: 42rem;">
      <div class="text"> </div>
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
       <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
       <span class="dot"></span> 
      <span class="dot"></span> 
      
    </div>
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
    </script>
    
    </body>

<!-- image section ends here -->

<!-- report section -->
<section class="book" id="download">

    <h1 class="heading"> <span> Get </span> Report </h1>    

    <div class="row">

        <div class="image">
            <img src="image/download report.png" alt="">
        </div>

        <form action="myreports.php" method="POST">
            <h3> get  Reports here</h3>
            <form method="POST" action="myreports.php">
            <input type="" placeholder="                                             Enter Unique Code" class="box" name="mobile"> 
            <button type="submit" class="btn" id="dbtn" name="submit" > Download report <span class="fas fa-download"></span> </button>
            </form>

    </div>

</section>

<!-- report section ends here-->



<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/medical-app.png" alt="">
        </div>

        <form action="" method="POST">
            <h3>book appointment</h3>
            <input type="text" placeholder="your name" class="box" name="name">
            <input type="number" placeholder="your number" class="box" name="mobile">
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="date" class="box" name="regdate">
            <p><?php echo $msg;?></p>
            <input type="submit" value="book now" class="btn" name="book"> 
            
            <p>*Contact center for further process and payment details</p>
        </form> 
  
 
    </div>
    
</section>

<!-- booking section ends -->
<!-- daily tips section start -->

<!-- daily tips section start -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

         <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>the center is operated by a highly professional and experienced radiologist having years of Experience from leading private hospitals of India. </p>
            <a href="#doctors" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>total care</h3>
            <p>we are fully equipped with next Generation Machines there is no need to wait for typical tests. we fullfil all requirements here in your own city.</p>
            <a href="#book" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p> We have highly trained ambulance staff to handle emergency situation wisely and safely. available anytime at  your service with care and safety</p>
            <a href="tel:+91-8881800778" class="btn"> contact us 24X7 <span class="fas fa-phone"></span> </a>
        </div>

        

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Next Generation Machines</h3>
            <p>We are equipped with high end technology machines. which distiguishes us from other centers in eastern U.P. </p>
            <a href="index2.html" target="blank" rel="noopener noreferrer" class="btn"> Know More About Our Machines <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- know your doctor -->

<section class="about" id="doctors">

    <h1 class="heading"> <span>KNOW YOUR </span> DOCTOR </h1>

    <div class="row">

        <div class="image">
            <img src="image/doctor (2).png" alt="">
        </div>

        <div class="content">
            <h3>Dr. Vishal Singh</h3>
            <h4> MBBS,MD (Radiodiagnosis)</h4>
            <h4>(Owner)</h4>
            <h4 >having over a decade of experience in the field of radiology from world's best best hospitals  like </h4>  
            <br> <a href="https://www.medanta.org/" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;">  senior consultant at MEDANTA - THE MEDICITY (Gurugram) 
                </a> <br> <a href="https://www.fmri.in/" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> senior consultant at FORTIS MEMORIAL RESEARCH INSTITUTE (Gurugram) </a>
                <br> <a href="https://www.nanavatimaxhospital.org/" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> senior consultant at NANAVATI HOSPITAL (Mumbai) </a>
            <h4>  having worked under the guidance of great doctors like  </h4>
             <a href="https://www.medanta.org/doctors/dr-naresh-trehan" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> padam shree Dr. Naresh trehan(CTVS) </a>
            <br> <a href="https://www.medanta.org/doctors/dr-arvinder-singh-soin" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;">padam shree Dr. Arvinder Singh Soin (LT Surgeon)</a> 
           <br>  <a href="https://www.medanta.org/doctors/dr-praveen-chandra" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> padam shree Dr. praveen chandra (DM Cardiology) </a> 
           <br> <a href="https://en.wikipedia.org/wiki/M._R._Rajagopal" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> padam shree Dr. Rajgopal</a>
           <br> <a href="https://www.medanta.org/doctors/dr-sanjay-saran-baijal" target="_blank" rel="noopener noreferrer" style="font-size: 1.5rem;"> dr. sanjay sharan Baijal (MD Radio Diagnosis , Head IR dept. of radiology) </a>
          <br>  <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- know your doctor end -->



<!-- Testimonial start here-->

<section class="blogs" id="testimonial">

    <h1 class="heading"> Valued  <span>Testimonials</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/dr.siddharth.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17th may, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Dr. Siddharth Arora</h3>
                <p>One The Best Diagnostic Centre In The Region Dr Vishal Has Immense Expertise In The Field Bringing World Standards
                To The Town, And Creating A Such A Helpful Centre To The Ailing Patients Is A Commendable Job. Happy To See Cutting Edge Technology
                And Medicine Progress So Far. Highly Recommended . </p>
                <!--<a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>-->
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/ravi.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 16th may, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3> Dr. Ravi Singh </h3>
                <h4>Nova hospital and trauma center</h4>
                <p> Best diagnostic center in varanasi equipped with next generation machines. Highly recommended.</p>
               <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 03 may, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>doctor 3</h3>
                <p>testimonial to be added soon</p>
               <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>-->
            </div>
        </div>

    </div>

</section>
<!-- Testimonial end here-->


<!-- blogs section starts  -->

<!--<section class="blogs" id="machines">

    <h1 class="heading"> advanced <span>machines</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/uct528.png" alt="">
            </div>
            <div class="content">
    
                <h3>uCT 528 for CT scan</h3>
                <p>uCT 528 is designed to bring customers more access to advanced technologies.
                     The intuitive and intelligent
                     workflow boosts efficiency and effectiveness of routine practices.
                </p> <p> 70kV Scan Mode
                     70kV Dose reduction can increase SNR for 
                     Iodine-based contrast agents especially for small BMI or younger patients.
                     </p> <p> 3D Dose Modulation
                         Based on anatomic structure information, it generates optimized 3D dose distribution plan.

                     Outstanding Financial Performance
                        Outstand
                    </p>
                <a href="https://www.united-imaging.eu/en/products/computed-tomography/uct-528" target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/uMR-580.png" alt="">
            </div>
            <div class="content">
                
                <h3>uMR 580 For MRI</h3>
                <p>The full-digital lossless RF waveform modulation technology is employed to achieve
                     full-digital emission, transmission and reception of signals, 
                     so the image acquired is of high fidelity and low noise,
                      resulting in superb image quality. </p>
                      <p>High-Performance Hardware
                        With the full-digital imaging chain and high-density integrated coils, 
                        uMR 580 is able to increase scanning speed and enhance imaging quality</p>
                <a href=" https://www.united-imaging.eu/en/products/magnetic-resonance/umr-580"  target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/agfa dr400i.png" alt="">
            </div>
            <div class="content">
               
                <h3>Agfa DR400i For X-RAY</h3>
                <p>The DR 400i comes with the DR 14e
                    (14”x17”) and/or DR 17e (17”x17”) digital
                    DR detector, as well as our automatic,
                    intelligent, body-part independent
                    MUSICA image processing software,
                    specially adapted and tuned to enhance
                    the DR image quality.
                    Combining the advanced detector technology and MUSICA image processing
                    enables a reduction in exposure dose – a
                    priority for every imaging environment.</p>
                <a href="https://medimg.agfa.com/main/direct-radiography/dr-400/" target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/neuwa i9.png" alt="">
            </div>
            <div class="content">
               
                <h3> Nuewa I9 Diagnostic Ultrasound System
                    </h3>
                <p>The Nuewa I9, dedicatedly designed for women and neonatal healthcare,
                     providing an innovative experience from inside out. These innovations 
                     are developed based on in-depth insights into complex clinical scenarios,
                     providing accurate and timely answers as well as outstanding efficiency 
                     and remarkable user experience</p>
                <a href="https://www.mindray.com/en/products/ultrasound/women-health/nuewa-i9" target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/hemix.png" alt="">
            </div>
            <div class="content">
               
                <h3>HEMIX5-60 HEMATOLOGY ANALYZER</h3>
                <p>Higher linearity equals less dilution for
                    high concentrated samples.
                    Excellent accuracy ensures reproducible
                    results. The lower the CV the more reliable the results. The test shows that
                    the HEMIX 5-60 results are just as good as the results obtained on
                    the reference analyzers. The HEMIX 5-60 even obtains the best CV on
                    WBC,
                    The HEMIX 5-60 results compete with big
                    expensive analyzers from international
                    market leaders!
                    </p>
                <a href="https://www.sfri.fr/hemix-5-60" target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/h-100.png" alt="">
            </div>
            <div class="content">
               
                <h3>H-100 Urine Analyzer</h3>
                <p>Adopting the advanced high luminosity cold light source with 4-wavelength, which improves the sensitivity, accuracy, specificity and reduces the interference from ambient light.
                    Adopting automatic waste handling equipment, which avoids cross-contamination between samples
                    Automatically rectify the test results influenced by non-specificity, pH, specific gravity and colour.</p>
                <a href="https://medimg.agfa.com/main/direct-radiography/dr-400/" target="_blank" rel="noopener noreferrer" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </div>

</section>-->

<!-- blogs section ends -->

<section class="blogs" id="career">

    <h1 class="heading" id="career"> career <span>options</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                
                <h3> mail us </h3>
                <p>Stay updated we will post here when vacancies are available.  </p>
                <a href="mailto:vinoddiagnostic@gmail.com" class="btn"> mail us to apply <span class="fas fa-chevron-right"></span> </a>
            </div>
       
        </div> 
    </section>
    <!-- career section ends here -->
<!-- location section starts  -->
<section class="services" id="location" >

    <h1 class="heading" id="location"> our <span>location</span> </h1>

    <div class="box-container">
<iframe class="" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2143.7638048848967!2d82.95976444173824!3d25.359027282076774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84ea44797bd29bd7!2sVinod%20Diagnostics%20Center!5e0!3m2!1sen!2sin!4v1651035965351!5m2!1sen!2sin" 
width="100%" height="450" style="border:#717171 ;"
 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</section>

<!-- location section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/awadh.png" alt="">
            <h3>Awadh Raj Shukla </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div> 
          
            <p class="text" style="position: relative;">I am an Aspiring doctor and really impressed by the quality of reports and services. I have seen such anvaced results for the first time in purvanchal.  gonna rate 5 star for great service.</p>
        
    </div>
        <div class="box">
            <img src="image/shobhit.png" alt="">
            <h3>Er.Shobhit Singh</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"style="position: relative;" > Well equipped with highly advanced machines happy to see such diagnostic center in our city .
            highly suggested</p>
        </div>

        <div class="box">
            <img src="image/shivam.png" alt="">
            <h3>Shivam Rai (Mau)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <p class="text" style="position: relative;" >  In case of medical need this is one of the best diagnostic services with latest and state of the art medical equipments Vinod Diasgnostic is ready to fill the void in central and eastern UP. </p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services provided </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about us </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book an appointment </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> next generation machines </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#book"> <i class="fas fa-chevron-right"></i> Magnetic Resonance Imaging (MRI) </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> Computed Tomography Scan (CT SCAN) </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> Ultrasonogram (USG) </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i>Digital X-RAY </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> BLOOD TEST </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> Home Collection </a>
            <a href="tel:+91-8881800778"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel: +91-8881800778"> <i class="fas fa-phone"></i> +91-8881-800-778 </a>
            <a href="tel: +91-8881800779"> <i class="fas fa-phone"></i> +91-8881-800-779 </a>
             <a href="https://wa.me/+918881800778"> <i class="fab fa-whatsapp"></i> +91-8881-800-778 </a>
            <a href="mailto:info@vinoddiagnosticcenter.com" style="font-size: 1.25rem;"> <i class="fas fa-envelope"></i> info@vinoddiagnosticcenter.com </a>
            <a href="mailto:vinoddiagnostic@gmail.com"> <i class="fas fa-envelope"></i> vinoddiagnostic@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt "></i> Varanasi,U.P India - 221003 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100080140188369" target="blank" rel="noopener noreferrer"> <i class="fab fa-facebook-f"></i> facebook </a>
           
            <a href="https://twitter.com/vinoddiagnostic?t=DK1mMb0lFO6-0GIbxKWMyA&s=09" target="blank" rel="noopener noreferrer" > <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://instagram.com/vinoddiagnostic?igshid=YmMyMTA2M2Y="  target="blank" rel="noopener noreferrer" > <i class="fab fa-instagram"></i> instagram </a>
          <!--  <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>-->
            <!--<a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>-->
        </div>

    </div>

    <div class="credit"> created by <span>Ranjeet Singh</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>