@extends('layouts.default')
@section('content')
 <!--Page Related Scripts-->
<!--Page Related styles-->
{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
 <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well with-header  with-footer">
                <div class="header bg-palegreen">
                    Customer Data Lists
                </div>
                    
                   <table class="table table-hover table-striped table-bordered">
                    <thead class="bordered-blueberry">
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
                                                <td>Aung Aung</td>
                                                <td>U Min</td>
                                                <td>Aung</td>
                                                <td>Thuwana</td>
                                                <td>09123454646</td>
                                                <td>aung@gmail.com</td>
                                                <td>Gandamar</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Myo Myint</td>
                                                <td>Myo Myo</td>
                                                <td>Myint Shwe</td>
                                                <td>Pyi Road</td>
                                                <td>0923456534</td>
                                                <td>myomyo@gmail.com</td>
                                                <td>Pyi Road</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tin Maung</td>
                                                <td>Sann Myint</td>
                                                <td>Oo</td>
                                                <td>Parami</td>
                                                <td>0923223434324</td>
                                                <td>tinmaung@gmail.com</td>
                                                <td>Parami</td>
                                                <td>Parami,myoma street</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>That Htar</td>
                                                <td>That Htar</td>
                                                <td>Nwe</td>
                                                <td>Kamaryout</td>
                                                <td>093434234324</td>
                                                <td>thathtar@gmail.com</td>
                                                <td>Parami</td>
                                                <td>
                                                    <a href="{{ URL::to('customer/update/1') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('customer/delete/1') }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hnin Hnin</td>
                                                <td>Hnin Thet</td>
                                                <td>Nwe Oo</td>
                                                <td>Parami</td>
                                                <td>0923234234324</td>
                                                <td>asdf@gmail.com</td>
                                                <td>Parami</td>
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
@stop