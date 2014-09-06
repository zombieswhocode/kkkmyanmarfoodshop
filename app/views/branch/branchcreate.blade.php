@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Branch Insert Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        <form class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" name="to" placeholder="Title" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Address" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
                            <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                            <div class="horizontal-space"></div>
                            <div>
                                <button type="submit" class="btn btn-default">Insert</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
@stop

