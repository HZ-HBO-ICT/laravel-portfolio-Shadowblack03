<!DOCTYPE html>
<html class="profile" lang="en">
<style>
    .profile {
        background-image: url(https://wallpaperaccess.com/full/4084774.jpg);
        background-size: 1550px;
    }

    ul.bg-black {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.836);
    }

    ul.bg-black>li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: rgb(131, 131, 131);
    }

    .sticky {
        position: fixed;
        top: 0px;
        width: 100%;
        left: 0px;
        z-index: 2;
    }

    nav {
        padding-bottom: 40px;
    }

    body {
        background-image: url("");
        background-repeat: no-repeat;
        background-position: right top;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1500px;
        max-height: 1200px;
        position: relative;
        margin: auto;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
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
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1s;
        animation-name: fade;
        animation-duration: 1s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* text borders */
    .paragraph_1 {
        margin: 50px 100px auto 100px;
        border: 2px solid rgba(0, 0, 175, 0.603);
        background-color: rgb(255, 255, 255);
        width: 30%;
        min-width: 200px;
        background: rgb(194, 191, 191);
        position: absolute;
        left: 0px;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    .paragraph_2 {
        margin: 50px 100px auto 100px;
        border: 2px solid rgba(0, 0, 175, 0.603);
        background-color: rgb(255, 255, 255);
        width: 30%;
        min-width: 200px;
        background: rgb(194, 191, 191);
        position: absolute;
        right: 0px;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about me</title>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<nav>
    <ul class="sticky bg-black">
        <li> <a href="home">home</a></li>
        <li> <a href="profile">profile</a> </li>
        <li><a href="dashboard">dashboard</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="blog.html">blog</a></li>
    </ul>
</nav>

</nav>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="https://tricksfest.com/wp-content/uploads/2020/12/Netflixnew.jpg" style="width: 100%">
        <div class="text">Series and Films</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://www.veluweairsoft.nl/wp-content/uploads/2019/01/17-7-Veluwe-Airsoft-7216-e1547216321949.jpg">
        <div class="text">Airsoft</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://www.pcgamesn.com/wp-content/uploads/2018/09/Forza-Horizon-4-BMW-Porsche_1080x1920.jpg"
             style="width:100%">
        <div class="text">Gaming</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<h1>Over mij</h1>
<article class="paragraph_1">
    <p>Mijn naam is Diego Ponte, ik ben 17 jaar. Mijn ouders zijn gescheiden en ik heb dus twee huishoudens. Ik werk bij
        de Albert Heijn als vakkenvuller. In mijn vrijetijd voetbal ik graag met
        vrienden en als het vies weer is dan houden we een game sessie. ook vind ik het kijken van series en films erg
        leuk. Als ik 18 ben wil ik graag beginnen met airsoft. </p>
</article>
<h2></h2>
<article class="paragraph_2">
    <p>
        Ik ben afgestudeerd aan de havo en wil graag verder studeren bij de hz door de studie HBO-ICT te volgen.
        het lijkt mij een erg intressante en leerzame studie die ook nog is veel werkgelegenheid biedt voor de toekomst.
    </p>
</article>
<ul class="list_1" style="text-align:center">
    <li>creatief</li>
    <li>nieuwsgierig</li>
    <li>flexibel</li>
    <li>behulpzaam</li>
    <li>serieus</li>
</ul>
</body>

</html>
