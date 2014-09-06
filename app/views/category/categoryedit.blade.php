@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Category Edit Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                            {{ Form::open(array('url' => 'foodcategory/update', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    &nbsp;Title
                                    <input type="text" name="title" value="{{$title}}" placeholder="Title" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
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
