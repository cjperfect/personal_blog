@extends('layouts/back')
<style>
    .file-list {
        margin-top: 15px;
    }

    .col-lg-4 {
        margin-bottom: 20px;
        height: 200px;
    }

    .upload_main {
        width: 100px;
        height: 100px;
        position: relative;
    }

    #upload {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .file-list-item:first-child {
        display: block !important;
    }

    .upload_main .fa-upload {
        position: absolute;
        left: 0;
        top: 0;
        font-size: 32px;
        text-align: center;
        line-height: 100px;
        border: 1px dashed #fafafa;
    }
</style>
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">

            <div class="pageheader">
                <h2><i class="fa fa-picture-o"></i> 修改图片</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/photoedit')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$photo->id}}">
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$photo->title}}" name="title"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-8 upload">
                                    <div class="upload_main">
                                        <div class="fa fa-upload"></div>
                                        <input type="file" name="pic" id="upload" class="form-control" required>
                                    </div>
                                    <div class="row file-list">
                                        <div class="col-xs-6  file-list-item spotlight-group">
                                            <div class="img-list spotlight" data-src="{{asset($photo->pic)}}"
                                                 data-title="{{$photo->title}}"
                                                 data-description="{{$photo->description}}"
                                                 style="background: url({{asset($photo->pic)}})no-repeat center center / cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-8">
                                    <input type="text" name="author" class="form-control" value="{{$photo->author}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">拍摄地址</label>
                                <div class="col-sm-8">
                                    <input type="text" name="photoAddress" class="form-control"
                                           value="{{$photo->photoAddress}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">拍摄时间</label>
                                <div class="col-sm-8">
                                    <input type="date" name="photoTime" class="form-control"
                                           value="{{$photo->photoTime}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-8">
                                <textarea name="description" cols="30" rows="10"
                                          class="form-control">{{$photo->description}}</textarea>
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
<script src="{{asset('js/spotlight.bundle.js')}}"></script>
<script src="{{asset('./assets/js/mail.js')}}"></script>
