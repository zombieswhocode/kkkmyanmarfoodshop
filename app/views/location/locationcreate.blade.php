@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Branch Insert Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        {{ Form::open(array('url' => 'location/create', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="chargesrate" placeholder="Location Charges Rate" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
                            <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
                            <div class="horizontal-space"></div>
                            <div>
                                <button type="submit" class="btn btn-default">Insert</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

