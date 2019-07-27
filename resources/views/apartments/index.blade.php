@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">View Apartment</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Apartments</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-topline-purple">
                        <div class="card-head">
                            <header>APARTMENTS</header>
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
                                        <a id="addRow" class="btn btn-info" href="{{route('apartments.create')}}">
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
                                        <th>Region</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($apartments as $apartment)
                                        <tr>
                                            <td><a href="#">{{$apartment->id}}</a></td>
                                            <td>{{$apartment->name}}</td>
                                            <td>{{$apartment->region->name}}</td>
                                            <td>
                                                <button class="btn btn-success btn-xs">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <a class="btn btn-primary btn-xs" href="{{route('apartments.edit', $apartment->id)}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form style="display: inline" method="post"
                                                      action="{{route('apartments.destroy', $apartment->id)}}">
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