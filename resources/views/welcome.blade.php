<!DOCTYPE html>
<html>
<style>
    body {
        background: rgb(165, 165, 165);
    }

    .paragraph_1 {
        margin: 50px 100px auto 100px;
        border: 2px solid rgba(0, 0, 175, 0.603);
        background-color: rgb(255, 255, 255);
        width: 450px;
        background: rgb(194, 191, 191);
        float: left;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    .paragraph_2 {
        margin: 50px 100px auto 100px;
        border: 2px solid rgba(0, 0, 175, 0.603);
        background-color: rgb(255, 255, 255);
        width: 450px;
        background: rgb(194, 191, 191);
        float: right;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    img {
        margin: 50px 100px auto 100px;
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
    }

    .holoscreen {
        position: absolute;
        bottom: 0px;
        left: 0px;
        -webkit-border-radius: 90px;
        -webkit-border-top-right-radius: 10px;
        -webkit-border-bottom-left-radius: 10px;
        -moz-border-radius: 90px;
        -moz-border-radius-topright: 10px;
        -moz-border-radius-bottomleft: 10px;
        border-radius: 90px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border: white solid 2px;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    .code-on-screen {
        position: absolute;
        bottom: 0px;
        right: 0px;
        -webkit-border-radius: 10px;
        -webkit-border-top-right-radius: 90px;
        -webkit-border-bottom-left-radius: 90px;
        -moz-border-radius: 10px;
        -moz-border-radius-topright: 90px;
        -moz-border-radius-bottomleft: 90px;
        border-radius: 10px;
        border-top-right-radius: 90px;
        border-bottom-left-radius: 90px;
        border: white solid 2px;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    nav {
        padding-bottom: 40px;
    }
</style>

<head>
    <title>Diego Ponte-Home</title>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<article class="paragraph_1">
    <p>ICT is een toenemnd aspect van het hedendaagse leven en voor iemand die erg nieuwsgierig is is dat een heel
        interessant gebied. Ik wil altijd graag weten he dingen werken en hoe ze zijn ontstaan dus om zelf dingen te
        maken en er mee te experimenteren kom ik veel te weten. Ook hoop ik mogelijk iets te maken of ontdekken wat
        handig kan ziijn in het dagelijks gebruik. </p>
</article>
<article class="paragraph_2">
    <p>Studeerd HBO-ICT aan <a href="https://hz.nl/"><strong> HZ university of aplied science</strong></a></p>
</article>
<nav>
    <ul class="sticky bg-black">
        <li> <a href="index.html">home</a></li>
        <li> <a href="profile.html">profile</a> </li>
        <li><a href="dashboard.html">dashboard</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="blog.html">blog</a></li>
    </ul>
</nav>
<div>
    <img class="holoscreen" src="data:image/jpeg;base64,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
    " width="450" height="400" alt="Ict holoscreen">
</div>
<img class="code-on-screen" src="img/diego_1.png" width="450" height="400" alt="code on screen">
</body>

</html>
