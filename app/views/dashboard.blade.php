@extends('layouts.default')
@section('content')


	<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themesecondary">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themesecondary">7</span>
                                            <div class="databox-text darkgray">NEW LUNCHBOX ORDER</div>
                                            <div class="databox-stat themesecondary radius-bordered">
                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themethirdcolor">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themethirdcolor">1</span>
                                            <div class="databox-text darkgray">NEW MESSAGE</div>
                                            <div class="databox-stat themethirdcolor radius-bordered">
                                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themeprimary">
                                            <div class="databox-piechart">
                                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">56%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themeprimary">8</span>
                                            <div class="databox-text darkgray">NEW ORDER</div>
                                            <div class="databox-state bg-themeprimary">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="orders-container">
                    <div class="orders-header">
                        <h6>Latest Orders</h6>
                    </div>
                    <ul class="orders-list">
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Ned Stards</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>10 minutes ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">400</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item top">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Steve Lewis</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">620</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">John Ford</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>Today 8th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">220</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Kim Basinger</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>Yesterday 7th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">400</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Steve Lewis</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>5th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">340</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                    </ul>
                    <div class="orders-footer">
                        <a class="show-all" href=""><i class="fa fa-angle-down"></i> Show All</a>
                        <div class="help">
                            <a href=""><i class="fa fa-question"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-tasks themeprimary"></i>
                                    <span class="widget-caption themeprimary">Task Board</span>
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <div class="task-container">
                                            <div class="task-search">
                                                <span class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Search Tasks">
                                                    <i class="fa fa-search gray"></i>
                                                </span>
                                            </div>
                                            <ul class="tasks-list">
                                                <li class="task-item">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="task-state">
                                                        <span class="label label-yellow">
                                                            In Progress
                                                        </span>
                                                    </div>
                                                    <div class="task-time">1 hour ago</div>
                                                    <div class="task-body">Ask to the sysadmins to install Python 3 on the server and run it</div>
                                                    <div class="task-creator"><a href="">Cameron Hetfield</a></div>
                                                    <div class="task-assignedto">assigned to you</div>
                                                </li>
                                                <li class="task-item">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="task-state">
                                                        <span class="label label-orange">
                                                            Active
                                                        </span>
                                                    </div>
                                                    <div class="task-time">2 hours ago</div>
                                                    <div class="task-body">Write documentation for the new API with test and deploy specifications</div>
                                                    <div class="task-creator"><a href="">Behrang Nitsche</a></div>
                                                    <div class="task-assignedto">assigned to you</div>
                                                </li>
                                                <li class="task-item">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="task-state">
                                                        <span class="label label-palegreen">
                                                            Approved
                                                        </span>
                                                    </div>
                                                    <div class="task-time">yesterday</div>
                                                    <div class="task-body">Code refactoring and rewriting silly codes and test it</div>
                                                    <div class="task-creator"><a href="">David Fincher</a></div>
                                                    <div class="task-assignedto">assigned to Kim</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div>

                        </div>
        		</div>
    			
@stop