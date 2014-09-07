@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Table Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Branch
                                                </th>
                                                <th>
                                                    No of Chairs
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Type
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Pa Dauk</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Ha Kar</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Ngu War</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Sein Pan</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Kyar</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Parami</td>
                                                <td>6</td>
                                                <td>Ma Yann</td>
                                                <td>Table</td>
                                                <td>
                                                    <a href="{{ URL::to('table/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('table/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@stop