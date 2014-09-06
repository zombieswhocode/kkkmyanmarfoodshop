@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">orderes DataTable</span>
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
                                                    Order Id
                                                </th>
                                                <th>
                                                    Main Branch
                                                </th>
                                                <th>
                                                    Customer Address
                                                </th>
                                                <th>
                                                    Delivery Branch
                                                </th>
                                                <th>
                                                    Start Date
                                                </th>
                                                <th>
                                                    End Date
                                                </th>
                                                <th>
                                                    Order Price
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Parami</td>
                                                <td>Alex Nilson</td>
                                                <td>1234</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Waizayantar
                                                </td>
                                                <td>
                                                    Nick Roberts
                                                </td>
                                                <td>
                                                    62
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8miles
                                                </td>
                                                <td>
                                                    Sergio Jackson
                                                </td>
                                                <td>
                                                    132
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Naypyitaw
                                                </td>
                                                <td>
                                                    Lisa Wong
                                                </td>
                                                <td>
                                                    434
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Taung Nguu
                                                </td>
                                                <td>
                                                    Nick Roberts
                                                </td>
                                                <td>
                                                    232
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Pyi
                                                </td>
                                                <td>
                                                    Antonio Sanches
                                                </td>
                                                <td>
                                                    462
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@stop