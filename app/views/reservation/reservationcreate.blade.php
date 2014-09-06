@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-pink">
                    <span class="widget-caption">Reservation Insert Form</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        {{ Form::open(array('url' => 'reservation/create', 'class' => 'form-horizontal', 'files' => true))}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="customer" placeholder="Customer Name" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="from" placeholder="Reservation Start Time" class="form-control">
                                    <div class="horizontal-space"></div>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="to" placeholder="Reservation End Time" class="form-control">
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
                                    &nbsp;&nbsp;Type:
                                    <select name="type_id">
                                        <option value="1">Room</option>
                                        <option value="2">reservation</option>
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

