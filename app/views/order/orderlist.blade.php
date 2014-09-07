@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12 zawgyifont">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Order Data Lists
                </div>
                    <style>
                        .btn-xs{font-size: 8px;}
                    </style>
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
                                            <tr role="row">
                                                <th>
                                                    Order Id
                                                </th>
                                                <th>
                                                    Food
                                                </th>
                                                <th>
                                                    Customer
                                                </th>
                                                <th>
                                                    Customer Address
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Order Price
                                                </th>
                                                <th>
                                                    Order Status
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>OD1233</td>
                                                <td>၀က္သား</td>
                                                <td>Thaw Tar</td>
                                                <td>8miles</td>
                                                <td>091231232</td>
                                                <td>50</td>
                                                <td>23/05/14</td>
                                                <td>500000</td>
                                                <td><span class="label label-orange">
                                                            PENDING
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1234</td>
                                                <td>ပုဇြန္ဟင္း</td>
                                                <td>Tin Maung</td>
                                                <td>Parami</td>
                                                <td>09341179</td>
                                                <td>30</td>
                                                <td>27/07/14</td>
                                                <td>350000</td>
                                                <td><span class="label label-palegreen">
                                                            APPROVED
                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1235</td>
                                                <td>ဆိတ္ပဲ</td>
                                                <td>Yarzar</td>
                                                <td>Gandama</td>
                                                <td>09444467</td>
                                                <td>40</td>
                                                <td>23/05/14</td>
                                                <td>500000</td>
                                                <td><span class="label label-palegreen">
                                                            APPROVED
                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1236</td>
                                                <td>ၾကက္သား ဘူးသီး</td>
                                                <td>Lwin Lwin</td>
                                                <td>8miles</td>
                                                <td>099994333</td>
                                                <td>50</td>
                                                <td>23/05/14</td>
                                                <td>100000</td>
                                                <td><span class="label label-orange">
                                                            PENDING
                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1237</td>
                                                <td>ဆိတ္သား</td>
                                                <td>Bo Bo</td>
                                                <td>Pyi Road</td>
                                                <td>0923451232</td>
                                                <td>50</td>
                                                <td>23/05/14</td>
                                                <td>150000</td>
                                                <td>
                                                    <span class="label label-palegreen">
                                                            APPROVED
                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OD1238</td>
                                                <td>ၾကက္သား</td>
                                                <td>Phway Phway</td>
                                                <td>8miles</td>
                                                <td>094280898</td>
                                                <td>30</td>
                                                <td>23/05/14</td>
                                                <td>90000</td>
                                                <td>
                                                    <span class="label label-palegreen">
                                                            APPROVED
                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-primary btn-xs">Approve</a>
                                                    <a href="{{ URL::to('order/update/1') }}" class="btn btn-info btn-xs edit"> Edit</a>
                                                    <a href="{{ URL::to('order/delete/1') }}" class="btn btn-danger btn-xs delete"> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@stop