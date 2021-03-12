@extends('layouts/back')
<link rel="stylesheet" href={{asset('kindeditor/themes/default/default.css')}} />
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">

            <div class="pageheader">
                <h2><i class="fa fa-book"></i> 添加日记</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/noteadd')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{old('author')}}" name="author"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">是否显示在首页</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="isShowHome" value="0" checked id="no">
                                    <label for="no">否</label>
                                    <input type="radio" name="isShowHome" value="1" id="yes">
                                    <label for="yes">是</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-8 upload">
                                    <p>选 <b>是</b> 就要上传图片</p>
                                    <div class="upload_main">
                                        <div class="fa fa-upload"></div>
                                        <input type="file" name="pic" id="upload" class="form-control">
                                    </div>
                                    <div class="row file-list">
                                        <div class="col-md-8 file-list-item spotlight-group">
                                            <a href="{{asset('images/bgheaders.jpg')}}" class="spotlight"
                                               data-src="{{asset('images/bgheaders.jpg')}}">
                                                <img src="{{asset('images/bgheaders.jpg')}}" alt="image" width="100%">
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
                                          class="form-control">{{old('content')}}</textarea>
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
