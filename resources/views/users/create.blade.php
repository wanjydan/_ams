@extends('layouts.app');

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add User</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('users.index')}}">Users</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6 col-sm-6">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>User Information</header>
                            <button id="panel-button"
                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                    data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here
                                </li>
                            </ul>
                        </div>
                        <div class="card-body " id="bar-parent">
                            <form method="post" action="{{route('users.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                           placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                           placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           placeholder="Enter Phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        @forelse($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-4 col-md-6">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a class="btn btn-default" href="{{route('users.index')}}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection