@extends('layouts/back')
@section('mail')
    <section class="tile color transparent-black">
        <div class="container-fluid">
            <!-- tile header -->
            <div class="pageheader">
                <h2><i class="fa fa-book"></i> 日记 <a href="{{url('admin/noteadd')}}" class="btn btn-red">添加</a></h2>
            </div>
            <div class="tile-header">
                <h1><strong>日记</strong>列表</h1>
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
                </div>
            </div>
            <!-- /tile header -->
            <!-- tile body -->
            <div class="tile-body nopadding">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>创建时间</th>
                            <th>热度</th>
                            <th>作者</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notes as $k=>$note)
                            <tr>
                                <td>{{$k + 1}}</td>
                                <td>{{$note->title}}</td>
                                <td>{{$note->created_at}}</td>
                                <td>{{$note->hot}}</td>
                                <td>{{$note->author}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url("admin/notedel/$note->id")}}" class="btn btn-hotpink btn-sm"
                                           onclick="if(!confirm('确定要删除吗？')) return false;">删除</a>
                                        <a href="{{url("admin/noteedit/$note->id")}}" class="btn btn-cyan btn-sm">修改</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row text-center">
                    {{$notes->links()}}
                </div>
            </div>
        </div>
        <!-- /tile body -->
    </section>
@endsection
