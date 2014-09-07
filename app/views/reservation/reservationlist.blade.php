@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Reservation Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Customer
                                                </th>
                                                <th>
                                                    From
                                                </th>
                                                <th>
                                                    To
                                                </th>
                                                <th>
                                                    Branch
                                                </th>
                                                <th>
                                                    Table Name
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>MG MG</td>
                                                <td>13:00</td>
                                                <td>15:00</td>
                                                <td>Parami</td>
                                                <td>Pa Dauk</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AG AG</td>
                                                <td>15:00</td>
                                                <td>18:00</td>
                                                <td>Parami</td>
                                                <td>Ngu War</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lin Yaung</td>
                                                <td>09:00</td>
                                                <td>12:00</td>
                                                <td>Parami</td>
                                                <td>Nan Taw</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Taw Tar</td>
                                                <td>16:00</td>
                                                <td>17:00</td>
                                                <td>Parami</td>
                                                <td>Mandalay</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wayne Wayne</td>
                                                <td>13:00</td>
                                                <td>15:00</td>
                                                <td>Parami</td>
                                                <td>Sein Pan</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Naing Linn</td>
                                                <td>12:00</td>
                                                <td>13:00</td>
                                                <td>Parami</td>
                                                <td>Ohn OHn</td>
                                                <td>
                                                    <a href="{{ URL::to('reservation/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('reservation/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@stop