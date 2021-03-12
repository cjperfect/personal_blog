@extends('layouts/back')
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">

            <div class="pageheader">
                <h2><i class="fa fa-gear"></i> 网站配置</h2>
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
                <div class="col-md-10 col-md-offset-1 ">
                    <!-- tile body -->
                    <div class="tile-body">
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/editconfig')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">网站关键字</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$data->keyword}}" name="keyword"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">网站描述</label>
                                <div class="col-sm-8">
                                <textarea name="description" cols="30" rows="10"
                                          class="form-control" required>{{$data->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" value="{{$data->email}}" name="email"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">地址</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$data->address}}" name="address"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">电话</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$data->phone}}" name="phone"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">版权</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$data->copyright}}"
                                           name="copyright"
                                           required>
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
