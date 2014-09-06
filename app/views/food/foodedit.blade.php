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
                        {{ Form::open(array('url' => 'food/update', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <select name="category_id">
                                        <option value="1">Chicken</option>
                                        <option value="2">Pork</option>
                                        <option value="3">Chicken</option>
                                        <option value="4">Chicken</option>
                                    </select>
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="suggested" placeholder="Suggested Food" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="file" name="image" placeholder="Image" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="file" name="image2" placeholder="Extra Image" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="file" name="image3" placeholder="Featured Image" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
                            <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
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