@extends('layouts/back')
<style>

    .col-sm-6 {
        margin-bottom: 30px;

    }

    .tile-navbar {
        padding-left: 15px !important;
    }

    .item {
        position: relative;
        animation: all 500ms;
        overflow: hidden;
    }


    .item img {
        height: 300px;
    }

    .tile-navbar {
        margin: 0 0 15px 0 !important;
    }

    .mymask {
        width: calc(100% - 30px);
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        position: absolute;
        bottom: -10px;
        left: 15px;
    }
</style>
@section('mail')
    <section class="tile color transparent-black">
        <!-- tile header -->
        <div class="pageheader">
            <h2><i class="fa fa-picture-o"></i> 相册 <a href="{{url('admin/photoadd')}}" class="btn btn-red">添加</a>
            </h2>
        </div>
        <div class="tile-header">
            <h1><strong>相册</strong>列表</h1>
        </div>
        <!-- /tile header -->
        <!-- tile body -->
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

        <div class="container-fluid">
            <ul class="tile-navbar bg-transparent-black-3">
                <li>
                    <div class="checkbox check-transparent">
                        <input type="checkbox" value="1" id="selectAll">
                        <label for="selectAll"> 全选</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox check-transparent">
                        <input type="checkbox" value="1" id="noAllSelect">
                        <label for="noAllSelect"> 反选</label>
                    </div>
                </li>
                <li>
                    <a href="javascript:;" class="gallery-tool" id="delSelect"> <i class="fa fa-trash-o"></i> 删除</a>
                </li>
            </ul>
            <div class="row">
                <form action="{{url('admin/delselect')}}" method="post" id="selectForm">
                    @csrf
                    @foreach($photo as $p)
                        <div class="col-md-4 col-sm-6 col-lg-3 item">
                            <div class="img-list spotlight" data-src="{{asset($p->pic)}}"
                                 data-title="{{$p->title}}"
                                 data-description="{{$p->description}}"
                                 style="background: url({{asset($p->pic)}})no-repeat center center / cover">
                            </div>
                            <div class="mymask">
                                <ul class="tile-navbar bg-transparent-black-3">
                                    <li>
                                        <div class="checkbox check-transparent singleCheckBox">
                                            <input type="checkbox" id="select{{$p->id}}" name="id[]"
                                                   value="{{$p->id}}">
                                            <label for="select{{$p->id}}">选择</label>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{url("admin/photoedit/$p->id")}}" class="gallery-tool"><i
                                                class="fa fa-pencil"></i> 编辑</a>
                                    </li>
                                    <li>
                                        <a href="{{url("admin/photodel/$p->id")}}" class="gallery-tool"
                                           onclick="if(!confirm('确定要删除吗！')) return false;"><i
                                                class="fa fa-trash-o"></i> 删除</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
            <div class="row text-center">
                {{$photo->links()}}
            </div>
        </div>
    </section>

@endsection
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('js/spotlight.bundle.js')}}"></script>
<script>
    $(function () {
        let onOff = false;
        $("#selectAll").click(function () {
            $(".singleCheckBox").each(function (k, v) {
                let input = $(v).find('input');
                if (!onOff) {
                    $(v).click();
                    input.prop('checked', true);
                } else {
                    $(v).click();
                    input.prop('checked', false);
                }
            });
            onOff = !onOff;
        });

        $("#noAllSelect").click(function () {
            $(".singleCheckBox").each(function (k, v) {
                let input = $(v).find('input');
                let currentStatus = input.prop("checked");
                $(v).click();
                input.prop('checked', !currentStatus);
            });
        });

        $("#delSelect").click(function () {
            $("#selectForm").submit();
        })
    })
</script>
