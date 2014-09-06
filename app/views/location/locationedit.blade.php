@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Branch Edit Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                            {{ Form::open(array('url' => 'location/update', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    &nbsp;Title
                                    <input type="text" name="title" value="{{$title}}" placeholder="Title" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    &nbsp;Location Charges Rate
                                    <input type="text" name="chargesrate" value="{{$chargesrate}}" placeholder="Charges Rate" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
                            &nbsp;Description
                            <textarea class="form-control" rows="3" name="description" placeholder="Description">{{$description}}</textarea>
                            <div class="horizontal-space"></div>
                            <div>
                                <button type="submit" class="btn btn-default">Update</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
	</div>
@stop
