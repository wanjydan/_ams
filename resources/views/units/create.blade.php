@extends('layouts.app');

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Unit</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Dashboard</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('units.index')}}">Units</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Unit Information</header>
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
                            <form method="post" action="{{route('units.store')}}">
                                <div class="row">
                                    @csrf
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="apartment">Apartment</label>
                                        <select class="form-control" id="apartment" name="apartment" required>
                                            @forelse($apartments as $apartment)
                                                <option value="{{$apartment->id}}">{{$apartment->name}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="type">Unit Type</label>
                                        <select class="form-control" id="type" name="type" required>
                                            @forelse($unitTypes as $unitType)
                                                <option value="{{$unitType->id}}">{{$unitType->name}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="floor">Floor Number</label>
                                        <select class="form-control" id="floor" name="floor" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="number">House Number</label>
                                        <input type="text" class="form-control" id="number" name="number"
                                               placeholder="Enter House Number" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="rent">Rent</label>
                                        <input type="number" class="form-control" id="rent" name="rent"
                                               placeholder="Enter Rent" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label for="details">Details</label>
                                        <textarea class="form-control" rows="5" id="details" name="details"
                                                  placeholder="Enter More Details"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-5 col-md-4">
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