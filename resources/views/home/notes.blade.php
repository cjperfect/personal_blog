@extends('layouts/home')
@section('mail')
    <section id="notes">
        <div class="container">
            <h2>Love Note</h2>
            <i class="fa fa-heart"></i>
            <div class="underline"></div>
            <div class="main">
                <div class="row">
                    @foreach($notes as $note)
                        <div class="col-md-6  item">
                            <div class="col-md-6 col-sm-6">
                                <div class="spotlight img-list"
                                     data-src="{{asset($note->pic)}}"
                                     style="background: url({{asset($note->pic)}})no-repeat center center / cover">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h4 class="title"><a
                                        href="{{url("detail/$note->id")}}">{{\Illuminate\Support\Str::limit($note->title, 25, '...')}}</a>
                                </h4>
                                <p class="date">发布时间: {{$note->created_at}} &nbsp;作者：{{$note->author}}</p>
                                <div class="desc">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($note->content), 100, '...') !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                {{$notes->links()}}
            </div>
        </div>
    </section>
@endsection

