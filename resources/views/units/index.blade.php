@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">View Units</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Units</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-topline-purple">
                        <div class="card-head">
                            <header>UNITS</header>
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
                                        <a id="addRow" class="btn btn-info" href="{{route('units.create')}}">
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
                                        <th>Number</th>
                                        <th>Floor</th>
                                        <th>Type</th>
                                        <th>Rent</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($units as $unit)
                                        <tr>
                                            <td><a href="#">{{$unit->id}}</a></td>
                                            <td>{{$unit->number}}</td>
                                            <td>{{$unit->floor}}</td>
                                            <td>{{$unit->type->name}}</td>
                                            <td>{{$unit->rent}}</td>
                                            @if($unit->isVacant==1)
                                                <td><span class="label label-success label-sm">Vacant</span></td>
                                            @else
                                            <td><span class="label label-info label-sm">Occupied</span></td>
                                            @endif
                                            <td>
                                                <button class="btn btn-success btn-xs">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <a class="btn btn-primary btn-xs"
                                                   href="{{route('units.edit', $unit->id)}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form style="display: inline" method="post"
                                                      action="{{route('units.destroy', $unit->id)}}">
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