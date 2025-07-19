@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Skills</h4>
                            <p class="card-description"> 
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Skills Name</th>
                                            <th>Level</th>
                                            <th>Experience Years</th>
                                            <th>Categories</th>
                                            
                                    </thead>
                                    <tbody>
                                        {{-- @dd($skills) --}}
                                        @foreach ($skills as $skill)
                                            
                                        <tr>
                                            {{-- @dd($skill->id) --}}
                                            <td>{{ $skill->skill_name }}</td>
                                            <td>{{ $skill->level }}</td>
                                           
                                            <td>{{ $skill->experience_years }}</td>
                                            <td>{{ $skill->categories }}</td>
                                            <td> <a href="{{ route('skills.edit', $skill->id) }}"
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
