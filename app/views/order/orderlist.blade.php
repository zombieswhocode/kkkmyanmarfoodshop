@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Order Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Order Id
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
                                                <td>OD1233</td>
                                                <td>Hlaing</td>
                                                <td>8miles</td>
                                                <td>23/05/14</td>
                                                <td>23/05/14</td>
                                                <td>200000</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1234</td>
                                                <td>Kamaryout</td>
                                                <td>Parami</td>
                                                <td>23/05/14</td>
                                                <td>27/07/14</td>
                                                <td>150000</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1235</td>
                                                <td>Thingangyun</td>
                                                <td>Gandama</td>
                                                <td>23/05/14</td>
                                                <td>23/05/14</td>
                                                <td>100000</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1236</td>
                                                <td>MICT</td>
                                                <td>8miles</td>
                                                <td>23/05/14</td>
                                                <td>23/05/14</td>
                                                <td>200000</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1237</td>
                                                <td>Tarmwe</td>
                                                <td>Pyi Road</td>
                                                <td>23/05/14</td>
                                                <td>23/05/14</td>
                                                <td>250000</td>
                                                <td>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1238</td>
                                                <td>10miles</td>
                                                <td>8miles</td>
                                                <td>23/05/14</td>
                                                <td>23/05/14</td>
                                                <td>200000</td>
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
@stop