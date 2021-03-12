@extends('layouts/home')
@section('nav')
    <!-- ===== Navigation Menu ===== -->
    <div class="navbar-collapse collapse" id="onepage-navigation">
        <ul class="nav navbar-nav navbar-right main-navigation">
            <li><a href="#home">Home</a></li>
            <li><a href="{{url('/')}}/#section-about">CJ & CMT</a></li>
            <li><a href="{{url('/')}}/#section-features">Gallery</a></li>
            <li><a href="{{url('/')}}/#section-portfolio">LoveNote</a></li>
            <li><a href="{{url('/')}}/#section-contact">Contact</a></li>
        </ul>
    </div>
@endsection

@section('mail')
    <section id="all-photos">
        <div class="container-fluid">
            <h2>Gallery</h2>
            <div class="container">
                <i class="fa fa-heart"></i>
                <div class="underline"></div>
            </div>
            <div class="row">
                @foreach($photo as $p)
                    <div class="col-lg-3 col-md-4 col-sm-6 img-list spotlight"
                         style="background: url({{asset($p->pic)}})no-repeat center center / cover"
                         data-src="{{asset($p->pic)}}" data-title="{{$p->title}}"
                         data-description="{{$p->description}}">
                    </div>
                @endforeach
            </div>
            <div class="row">
                {{$photo->links()}}
            </div>
        </div>
    </section>
@endsection
