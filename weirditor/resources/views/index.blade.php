@extends('layout.master')
@section('navbar')
<nav class="navbar navbar-expand-lg">
    <div class="container px-5">
        <img src="{{asset('img/logo.png')}}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item "><a class="nav-link active" aria-current="page" href="{{("/")}}">Home</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link" href="{{("/portofolio")}}">Portofolio</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link" href="{{"/about"}}">About Us</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link" href="{{"/contact"}}">Contact</a></li>
            </ul>
        </div>
        <span class="material-symbols-outlined">
            search
            </span>
    </div>
</nav>
<hr class="container">
@endsection

@section('head')
<header class="container py-5" style="background-color:#D9D9D9;" >
    <div class="container px-5" style="padding:150px;">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-black mb-2">Hello ©   <img src="{{asset('img/Line.png')}}" alt=""> مرحبًا</h1>
                    <p class="lead text-black-50 mb-4"><h1>こんにちは <strong class="bintang">✱</strong> Bonjour</h1>  </p>

                </div>
            </div>
        </div>
    </div>
</header>
@endsection


@section('content')
<div class="container py-5 mt-5"  style="border: 1px solid black;">
    <div class="row">
       <div class="teks col-lg-6" style="padding: 100px">
           <h1><i>We are</i><strong> solution for your aesthetic <strong class="bintang">✱</strong>
               need to improve
               your building quality</strong>
               </h1>
       </div>
       <div class="col-lg-6 justify-content-center">
       <div class="row justify-content-center">
           <a class="button col-3"><h4>Studio</h4></a>
           <a class="button col-4"><h4>Architecture</h4></a>
           <a class="button col-4"><h4>Aesthetic</h4></a>
       </div>
           <div class="col"><p class="tulisan mt-5">Welcome to our architecture studio's portfolio! We are a team of passionate architects and designers who are dedicated to bringing your vision to life. Our studio is committed to delivering exceptional designs that are not only aesthetically pleasing, but also functional and sustainable. We specialize in various architectural and interior design projects, including residential, commercial, and public spaces. With our expertise that every detail is carefully considered and executed.</p></div>
           <div>
               <a class="kotak" href="">Explore Me<a class="kotak1" href=""><img src="{{asset('img/panah.png')}}" alt=""></a></a>
           </div>
    </div>
   </div>
</div>
<div class="konten3 container">
    <div class="col text-center"><h1> <strong>Showcase</strong> our
       </h1>
    <h1> <strong class="bintang">✱</strong> - best <u>work</u></h1>
    </div>
    <div class="text-center mt-5">
        <a class="col ">SHOW ALL</a>
        <a class="col ms-md-5">INTERIOR</a>
        <a class="col ms-md-5">EKSTERIOR</a>
        <a class="col ms-md-5">ARCHITECTURE</a>
</div>
 </div>

@endsection

@section('content2')
<div class="container">
    <div class="row justify-content-center">
    <a class="card-bisnis card col-md-5 pt-5 mt-5 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
    <a class="card-bisnis card col-md-5 pt-5 mt-5 ms-2 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
    <a class="card-bisnis card col-md-5 pt-5 mt-4 ms-2 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
    <a class="card-bisnis card col-md-5 pt-5 mt-4 ms-2 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
    <a class="card-bisnis card col-md-5 pt-5 mt-4 ms-2 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
    <a class="card-bisnis card col-md-5 pt-5 mt-4 ms-2 text-decoration-none text-black" href=""><img class="img-fluid ms-5 me-5" src="{{asset('img/example.png')}}" alt=""><h6 class="ms-5 mt-3"><strong>Geometrical Pattern</strong>© Luciana Hotel</h6><img class="panah-card" src="{{asset('img/panah.png')}}" alt=""></a>
</div>
</div>
@endsection

@section('content3')
<div class="konten-4">
    <div class="garis container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6 text-white"><h1>We are focused on both
                <strong class="bintang">✱</strong> - architectural developments as well as the overall communication process involved in our <u>projects.</u></h1></div>
            <div class="col-lg-6">
                <textarea class="text-area col-lg-10 text-white mb-lg-3"></textarea>
                <a class="button-kotak text-white" href="">Contact Us<img class="button-kotak2 text-end" src="{{asset('img/panah-putih.png')}}" alt=""></a>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
<div class="container mt-5">
    <div class="row">
        <div class="col"><h5><img class="mb-2" src="{{asset('img/logo.png')}}" alt=""> <strong>L-Studio</strong></h5></div>
        <div class="col"><h6><strong>Address :</strong></h6><h5><strong>7051 Durham Court Rego Park, NY 11374</strong></h5></div>
        <div class="col"><h6><strong>Work time :</strong></h6><h5><strong>Monday - Friday, </strong></h5><h5><strong>08.00 A.M - 05.00 P.M</strong></h5></div>
    </div>
<div class="garis-hitam">
    <div class="text-center mt-5 mb-5">
        <a class="col " href="{{("/")}}"><strong>HOME</strong> </a>
        <a class="col ms-md-5" href="{{("portofolio")}}"><strong>PORTOFOLIO</strong></a>
        <a class="col ms-md-5"><strong>ABOUT US</strong></a>
        <a class="col ms-md-5"><strong>CONTACT</strong></a>
    </div>
</div>

<div class="garis-hitam2">
    <div class="text-center mb-5">
        <a class="col "><img class="mb-2" src="{{asset('img/facebook.png')}}" alt=""></a>
        <a class="col ms-md-5"><img class="mb-2" src="{{asset('img/linkedin.png')}}" alt=""></a>
        <a class="col ms-md-5"><img class="mb-2" src="{{asset('img/youtube.png')}}" alt=""></a>
        <a class="col ms-md-5"><img class="mb-2" src="{{asset('img/instagram.png')}}" alt=""></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 text-start"><h6><strong>Copyright © L-Studio 2022</strong></h6></div>
    <div class="col-lg-6 text-end"><h6><strong>All Rights Reserved.</strong></h6></div>
    </div>
</div>
</footer>
@endsection


