@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Food Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Suggested
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Fried Chicken</td>
                                                <td>Chicken</td>
                                                <td>very good honey fried chicken</td>
                                                <td>pork,meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fried Rice</td>
                                                <td>Chicken</td>
                                                <td>very good fried rice</td>
                                                <td>pork,meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Soup</td>
                                                <td>Pork</td>
                                                <td>very good pork soup</td>
                                                <td>pork , meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>CoConut Rice</td>
                                                <td>meal</td>
                                                <td>very good coconut rice</td>
                                                <td>chicken , meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fried Pork slice</td>
                                                <td>Pork</td>
                                                <td>honey fried Pork</td>
                                                <td>pork,meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pork Stick</td>
                                                <td>Pork</td>
                                                <td>100Ks per stick</td>
                                                <td>pork,meat</td>
                                                <td>
                                                    <a href="{{ URL::to('food/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('food/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@stop