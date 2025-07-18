@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Basic details</h4>
                                    <p>
                                        <strong>Name:{{$profile->name}}</strong> 
                                    </p>
                                    <p>
                                        <strong>Email:{{$profile->email}}</strong> 
                                    </p>
                                    <p>
                                        <strong>Gender: {{$profile->gender}}</strong> 
                                    </p>
                                    <p>
                                        <strong>Location:{{$profile->location}} </strong> 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Links</h4>
                                    <i class="mdi mdi-linkedin"></i> :{{$profile->linkedin}}
                                    <br><br><i class="mdi mdi-github"></i> :{{$profile->github}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Photo & Description</h4>
                            <img src="{{ asset('storage/' . $profile->image) }}" alt="photo"width="150">
                        </div>
                        <div class="card-body">
                            {{$profile->description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
@endsection
