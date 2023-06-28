@extends('layout.master');

@section('navbar')
<nav class="navbar navbar-expand-lg">
    <div class="container px-5">
        <img src="{{asset('img/logo.png')}}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item "><a class="nav-link "  href="{{("/")}}">Home</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link" href="{{("/portofolio")}}">Portofolio</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link active" aria-current="page" href="{{"/about"}}">About Us</a></li>
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

@section('content')
<div class="container text-center pt-lg-5 mt-lg-5">
    <div class="col mt-lg-5 pt-lg-5"><h1>Howdy <strong class="bintang">✱</strong> </h1> <h1><strong>L-Studio</strong> in <u>here</u></h1></div>
    <div class="kotakhitam text-white text-start p-3">Welcome to our studio! We are a team of passionate architects and designers who are dedicated to bringing your vision to life. Our studio is committed to delivering exceptional designs that are not only aesthetically pleasing, but also functional and sustainable. We specialize in various architectural and interior design projects, including residential, commercial, and public spaces. With our expertise that every detail is carefully considered and executed.</div>
</div>
@endsection

@section('content2')
<div class="container pt-lg-5 mt-5">
    <div class="row pt-lg-5">
        <div class="col-lg"><h1>What we have <br><strong>complated</strong> and <br><u>achieved</u> <strong class="bintang">✱</strong></h1></div>
        <div class="col-lg"><p class="text-muted">L-Studio is an architecture studio that provides innovative and sustainable design solutions. Our team consists of experienced architects, designers, and engineers who are committed to creating functional and aesthetically pleasing spaces. Our studio takes a client-centered approach, prioritizing the needs and preferences of our clients. We believe that good communication is key to a successful project, and we work closely with our clients throughout the design and construction process to ensure that their vision is realized.</p></div>
    </div>

    <div class="row mt-5">
        <div class="col-xl garisclient"><h1 class=" ms-5"><strong class="me-5">24</strong><strong class="me-5 ms-5">32</strong><strong class="ms-5"> 62</strong></h1><h6 class=" ms-5">© Client this year &emsp; © Interior Projects &emsp; © Eksterior Projects</h6></div>
        <img class="col-xl float-end" src="{{asset('img/gambarteam.png')}}" alt="">

    </div>
</div>
@endsection

@section('content3')
<div class="container about3">
<div class="col-xl text-center"><h1><strong>Our supa team</strong> <strong class="bintang">✱</strong></h1></div>

    <div class="row mt-5 d-flex justify-content-center">
        <div class="card text-start col-xl-3 me-xl-5" ><img class="card-img-top" src="{{asset('img/imageFounder.png')}}" alt=""> <h6 class="mt-3 ms-3"><Strong>Moch. Apriyanto Mahaliyan</Strong><a href="" class="kotak-kecil float-end me-3"><img src="{{asset('img/panah.png')}}"></a><br>Founder </h6>
        </div>
        <div class="card text-start col-xl-3 me-xl-5" ><img class="card-img-top" src="{{asset('img/imageFounder.png')}}" alt=""> <h6 class="mt-3 ms-3"><Strong>Moch. Apriyanto Mahaliyan</Strong><a href="" class="kotak-kecil float-end me-3"><img src="{{asset('img/panah.png')}}"></a><br>Founder </h6>
        </div>
        <div class="card text-start col-xl-3" ><img class="card-img-top" src="{{asset('img/imageFounder.png')}}" alt=""> <h6 class="mt-3 ms-3"><Strong>Moch. Apriyanto Mahaliyan</Strong><a href="" class="kotak-kecil float-end me-3"><img src="{{asset('img/panah.png')}}"></a><br>Founder </h6>
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
