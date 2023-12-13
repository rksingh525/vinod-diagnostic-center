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
    <title>Vinod Diagnostic</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   

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
        
      
        <a href="#book" class="btn">book</a>
        
       
       
        <
        
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
    
        <a  class="btn"> contact us 24X7 @ 8881800778  <span class="fas fa-phone"></span> </a>
        
        <a href="#location" class="btn"   > locate us<span class="fas fa-map-marker-alt"></span> </a> 
    </div>

</section>

<!-- home section ends -->

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
            <input type="" placeholder="Enter Unique Code" class="box" name="mobile"> 
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
            <input type="text" placeholder=" your name" class="box" name="name">
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

<!-- services section starts  

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


<!-- footer section starts 

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

      <!--  <div class="box">
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

   

</section>

<!-- footer section ends -->


















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>