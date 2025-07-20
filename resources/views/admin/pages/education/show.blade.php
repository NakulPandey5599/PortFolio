@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Degree and Certification Here</h4>
                            <p class="card-description"> 
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Degree</th>
                                            <th>Institution</th>
                                            <th>Start Year</th>
                                            <th>End Year</th>
                                            <th>Description</th>
                                            
                                    </thead>
                                    <tbody>
                                        {{-- @dd($skills) --}}
                                        @foreach ($education as $education)
                                            
                                        <tr>
                                            {{-- @dd($skill->id) --}}
                                            <td>{{ $education->degree }}</td>
                                            <td>{{ $education->institution }}</td>
                        
                                            <td>{{ $education->start_year }}</td>
                                            <td>{{ $education->end_year}}</td>
                                            <td>{{$education->description}}</td> 
                                            <td> <a href="{{ route('education.edit', $education->id) }}"
                                                    class="btn btn-inverse-warning btn-fw">Edit</a>
                                            </td>
                                            <td><button type="button" class="btn btn-inverse-danger btn-fw">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
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
