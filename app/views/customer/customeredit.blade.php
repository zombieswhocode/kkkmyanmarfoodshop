@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Customer Update Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        {{ Form::open(array('url' => 'customer/create', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="user_name" placeholder="User Name (nick name ) " value="Thar Thar" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="first_name" placeholder="First Name" value="War War" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="last_name" placeholder="Last Name" value="Win Shwe" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="address" placeholder="Address" value="Parami" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="phone" placeholder="Phone Number" value="0912323434" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" placeholder="email" value="asdf@gmail.com" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="delivery_location" value="Parami, Myo Ma Street" placeholder="Delivery Location" class="form-control">
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

