@extends('layouts.app');

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Role</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('roles.index')}}">Roles</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6 col-sm-6">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Role Information</header>
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
                            <form method="post" action="{{route('roles.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                           placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-3 col-md-9">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a class="btn btn-default" href="{{route('roles.index')}}">Cancel</a>
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