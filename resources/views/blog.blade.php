@extends ('layout')
<!DOCTYPE html>
<title>blog</title>
<html lang="en">
<style>



    html {
        background-image: url(https://ak.picdn.net/shutterstock/videos/27100645/thumb/1.jpgs);
        background-size: 100%;
    }
</style>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <nav>
        <ul class="sticky bg-black">
            <li> <a href="welcome">home</a></li>
            <li> <a href="profile">profile</a> </li>
            <li><a href="dashboard">dashboard</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="blog">blog</a></li>
        </ul>
    </nav>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Portfolio.css">
</head>

@section ('blog')
<!-- Blog posts -->
<div class="container">
    <div class="row g4 justify-content-center">

        <!-- Study Choice blog post -->
        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">Study</div>
                <img class="card-img-top"
                     src="https://images0.persgroep.net/rcs/92YOfC70IBuP794qLlpmfqdYqQI/diocontent/102120489/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8"
                     alt="Study directions">
                <div class="card-body">
                    <p class="card-text">
                        <a href="study.html" class="text-link-hover-black">See more...</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- SWOT Analyse blog post -->
        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">SWOT Analysis</div>
                <img class="card-img-top"
                     src="https://www.cmenp.nl/wp-content/uploads/2021/09/Een-Swot-Analyse-in-4-stappen-hoofdafbeelding.jpg"
                     alt="SWOT Analysis">
                <div class="card-body">
                    <p class="card-text">
                        <a href="swotAnalyse.html" class="text-link-hover-black">See more...</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Programming exprerience blog post -->
        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">Programming experience</div>
                <img class="card-img-top"
                     src="https://www.computersciencedegreehub.com/wp-content/uploads/2020/06/Is-Computer-Science-the-Same-as-Programming-1024x683.jpg"
                     alt="programming experience">
                <div class="card-body">
                    <p class="card-text">
                        <a href="programmingExperience.html" class="text-link-hover-black">See more...</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- First feedback blog post -->
        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">feedback</div>
                <img class="card-img-top" src="https://www.forwrd.nu/wp-content/uploads/2019/12/Feedback-1.jpg"
                     alt="Feedback">
                <div class="card-body">
                    <p class="card-text">
                        <a href="feedback.html" class="text-link-hover-black">See more...</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- ICT career blog post -->
        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">ICT career</div>
                <img class="card-img-top"
                     src="https://mxi.nl/uploads/images/publication/crop_small/ict-er-politicus.jpg" alt="Career">
                <div class="card-body">
                    <p class="card-text">
                        <a href="career.html" class="text-link-hover-black">See more...</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
@endsection

</html>
