@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Staffs</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Staffs</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Staffs</li>
                    </ol>
                </div>
            </div>
            <ul class="nav nav-pills nav-pills-rose">
                <li class="nav-item tab-all"><a class="nav-link active show"
                                                href="{{route('users.create')}}">Add New</a></li>
            </ul>
            <div class="tab-content tab-space">
                <div class="tab-pane active show" id="tab1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <button id="panel-button"
                                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                            data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="panel-button">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-checkable order-column full-width"
                                               id="example4">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th class="center"> Name</th>
                                                <th class="center"> Designation</th>
                                                <th class="center"> Apartment</th>
                                                <th class="center"> Mobile</th>
                                                <th class="center"> Email</th>
                                                <th class="center">Joining Date</th>
                                                <th class="center"> Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($users as $user)
                                                <tr class="odd gradeX">
                                                    <td class="user-circle-img sorting_1">
                                                        <img src="{{asset('img/user/user1.jpg')}}" alt="">
                                                    </td>
                                                    <td class="center">{{$user->first_name . ' '. $user->last_name}}</td>
                                                    <td class="center">{{$user->role->name}}</td>
                                                    <td class="center">Wima</td>
                                                    <td class="center"><a href="tel:{{$user->phone}}">
                                                            {{$user->phone}} </a></td>
                                                    <td class="center"><a href="mailto:{{$user->email}}">
                                                            {{$user->email}} </a></td>
                                                    <td class="center">{{$user->created_at->format('d M Y')}}</td>
                                                    <td class="center">
                                                        <a href="edit_staff.html" class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="btn btn-tbl-delete btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
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
        </div>
    </div>
@endsection