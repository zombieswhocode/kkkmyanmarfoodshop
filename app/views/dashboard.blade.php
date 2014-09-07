@extends('layouts.default')
@section('content')


	<div class="row">
		
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        		<h3>Today's Orders</h3>
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
                                            <div class="databox-text darkgray">NEW MONTHLY ORDER</div>
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
                                            <div class="databox-text darkgray">NEW RESERVATION</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="orders-container zawgyifont">
                    <div class="orders-header">
                        <h5 style="font-size: 1.5em;font-weight: bold;font-family: Arial;margin-top: -5px;">Latest Orders</h5>
                    </div>
                    <ul class="orders-list">
                        <li class="order-item zawgyifont">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">ဆိတ္ပဲ ( ပြဲ ၅၀ )</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>10 minutes ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Ks</span>
                                        <span class="price">30000</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="order-item top">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">ၾကက္ပဲ ( ပြဲ ၃၀ )</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Ks</span>
                                        <span class="price">20000</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">၀က္ ဆီျပန္ ( ပြဲ ၂၅ )</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>6th Sep</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Ks</span>
                                        <span class="price">25000</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">ၾကက္ ဆီျပန္ ( ပြဲ ၂၅ )</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>6th Sep</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Ks</span>
                                        <span class="price">32000</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">ပုဇြန္ မီးဖုတ္ ( ပြဲ ၂၀ )</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>5th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Ks</span>
                                        <span class="price">48000</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="orders-footer">
                        <a class="show-all" href=""><i class="fa fa-angle-down"></i> Show All</a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-tasks themeprimary"></i>
                                    <span class="widget-caption themeprimary" style="font-size: 1.5em;font-weight: bold;font-family: Arial;">Tomorrow's Order Delivery</span>
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
                                                        <span class="label label-palegreen">
                                                            11:00 AM
                                                        </span>
                                                    </div>
                                                    <div class="task-time"></div>
                                                    <div class="task-body">Ask to the sysadmins to install Python 3 on the server and run it</div>
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
                                                            10:00 AM
                                                        </span>
                                                    </div>
                                                    <div class="task-time"></div>
                                                    <div class="task-body">Write documentation for the new API with test and deploy specifications</div>
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
                                                            14:00 PM
                                                        </span>
                                                    </div>
                                                    <div class="task-time"></div>
                                                    <div class="task-body">Code refactoring and rewriting silly codes and test it</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div>

                        </div>
        		</div>
    			
@stop