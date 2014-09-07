@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Location Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Charges Rate
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Parami</td>
                                                <td>Alex Nilson</td>
                                                <td>20000</td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
                                                    30000
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
                                                    40000
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
                                                    50000
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
                                                    5000
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
                                                    12000
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('location/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('location/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@stop