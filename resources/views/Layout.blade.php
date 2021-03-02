<!DOCTYPE html>
<html lang="en">
<head>
    
        
    <title>@yield('title')</title>
    
    @yield('links')
</head>
<body>
    <!-- **************************************start nav**************************************************** -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 navi shadow ">
        <div class="container">
            <a class="navbar-brand fw-bold logo" href="#">Feliciano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center fw-bold">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="menu">Menu</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Stories</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li><button type="button" class="btn btn-dark p-3 mx-2" style="background-color: #C8A97E;">Book a table</button></li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true">  login</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
@yield('content')

    <footer class="fotr">
    <div class="container">
        <div class="row text-center">
            <div class="col-3 fst_cl">
                <h2 class="my-5">Feliciano</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the<br> countries Vokalia and <br>Consonantia, there live the<br> blind texts.</p>
                <div class="icons-social">
                        <a href="">   <i class="fab fa-facebook"></i> </a>
                        <a href="">   <i class="fab fa-instagram"></i> </a>
                        <a href="">    <i class="fab fa-twitter"></i> </a>
                </div>
            </div>
            <div class="col-3 sst_cl">
                <h2 class="my-5">Open Hours</h2>
                <div class="row">
                    <div class="col-6">
                        <p>Monday</p>
                        <p>Tuesday</p>
                        <p>Wednesday</p>
                        <p>Thursday</p>
                        <p>Friday</p>
                        <p>Saturday</p>
                        <p>Sunday</p>
                    </div>
                    <div class="col-6">
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 24:00</p>
                        <p>9:00 - 02:00</p>
                        <p>9:00 - 02:00</p>
                        <p>9:00 - 02:00</p>
                    </div>
                </div>
            </div>
            <div class="col-3 fst_cl lst">
                <h2 class="my-5">Instagram</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the<br> countries Vokalia and <br>Consonantia, there live the<br> blind texts.</p>
            </div>
            <div class="col-3 fst_cl">
                <h2 class="my-5">Newsletter</h2>
                <p class="">Far far away, behind the word<br> mountains, far from the countries.</p>
            </div>
        </div>
        
    </div>
    <p class="text-center my-5">Copyright ©2021 All rights reserved | This template is made with <a href="" class="lst">yat</a> </p>
</footer>
<!--****************************************** end services**************************************************** -->

<!--****************************************** start footer**************************************************** -->


<!--****************************************** end footer**************************************************** -->
    

@yield('end_links')
    
</body>
</html>