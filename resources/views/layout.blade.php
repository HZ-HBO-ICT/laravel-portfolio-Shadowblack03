<!DOCTYPE html>
<html class="profile" lang="en">
<style>

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

    nav {
        padding-bottom: 40px;
    }
</style>
<head>
    <link rel="stylesheet" href="Portfolio.css">
</head>


<body>
<nav>
    <ul class="sticky bg-black">
        <li> <a href="welcome">home</a></li>
        <li> <a href="profile">profile</a> </li>
        <li><a href="dashboard">dashboard</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="blog">blog</a></li>
    </ul>
</nav>
@yield ('home')
@yield('profile')
@yield ('dashboard')
@yield ('blog')
</body>

</html>
