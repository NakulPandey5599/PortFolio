@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Projects</h4>
                            <p class="card-description"> Add class <code>.table</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Github</th>
                                            <th>Live Link</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            
                                        <tr>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->description }}</td>
                                            <td> <img src="{{ asset('storage/' . $project->image) }}" alt="photo"
                                                    style="width: 150px; height: 100px; object-fit: cover; border-radius: 0;">
                                            </td>
                                            <td>{{ $project->github }}</td>
                                            <td>{{ $project->live_link }}</td>
                                            <td> <a href="{{ route('project.edit', $project->id) }}"
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
