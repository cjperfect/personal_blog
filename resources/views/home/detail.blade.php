@extends('layouts/home')
@section('title', 'Detail')
@section('mail')


    <section id="detail">
        <div class="container">
            <h2>Love Note</h2>
            <i class="fa fa-heart"></i>
            <div class="underline"></div>
            <div class="row main">
                <div class="col-md-9 left">
                    <h3 class="title">{{$note->title}}</h3>
                    <div class="date">点击数：{{$note->hot}} &nbsp;&nbsp;发布时间: {{$note->created_at}}
                        &nbsp;&nbsp;作者：{{$note->author}}</div>
                    <div class="content">
                        {!! $note->content !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="page row">
                        <div class="col-xs-6 text-left">
                            @if($prev_note)
                                <a href="{{url("detail/$prev_note->id")}}">上一篇：{{\Illuminate\Support\Str::limit($prev_note->title, 20, '...')}}</a>
                            @else
                                <span class="prevSpan">没有上一篇</span>
                            @endif
                        </div>
                        <div class="col-xs-6 text-right">
                            @if($next_note)
                                <a href="{{url("detail/$next_note->id")}}">下一篇：{{\Illuminate\Support\Str::limit($next_note->title, 20, '...')}}</a>
                            @else
                                <span class="nextSpan">没有下一篇</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-3 right">
                    <h3 class="text-left"><span class="fa fa-heart"></span> 最新日记</h3>
                    <ul class="text-left">
                        @foreach($latest as $l)
                            <li>
                                <a href="{{url("detail/$l->id")}}">{{\Illuminate\Support\Str::limit($l->title, 25, '...')}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3 class="text-left"><span class="fa fa-heart"></span> 爱的指数</h3>
                    <ul class="text-left">
                        @foreach($hotest as $h)
                            <li>
                                <a href="{{url("detail/$h->id")}}">{{\Illuminate\Support\Str::limit($h->title, 25, '...')}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3><a href="{{url('notes')}}" class="readmore">查看更多</a></h3>
                </div>
            </div>
        </div>
    </section>

@endsection
