@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Customeres DataTable</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    
                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                        <thead>
                                            <tr role="row">
                                                <th>
                                                    User Name
                                                </th>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>
                                                    Last Name
                                                </th>
                                                <th>
                                                    Address
                                                </th>
                                                <th>
                                                    Phone Number
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Delivery Location
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thar Thar</td>
                                                <td>War War</td>
                                                <td>Win Shwe</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@stop