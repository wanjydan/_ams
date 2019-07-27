@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">View Roles</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Roles</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-topline-purple">
                        <div class="card-head">
                            <header>Roles</header>
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
                                        <a id="addRow" class="btn btn-info" href="{{route('roles.create')}}">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($roles as $role)
                                        <tr>
                                            <td><a href="#">{{$role->id}}</a></td>
                                            <td>{{$role->name}}</td>
                                            <td>{{$role->description}}</td>
                                            <td>
                                                <button class="btn btn-success btn-xs">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <a class="btn btn-primary btn-xs" href="{{route('roles.edit', $role->id)}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form style="display: inline" method="post"
                                                      action="{{route('roles.destroy', $role->id)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </form>
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
@endsection