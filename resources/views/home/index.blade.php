@extends('layouts/home')
@section('title', 'Home')

@section('nav')
    <div class="navbar-collapse collapse" id="onepage-navigation">
        <ul class="nav navbar-nav navbar-right main-navigation">
            <li><a href="#home">Home</a></li>
            <li><a href="#section-about">CJ & CMT</a></li>
            <li><a href="#section-features">Gallery</a></li>
            <li><a href="#section-portfolio">LoveNote</a></li>
            <li><a href="#section-contact">Contact</a></li>
        </ul>
    </div>
@endsection

@section('mail')
    <!-- ===== Section About ===== -->
    <section class="section-about" id="section-about">
        <div class="container">
            <h2>{{$us->sheName}} & {{$us->heName}}</h2>
            <i class="fa fa-heart"></i>
            <div class="underline">
            </div>
            <p class="sub-sub">
                {{$data->personal}}
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <!-- ===== Images ===== -->
                    <div class="side-images">
                        <img src="{{asset($us->hePic)}}" alt="Feature" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6">

                    <!-- ===== Images ===== -->
                    <div class="side-images">
                        <img src="{{asset($us->shePic)}}" alt="Feature" class="img-responsive">
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- ===== Section Video ===== -->
    <section id="section-video" class="section-video bgc-two">

        <div class="container">

            <!-- ===== Video ===== -->
            <div class="row">
                <div class="col-md-6">
                    <div class="container-video">
                        <h3 class="name">{{$us->heName}}</h3>
                        <p class="sub-sub">{{$us->heDescription}}</p>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="container-video">
                        <h3 class="name">{{$us->sheName}}</h3>
                        <p class="sub-sub">{{$us->heDescription}}</p>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- ===== Section Features ===== -->
    <section id="section-features" class="section-features bgc-one">

        <div class="container-fluid">

            <h2>Gallery</h2>
            <div class="container">
                <i class="fa fa-heart"></i>
                <div class="underline"></div>

                <div class="sub-sub">
                    {{$data->gallery}}
                </div>
            </div>

            <div class="features">
                <div class="row">
                    @foreach($photo as $p)
                        <div class="col-lg-3 col-md-4 col-sm-6 img-list spotlight"
                             style="background: url({{asset($p->pic)}})no-repeat center center / cover"
                             data-src="{{asset($p->pic)}}" data-title="{{$p->title}}"
                             data-description="{{$p->description}}" data-prefetch="true"></div>
                    @endforeach
                </div>

                <div class="row">
                    <a class="btn standard-button" id="morephoto" href="{{url('photo')}}">More Photo</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Section Portfolio ===== -->
    <section id="section-portfolio" class="section-portfolio bgc-two">
        <div class="container">

            <h2>Love Note</h2>
            <i class="fa fa-heart"></i>
            <div class="underline">
            </div>

            <div class="sub-sub">
                {{$data->loveNote}}
            </div>

            <!-- ===== Portfolio ===== -->
            <div class="row portfolio">
                <div class="spotlight-group">
                    <div id="portfolio" class="owl-carousel owl-theme">
                        @foreach($showHomeNotes as $note)
                            <div class="portfolio-images ">
                                <div class="spotlight img-list"
                                     data-src="{{asset($note->pic)}}"
                                     data-prefetch="true"
                                     style="background: url({{asset($note->pic)}})no-repeat center center / cover">
                                </div>
                                <div class="item">
                                    <p class="time">by <a href="javascript:;">{{$note->author}}</a>
                                        on {{$note->created_at}}</p>
                                    <h4 class="title">{{\Illuminate\Support\Str::limit($note->title, 30, '...')}}</h4>
                                    <p class="content">{!! \Illuminate\Support\Str::limit(strip_tags($note->content), 120, '...') !!}</p>
                                    <a href="{{url("detail/$note->id")}}" class="readmore">Read More ></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> <!-- ===== End Portfolio ===== -->

            </div>
            <div class="row">
                <a class="btn standard-button" data-toggle="collapse" href="#multiCollapse" role="button"
                   aria-expanded="false" aria-controls="multiCollapseExample1">More Notes</a>
            </div>
            <div class="row">
                <div class="collapse multi-collapse" id="multiCollapse">
                    <div class="mytimeline">
                        <div class="container">
                            <div class="row">
                                <div class="main-timeline owl-carousel1 owl-theme" id="timeline">
                                    @foreach($notes as $note)
                                        <div class="timeline">
                                            <div class="timeline-icon"></div>
                                            <span class="year">{{$note->updated_at}}</span>
                                            <div class="timeline-content">
                                                <a href="{{asset("detail/$note->id")}}"
                                                   class="post">{{\Illuminate\Support\Str::limit($note->title, 15, '...')}}</a>
                                                <p class="description">{!! \Illuminate\Support\Str::limit(strip_tags($note->content), 80, '...') !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Contact Us ===== -->
    <section id="section-contact" class="section-contact bgc-one">
        <div class="container">
            <h2>Contact</h2>
            <i class="fa fa-heart"></i>
            <div class="underline"></div>
            <div class="sub-sub">
                {{$data->contact}}
            </div>
            <div class="row main">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <!-- ===== Form ===== -->
                    <form class="contact-form" id="contact" role="form" method="post" action="{{url('contact')}}">
                        @csrf
                        <div class="field-wrapper col-md-6">
                            <input class="form-control input-box" id="contact-form-name" type="text"
                                   name="name" placeholder="Your Name" required>
                        </div>

                        <div class="field-wrapper col-md-6">
                            <input class="form-control input-box" id="contact-form-email" type="email"
                                   name="email" placeholder="Email">
                        </div>

                        <div class="field-wrapper col-md-12">
                            <input class="form-control input-box" id="contact-form-subject" type="text"
                                   name="subject" placeholder="Subject" required>
                        </div>

                        <div class="field-wrapper col-md-12">
                        <textarea class="form-control textarea-box" id="contact-form-message" rows="7"
                                  name="message" placeholder="Your Message" required></textarea>
                        </div>

                        <button class="btn standard-button" type="submit" id="contact-form-submit"
                                data-style="expand-left">Send Message
                        </button>
                    </form>
                    <!-- ===== End Form ===== -->
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 contact">
                    <div class="contact-info">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p><span>{{$setting->address}}</span></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <p><span>{{$setting->email}}</span></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p><span>{{$setting->phone}}</span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
