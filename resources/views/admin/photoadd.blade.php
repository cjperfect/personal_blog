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

    #upload, .fa-upload {
        width: 100%;
        height: 100%;
    }

    #upload {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .file-list-item {
        margin-bottom: 15px;
    }

    .file-list-item:first-child {
        display: none;
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
                <h2><i class="fa fa-picture-o"></i> 添加图片</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/photoadd')}}"
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
                                <label for="" class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-8 upload">
                                    <div class="upload_main">
                                        <div class="fa fa-upload"></div>
                                        <input type="file" name="pic[]" id="upload" class="form-control" multiple=""
                                               required>
                                    </div>
                                    <div class="row file-list">
                                        <div class="col-lg-6 file-list-item spotlight-group">
                                            <div class="img-list spotlight" data-src="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-8">
                                    <input type="text" name="author" class="form-control" value="{{old('author')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">拍摄地址</label>
                                <div class="col-sm-8">
                                    <input type="text" name="photoAddress" class="form-control"
                                           value="{{old('photoAddress')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">拍摄时间</label>
                                <div class="col-sm-8">
                                    <input type="date" name="photoTime" class="form-control"
                                           value="{{old('photoTime')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-8">
                                <textarea name="description" cols="30" rows="10"
                                          class="form-control">{{old('description')}}</textarea>
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
<script>
    $(function () {
        let fileList = $(".file-list:first");
        let upload = $("#upload");
        upload.on('change', function () {
            let files = this.files;
            if (files.length > 3) {
                alert('最多上传3张');
                return false;
            }
            $.each(files, function (k, v) {
                let html = fileList.find('.file-list-item:first').clone();
                let fr = new FileReader();
                fr.onload = function () {
                    html.find('div').attr('data-src', this.result).css('background', `url(${this.result})no-repeat center center / cover`);
                    fileList.append(html);
                };
                fr.readAsDataURL(v)
            })
        });
    });

</script>
