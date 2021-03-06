<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="pro.png" alt="">
        <h3 class="name">swetha </h3>
        <p class="post">19MIS0083</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#education">EDUCATION</a></li>
            <li><a href="#portfolio">SKILLS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Swetha</span></h1>
    <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>ABOUT</span> ME </h1>

<div class="row">

    <div class="info">
        <h3> <span> Aame : </span> Swetha </h3>
        <h3> <span> Age : </span> 20 </h3>
        <h3> <span> Father's name : </span> Murali </h3>
        <h3> <span> Gender : </span> Female </h3>
        <h3> <span> Nationality : </span> Indian </h3>
        <h3> <span> Language known : </span> Tamil,English </h3>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> MY <span>EDUCATION</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>PURSUING</span>
        <h3>Integrated M.TECH</h3>
        <p>Vellore Institute Of Technology,<br>Vellore. </p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2019</span>
        <h3>Completed HSC</h3>
        <p>At Sunbeam higher secondary school,<br> katpadi.</p>
    </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"><span>SKILLS</span> </h1>

<div class="box-container">

    <div class="skills">
        <li>
            <h3>HTML 5</h3><span class="bar"><span class="html"></span></span>
        </li>

        <li>
            <h3>CSS</h3><span class="bar"><span class="css"></span></span>
        </li>

        <li>
            <h3>PHOTOSHOP</h3><span class="bar"><span class="ps"></span></span>
        </li>

        <li>
            <h3>AFTER EFFECTS</h3><span class="bar"><span class="ae"></span></span>
        </li>
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>CONTACT</span> ME </h1>

<div class="row">

    <div class="content">

        <h3 class="title">CONTACT INFO</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> shwethamurali3@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 8300826264 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Arcot,Ranipet 632-503 </h3>
        </div>

    </div>

    <form method="post" action="port.php">  

        <input type="text" name="name" placeholder="name" class="box">
        <input type="email" name="email" placeholder="email" class="box">
        <textarea name="message"  cols="30" rows="10" class="box message" placeholder="leave a message"></textarea>
        <button type="submit" class="btn"> SEND <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>





<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>




<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>


</body>
</html>