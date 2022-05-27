<html>
<head>
    <meta charset="utf-8">
    <title>Go-Help</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset("/subjects.css") }}">
    <link rel="stylesheet" href="{{ asset("/home.css") }}">

    <script src="https://kit.fontawesome.com/95dda36ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
</head>
<body style="background-color:white;">
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"><i class="fas fa-user-graduate"></i>GO-help</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="course">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">{{$LoggedUserInfo['fname']}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.logout')}}">Log out</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container1">
    <div class="row">
        <div class="col">
            <h2>Youtube (video) links related to the <a href="topics.html">Topic</a></h2>
            <select onchange="redirToDestination(this)" class="mdb-select md-form" searchable="Search here.." style="position:relative; top:20px;width:30%;height:10%;font-size:2rem;">
                <option value="" disabled selected>Choose topic</option>
                <option value="1">Set theory</option>
                <option value="2">Cartesian products and Ordered pairs</option>
                <option value="3">Subsets and Power sets</option>
                <option value="4">Set operations</option>
                <option value="5">Propositional Logic</option>
                <option value="6">Truth Table</option>
                <option value="7">Logic Laws</option>
                <option value="8">Conditional</option>
                <option value="9">Permutation</option>
                <option value="10">Combination</option>
                <option value="11"> Binomial Theorem and Pascal's Triangle</option>
            </select>
            <hr style="position:relative;top:100px;">
            <h2 id="links">Links (theorem) related to the Topic</h2>
            <select onchange="redirDestination(this)" class="mdb-select md-form" searchable="Search here.." style="position:relative; top:220px;width:30%;height:10%;font-size:2rem;">
                <option value="" disabled selected>Choose topic</option>
                <option value="1"><a href="https://www.youtube.com/watch?v=tyDKR4FG3Yw&list=PLDDGPdw7e6Ag1EIznZ-m-qXu4XX3A0cIz&index=1">Set theory</a></option>
                <option value="2">Cartesian products and Ordered pairs</option>
                <option value="3">Subsets and Power sets</option>
                <option value="3">Set operations</option>
                <option value="3">Propositional Logic</option>
                <option value="3">Truth Table</option>
                <option value="3">Logic Laws</option>
                <option value="3">Conditional</option>
                <option value="3">Permutation</option>
                <option value="3">Combination</option>
                <option value="3"> Binomial Theorem and Pascal's Triangle</option>
            </select>
        </div>
        <div class="col">
            <img src="/image/linear.jpg" style="width:60%;margin-left:100px;"></img>
        </div>
    </div>
</div>
<section id="footer" style="position:relative;top:500px;">
    <footer class="bg-light text-center text-lg-start">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h2 class="text-uppercase">Our website</h2>
                <p><h3>
                    GO-Help will help you with time management and with better studying.
                    Students with different degrees can help you!
                    You also can provide course videos and assist others too!
                </h3></p>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h2 class="text-uppercase">Follow</h2>

                <p class="par">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-instagram fa-3x" style="margin-right: 20px;margin-left:100px;"></i></a>
                    <a href="#" style="text-decoration: none;"><i class="fab fa-telegram-plane fa-3x" style="margin-right: 20px;"></i></a>
                    <a href="#" style="text-decoration: none;"><i class="fab fa-whatsapp fa-3x" style="margin-right: 100px;"></i></a>
                </p>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);font-size:1.5rem;">© 2022 Copyright:
            <a class="text-dark" href="home.html">GO-Help.com</a>
        </div>
    </footer>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/java/java5.js" charset="utf-8"></script>
</body>
</html>
