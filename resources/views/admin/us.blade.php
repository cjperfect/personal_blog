@extends('layouts/back')
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">

            <div class="pageheader">
                <h2><i class="fa fa-user"></i> 个人简介</h2>
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
                        <form class="form-horizontal" role="form" enctype="multipart/form-data"
                              action="{{url('admin/us')}}"
                              method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$us->id}}">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="col-sm-4 control-label" for="">姓名（他）</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="heName" value="{{$us->heName}}"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-sm-4 control-label" for="">姓名（她）</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="sheName" value="{{$us->sheName}}"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="col-sm-4 control-label" for="he">个人简介（他）</label>
                                    <div class="col-sm-8">
                                    <textarea name="heDescription" id="he" cols="30" rows="10"
                                              class="form-control" required>{{$us->heDescription}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-sm-4 control-label" for="she">个人简介（她）</label>
                                    <div class="col-sm-8">
                                    <textarea name="sheDescription" id="she" cols="30" rows="10"
                                              class="form-control" required>{{$us->sheDescription}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-4 control-label">图片（他）</label>
                                        <div class="col-sm-8 upload">
                                            <div class="upload_main">
                                                <div class="fa fa-upload"></div>
                                                <input type="file" name="hePic" id="upload" class="form-control">
                                            </div>
                                            <div class="row file-list">
                                                <div class="file-list-item spotlight-group"
                                                     style="display: block">
                                                    <div class="img-list spotlight" data-src="{{asset($us->hePic)}}"
                                                         style="background: url({{asset($us->hePic)}})no-repeat center center / cover">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="" class="col-sm-4 control-label">图片（她）</label>
                                        <div class="col-sm-8 upload">
                                            <div class="upload_main">
                                                <div class="fa fa-upload"></div>
                                                <input type="file" name="shePic" id="upload1" class="form-control">
                                            </div>
                                            <div class="row file-list">
                                                <div class="file-list-item spotlight-group"
                                                     style="display: block">
                                                    <div class="img-list spotlight" data-src="{{asset($us->shePic)}}"
                                                         style="background: url({{asset($us->shePic)}})no-repeat center center / cover">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group text-center">
                                <div class="btn-group">
                                    <button class="btn btn-success" type="submit">提交</button>
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
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/spotlight.bundle.js')}}"></script>
<script src="{{asset('assets/js/mail.js')}}"></script>
