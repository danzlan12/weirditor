@extends('layout.master')
@section('navbar')
<nav class="navbar navbar-expand-lg">
    <div class="container px-5">
        <img src="{{asset('img/logo.png')}}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item "><a class="nav-link "  href="{{("/")}}">Home</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link" href="{{("/portofolio")}}">Portofolio</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link"  href="{{"/about"}}">About Us</a></li>
                <li class="nav-item ms-xl-5"><a class="nav-link active" aria-current="page" href="{{"/contact"}}">Contact</a></li>
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
<div class="container">
    <div class="row">
        <div class="col-xl"><h1>Get in touch and <br> let's  <strong>make magic <br> happen!</strong> <strong class="bintang">✱</strong></h1></div>
        <div class="col-xl">
            <div class="col-xl">
                <div class="row">

                        <div class="col-xl form-floating mb-3 ">
                            <input class="form-control rounded-0 border-dark" id="phone" name="no" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone" class="ms-3 text-muted ">Your name</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>

                        <div class="col-xl form-floating mb-3">
                            <input class="form-control rounded-0 border-dark" id="phone" name="no" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone" class="ms-3 text-muted ">Your E-mail</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                </div>
            </div>
            <div class="col-xl"><div class="row">
                <div class="col-xl form-floating mb-3 ">
                    <input class="form-control rounded-0 border-dark" id="phone" name="no" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                    <label for="phone" class="ms-3 text-muted">Your phone</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
                <div class="col-xl form-floating mb-3 ">
                    <input class="form-control rounded-0 border-dark" id="phone" name="no" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                    <label for="phone" class="ms-3 text-muted">Your city</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control rounded-0 border-dark" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
            <label for="message" class="ms-3 text-muted">Message</label>
            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
        </div>
           <div><a href="" class=" btn rounded-0 border border-dark float-start" style="padding-left: 44%; padding-right:44% ">Send</a><img class="position-absolute float-end border border-dark p-2" src="{{asset('img/panah.png')}}"  alt=""></div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <img class="img-fluid img-full width-100 " src="{{asset('img/gambar2.png')}}" style="width:2000px; margin-top:100px;" alt="">
@endsection


@section('footer')
<div class="container mt-5">
    <div class="row">
        <div class="col"><h5><img class="mb-2" src="{{asset('img/logo.png')}}" alt=""> <strong>L-Studio</strong></h5><h6 class="text-muted">Designs that are as functional as they are <br> beautiful, Crafting spaces that leave <br> a lasting impression.</h6></div>
        <div class="col"><h6><strong>Address :</strong></h6><h5><strong>7051 Durham Court Rego Park, NY 11374</strong></h5></div>
        <div class="col"><h6><strong>Work time :</strong></h6><h5><strong>Monday - Friday, </strong></h5><h5><strong>08.00 A.M - 05.00 P.M</strong></h5></div>
    </div>
<div class="garis-hitam">
    <div class="text-center mt-5 mb-5">
        <a class="col " href="{{("/")}}"><strong>HOME</strong> </a>
        <a class="col ms-md-5" href="{{("/portofolio")}}"><strong>PORTOFOLIO</strong></a>
        <a class="col ms-md-5" href="{{("/about")}}"><strong>ABOUT US</strong></a>
        <a class="col ms-md-5" href="{{("/contact")}}"><strong>CONTACT</strong></a>
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
