@extends('admin.layouts.app')

@section('content')
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-violet"><i class="icon-user"></i></div>
                        <div class="title"><span>New<br>Clients</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                        <div class="number"><strong>25</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-red"><i class="icon-padnote"></i></div>
                        <div class="title"><span>Work<br>Orders</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                        <div class="number"><strong>70</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-green"><i class="icon-bill"></i></div>
                        <div class="title"><span>New<br>Invoices</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                        <div class="number"><strong>40</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-orange"><i class="icon-check"></i></div>
                        <div class="title"><span>Open<br>Cases</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                        <div class="number"><strong>50</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                        <div class="text"><strong>234</strong><br><small>Applications</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                        <div class="text"><strong>152</strong><br><small>Interviews</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                        <div class="text"><strong>147</strong><br><small>Forwards</small></div>
                    </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                    <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="lineCahrt" width="783" height="391" class="chartjs-render-monitor" style="display: block; width: 783px; height: 391px;"></canvas>
                    </div>
                </div>
                <div class="chart col-lg-3 col-12">
                    <!-- Bar Chart   -->
                    <div class="bar-chart has-shadow bg-white"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
                        <canvas id="barChartHome" width="376" height="188" class="chartjs-render-monitor" style="display: block;"></canvas>
                    </div>
                    <!-- Numbers-->
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                        <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects no-padding-top">
        <div class="container-fluid">
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-4.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection