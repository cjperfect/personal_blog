@extends('layouts/back')
@section('mail')
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-tachometer"></i> 主面板</h2>
    </div>
    <!-- content mail container -->
    <div class="main">
        <div class="container-fluid">
            <!-- cards -->
            <div class="row cards">
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card card-redbrown hover">
                        <div class="front">
                            <div class="media">
                    <span class="pull-left">
                      <i class="fa fa-users media-object"></i>
                    </span>
                                <div class="media-body">
                                    <small>用户数量</small>
                                    <h2 class="media-heading animate-number" data-value="{{$countUsers}}"
                                        data-animation-duration="1500">{{$countUsers}}</h2>
                                </div>
                            </div>

                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">This total plan %</div>
                                </div>
                                <div class="status pull-right bg-transparent-black-1">
                                        <span class="animate-number" data-value="100"
                                              data-animation-duration="1500">0</span>%
                                </div>
                                <div class="clearfix"></div>
                                <div class="progress progress-little progress-transparent-black">
                                    <div class="progress-bar animate-progress-bar" data-percentage="100%"></div>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart-o fa-4x"></i>
                                <span>Welcome</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card card-blue hover">
                        <div class="front">

                            <div class="media">
                    <span class="pull-left">
                      <i class="fa fa-book media-object"></i>
                    </span>

                                <div class="media-body">
                                    <small>日记数量</small>
                                    <h2 class="media-heading animate-number" data-value="{{$countNotes}}"
                                        data-animation-duration="1500">0</h2>
                                </div>
                            </div>

                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">This month plan %</div>
                                </div>
                                <div class="status pull-right bg-transparent-black-1">
                                        <span class="animate-number" data-value="100"
                                              data-animation-duration="1500">0</span>%
                                </div>
                                <div class="clearfix"></div>
                                <div class="progress progress-little progress-transparent-black">
                                    <div class="progress-bar animate-progress-bar" data-percentage="100%"></div>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <a href="javscript:;">
                                <i class="fa fa-bar-chart-o fa-4x"></i>
                                <span>Welcome</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card card-greensea hover">
                        <div class="front">

                            <div class="media">
                    <span class="pull-left">
                      <i class="fa fa-picture-o media-object"></i>
                    </span>

                                <div class="media-body">
                                    <small>相片数量</small>
                                    <h2 class="media-heading animate-number" data-value="{{$countPhoto}}"
                                        data-animation-duration="1500">0</h2>
                                </div>
                            </div>

                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">This month plan %</div>
                                </div>
                                <div class="status pull-right bg-transparent-black-1">
                                        <span class="animate-number" data-value="100"
                                              data-animation-duration="1500">0</span>%
                                </div>
                                <div class="clearfix"></div>
                                <div class="progress progress-little progress-transparent-black">
                                    <div class="progress-bar animate-progress-bar" data-percentage="100%"></div>
                                </div>
                            </div>

                        </div>
                        <div class="back">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart-o fa-4x"></i>
                                <span>Welcome</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-container col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-slategray hover">
                        <div class="front">

                            <div class="media">
                    <span class="pull-left">
                      <i class="fa fa-eye media-object"></i>
                    </span>

                                <div class="media-body">
                                    <small>访问量</small>
                                    <h2 class="media-heading animate-number" data-value="{{$visited}}"
                                        data-animation-duration="1500">0</h2>
                                </div>
                            </div>

                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">This month plan %</div>
                                </div>
                                <div class="status pull-right bg-transparent-black-1">
                                        <span class="animate-number" data-value="100"
                                              data-animation-duration="1500">100</span>%
                                </div>
                                <div class="clearfix"></div>
                                <div class="progress progress-little progress-transparent-black">
                                    <div class="progress-bar animate-progress-bar" data-percentage="100%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart-o fa-4x"></i>
                                <span>Welcome</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /cards -->

    </div>
    <!-- /content container -->

@endsection

