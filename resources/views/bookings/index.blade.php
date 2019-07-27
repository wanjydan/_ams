@extends('layouts.app');

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">View Bookings</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Bookings</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>All Bookings</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row p-b-20">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="new_booking.html" id="addRow" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group pull-right">
                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                           data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                    <thead>
                                    <tr>
                                        <th class="center"></th>
                                        <th class="center"> Name</th>
                                        <th class="center"> Mobile</th>
                                        <th class="center"> Email</th>
                                        <th class="center"> Apartment</th>
                                        <th class="center"> House</th>
                                        <th class="center"> Date</th>
                                        <th class="center"> Payment</th>
                                        <th class="center"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($bookings as $booking)
                                        <tr class="odd gradeX">
                                            <td class="user-circle-img">
                                                <img src="{{asset('img/user/user1.jpg')}}" alt="">
                                            </td>
                                            <td class="center">{{$booking->tenant->first_name . ' ' . $booking->tenant->last_name}}</td>
                                            <td class="center"><a href="tel:{{$booking->tenant->phone}}">
                                                    {{$booking->tenant->phone}} </a></td>
                                            <td class="center"><a href="mailto:{{$booking->tenant->email}}">
                                                    {{$booking->tenant->email}} </a></td>
                                            <td class="center">{{$booking->unit->apartment->name}}</td>
                                            <td class="center">{{$booking->unit->number}}</td>
                                            <td class="center">{{$booking->created_at->format('d/m/Y')}}</td>
                                            <td class="center">
                                                <span class="label label-sm label-success">Paid </span>
                                            </td>
                                            <td class="center">
                                                <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection