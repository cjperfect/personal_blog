@extends('layouts/back')
@section('mail')

    <section class="tile color transparent-black">
        <div class="container-fluid">
            <!-- tile header -->
            <div class="pageheader">
                <h2><i class="fa fa-user"></i> 管理员</h2>
            </div>
            <div class="tile-header">
                <h1><strong>管理员</strong>列表</h1>
            </div>
            <!-- /tile header -->

            <!-- tile body -->
            <div class="tile-body nopadding">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
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
                        @if(session('userFlag') != 1)
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <strong>提示：</strong> 当前用户没有权限
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>编号</th>
                                <th>用户名</th>
                                <th>身份</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allUsers as $key=>$user)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>
                                        @if($user->flag == 1)
                                            <label class="badge badge-blue">管理员</label>
                                        @else
                                            <label class="badge badge-danger">用户</label>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url("admin/userdel/$user->id")}}" class="btn btn-hotpink btn-sm"
                                               @if(session('userFlag') != 1) disabled
                                               @endif onclick="if(!confirm('确定要删除？')) return false;">删除</a>
                                            <a href="#" class="btn btn-cyan btn-sm" data-toggle="modal"
                                               data-target="#myModal" onclick="editModal({{$user->id}})"
                                               @if(session('userFlag') != 1) disabled @endif>修改</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <!-- tile -->
                        <section class="tile color transparent-black">

                            <!-- tile header -->
                            <div class="tile-header">
                                <h1><strong>用户</strong> 添加 </h1>
                            </div>

                            <!-- /tile header -->
                            <!-- tile body -->
                            <div class="tile-body">

                                <div class="alert alert-danger alert-dismissible" role="alert" id="pwdAlert"
                                     style="display: none">
                                    welcome
                                </div>
                                <form class="form-horizontal" role="form" method="post"
                                      action="{{url('admin/useradd')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username" class="col-sm-4 control-label">用户名</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" name="username"
                                                   value="{{old('username')}}" @if(session('userFlag') != 1) disabled
                                                   @endif placeholder="字符长度6-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-4 control-label">密码</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password" name="password"
                                                   @if(session('userFlag') != 1) disabled @endif placeholder="字符长度6-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword" class="col-sm-4 control-label">确认密码</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="confirmPassword"
                                                   name="password_confirmation"
                                                   @if(session('userFlag') != 1) disabled @endif placeholder="字符长度6-12"
                                                   onblur="confirmPwd(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8 btn-group">
                                            <button type="reset" class="btn btn-orange"
                                                    @if(session('userFlag') != 1) disabled @endif>
                                                重置
                                            </button>
                                            <button type="submit" class="btn btn-red"
                                                    @if(session('userFlag') != 1) disabled @endif>
                                                添加
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <!-- /tile body -->
                        </section>
                        <!-- /tile -->
                    </div>
                </div>

            </div>
            <!-- /tile body -->
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">修改用户</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="{{url('admin/userchange')}}"
                          id="editchange">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="input03" class="col-sm-4 control-label">用户名</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="input03" name="username"
                                       value="" @if(session('userFlag') != 1) disabled @endif placeholder="字符长度6-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input04" class="col-sm-4 control-label">密码</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="input04" name="password"
                                       @if(session('userFlag') != 1) disabled @endif placeholder="字符长度6-12">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-red" @if(session('userFlag') != 1) disabled
                                    @endif onclick="submitEdit()">提交
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
    function editModal(id) {
        $("#id").val(id);
        $("#input03").val('');
        $.post("{{url('admin/useredit')}}", {id: id, '_token': '{{csrf_token()}}'}, function (result) {
            $("#input03").val(result);
        });
    }

    window.onload = function () {

    }


</script>
