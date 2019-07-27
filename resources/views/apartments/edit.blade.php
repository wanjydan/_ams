@extends('layouts.app');

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Edit Apartment</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('apartments.index')}}">Apartments</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6 col-sm-6">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Apartment Information</header>
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
                            <form method="post" action="{{route('apartments.update', $apartment->id)}}">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="id">Id</label>
                                    <input type="text" class="form-control" id="id" name="id" value="{{$apartment->id}}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$apartment->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <select class="form-control" id="region" name="region" required>
                                        @forelse($regions as $region)
                                            <option {{$region->id==$apartment->region->id ? 'selected' : ''}} value="{{$region->id}}">{{$region->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-3 col-md-9">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a class="btn btn-default" href="{{route('apartments.index')}}">Cancel</a>
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