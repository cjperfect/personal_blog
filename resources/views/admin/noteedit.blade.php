@extends('layouts/back')
<link rel="stylesheet" href={{asset('kindeditor/themes/default/default.css')}} />
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">
            <div class="pageheader">
                <h2><i class="fa fa-adjust"></i> 修改日记</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <strong>提示：</strong> {{session('success')}}
                        </div>
                    @endif

                    @if(count($errors) > 0)

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>

                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- tile body -->
                    <div class="tile-body">
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/noteedit')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$note->id}}">
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control"
                                           value="{{$note->title}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-8">
                                    <input type="text" name="author" class="form-control"
                                           value="{{$note->author}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">是否显示在首页</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="isShowHome" value="0"
                                           @if($note->isShowHome === '0') checked @endif> 否
                                    <input type="radio" name="isShowHome" value="1"
                                           @if($note->isShowHome === '1') checked @endif> 是
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-8 upload">
                                    <div class="upload_main">
                                        <div class="fa fa-upload"></div>
                                        <input type="file" name="pic" id="upload" class="form-control">
                                    </div>
                                    <div class="row file-list">
                                        <div class="col-md-8 file-list-item spotlight-group" style="display: block;">
                                            <a href="{{asset($note->pic)}}" class="spotlight"
                                               data-src="{{asset($note->pic)}}">
                                                <img src="{{asset($note->pic)}}" alt="image" width="100%">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="col-m" class="col-sm-2 control-label">内容</label>
                                <div class="col-md-8">
                                <textarea name="content"
                                          style="height:400px;visibility:hidden;"
                                          class="form-control">{{$note->content}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-success btn-block form-control" type="submit">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tile body -->
    </section>
@endsection
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script charset="utf-8" src="{{asset('kindeditor/kindeditor-all-min.js')}}"></script>
<script charset="utf-8" src="{{asset('kindeditor/lang/zh-CN.js')}}"></script>
<script src="{{asset('assets/js/mail.js')}}"></script>
<script>
    var editor;
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="content"]', {
            allowFileManager: true
        });
    });
</script>

