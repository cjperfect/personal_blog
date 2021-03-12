@extends('layouts/back')
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">
            <div class="pageheader">
                <h2><i class="fa fa-adjust"></i> 网站简介</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{url('admin/desc')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Banner</label>
                                <div class="col-sm-8">
                                <textarea name="banner" cols="30" rows="5"
                                          class="form-control" required>{{$data->banner}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Important Time</label>
                                <div class="col-sm-8">
                                    <input type="date" name="important_time" class="form-control"
                                           value="{{$data->important_time}}" id="date" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Time Description</label>
                                <div class="col-sm-8">
                                    <input type="text" name="time_description" class="form-control"
                                           value="{{$data->time_description}}" id="" required placeholder="某某人的生日">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Personal</label>
                                <div class="col-sm-8">
                                <textarea name="personal" cols="30" rows="5"
                                          class="form-control" required>{{$data->personal}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Gallery</label>
                                <div class="col-sm-8">
                                <textarea name="gallery" cols="30" rows="5"
                                          class="form-control" required>{{$data->gallery}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Love & Note</label>
                                <div class="col-sm-8">
                                <textarea name="loveNote" cols="30" rows="5"
                                          class="form-control" required>{{$data->loveNote}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-8">
                                <textarea name="contact" cols="30" rows="5"
                                          class="form-control" required>{{$data->contact}}</textarea>
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

