@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark1" class="chart sparkline"></div>
                <div class="data-info">
                    <div class="desc">New Users</div>
                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark2" class="chart sparkline"></div>
                <div class="data-info">
                    <div class="desc">Monthly Sales</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark3" class="chart sparkline"></div>
                <div class="data-info">
                    <div class="desc">Impressions</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark4" class="chart sparkline"></div>
                <div class="data-info">
                    <div class="desc">Downloads</div>
                    <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                    <div class="tools">
                        <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="index.html#">Week</a></li>
                                <li><a href="index.html#">Month</a></li>
                                <li><a href="index.html#">Year</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#">Today</a></li>
                            </ul>
                        </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                    </div>
                    <div class="button-toolbar hidden-xs">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Week</button>
                            <button type="button" class="btn btn-default active">Month</button>
                            <button type="button" class="btn btn-default">Year</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Today</button>
                        </div>
                    </div><span class="title">Recent Movement</span>
                </div>
                <div class="widget-chart-container">
                    <div class="widget-chart-info">
                        <ul class="chart-legend-horizontal">
                            <li><span data-color="main-chart-color1"></span> Purchases</li>
                            <li><span data-color="main-chart-color2"></span> Plans</li>
                            <li><span data-color="main-chart-color3"></span> Services</li>
                        </ul>
                    </div>
                    <div class="widget-counter-group widget-counter-group-right">
                        <div class="counter counter-big">
                            <div class="value">25%</div>
                            <div class="desc">Purchase</div>
                        </div>
                        <div class="counter counter-big">
                            <div class="value">5%</div>
                            <div class="desc">Plans</div>
                        </div>
                        <div class="counter counter-big">
                            <div class="value">5%</div>
                            <div class="desc">Services</div>
                        </div>
                    </div>
                    <div id="main-chart" style="height: 260px;"></div>
                </div>
                <div class="be-spinner">
                    <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">Работники
                    <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                </div>
                <div class="panel-body">
                    <table id="table1" class="table table-striped table-hover table-fw-widget">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Ip</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                        <tr class="odd gradeX">
                             <td>{{ $employee->id }}</td>
                             <td>{{ $employee->name }}</td>
                             <td>{{ $employee->ip }}</td>
                             <td>{{ $employee->email }}</td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Activity</div>
                <div class="panel-body">
                    <ul class="user-timeline user-timeline-compact">
                        <li class="latest">
                            <div class="user-timeline-date">Just Now</div>
                            <div class="user-timeline-title">Create New Page</div>
                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                        </li>
                        <li>
                            <div class="user-timeline-date">Today - 15:35</div>
                            <div class="user-timeline-title">Back Up Theme</div>
                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                        </li>
                        <li>
                            <div class="user-timeline-date">Yesterday - 10:41</div>
                            <div class="user-timeline-title">Changes In The Structure</div>
                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.      </div>
                        </li>
                        <li>
                            <div class="user-timeline-date">Yesterday - 3:02</div>
                            <div class="user-timeline-title">Fix the Sidebar</div>
                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="widget be-loading">
                <div class="widget-head">
                    <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                    <div class="title">Conversions</div>
                </div>
                <div class="widget-chart-container">
                    <div class="widget-chart-info xs-mb-20">
                        <div class="indicator indicator-positive pull-right"><span class="icon mdi mdi-chevron-up"></span><span class="number">15%</span></div>
                        <div class="counter counter-inline">
                            <div class="value">156k</div>
                            <div class="desc">Impressions</div>
                        </div>
                    </div>
                    <div id="map-widget" style="height: 265px;"></div>
                </div>
                <div class="be-spinner">
                    <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
