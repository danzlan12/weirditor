@extends('layout.master')

@section('head')
<header class="container" >
    <img src="{{asset('img/gambar1.png')}}" alt="">
</header>
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col"><h1><strong>Geometrical Pattern : <strong class="bintang">✱</strong> </strong></h1><h1>Eksterior Design Project</h1></div>
        <div class="col ms-5">
        <div class="col d-flex justify-content-center"><h6><strong>Project Manager :</strong><br>Moch. Apriyanto Mahaliyan</h6></div>
        <div class="col d-flex justify-content-center"><h6><strong>Architect :</strong><br>Hanaoka Ju, Ryan Irzygov,<br> Ahmed Jalaluddin</h6></div>
    </div>
</div>
</div>
@endsection

@section('content2')

<div class="container mt-5">
<div class="row mt-5">
    <div class="col">
        <div class="row mt-5">
            <div class="col">
                <h6 class="position-relative"><strong>Client :</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Location :</strong> <br>Lucinta luna &emsp;&emsp;&emsp;&emsp;&emsp;  Jalan Stadion</h6>
            </div>
            <p class="text-muted justify-content-center"><br><br>Our exterior design project at the Luciana Hotel in Buena Vesta, Rio De Janeiro showcases the striking beauty of geometrical patterns. Our team of designers has seamlessly integrated these patterns into the hotel's façade to create a bold and unique statement. The use of geometrical patterns has allowed us to create a contemporary, dynamic design that reflects the hotel's modern and sophisticated vibe.

                <br><br>In addition to being visually stunning, the geometrical patterns used in this project also serve a functional purpose. They enhance the structural integrity of the building and provide an additional layer of protection against the elements. The use of these patterns has also allowed us to create a sense of rhythm and movement, which adds an element of excitement and energy to the building's overall design.

                <br><br>Our team of designers has carefully selected each pattern, ensuring that it complements the building's existing architecture and enhances the hotel's overall aesthetic appeal. We are proud to have been a part of the design process for the Luciana Hotel, and we are confident that our use of geometrical patterns has helped to create a striking, functional, and beautiful space.</p></div>

    </div>
    <div class="col mt-5">   <img src="{{asset('img/example1.png')}}" alt=""></div>
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
        <a class="col"><img class="mb-2" src="{{asset('img/facebook.png')}}" alt=""></a>
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
