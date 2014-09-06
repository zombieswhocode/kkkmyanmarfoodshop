@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">User Insert Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        {{ Form::open(array('url' => 'user/create', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="user_name" placeholder="User Name (nick name ) " class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="address" placeholder="Address" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" placeholder="email" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    &nbsp;&nbsp;Branch:
                                    <select name="branch_id">
                                        <option value="1">Parami</option>
                                        <option value="2">Gandamar</option>
                                        <option value="3">Pyi Road</option>
                                        <option value="4">Taung Nguu</option>
                                    </select>
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                        &nbsp;&nbsp;Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    <select name="role_id">
                                        <option value="1">Staff</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Admin</option>
                                    </select>
                                    <div class="horizontal-space"></div>
                                </div>
                            </div>
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

