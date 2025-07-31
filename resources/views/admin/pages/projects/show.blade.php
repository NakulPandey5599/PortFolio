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
                                            <th>technologies_used</th>
                                            <th>project_overview</th>
                                            <th>Challenges</th>
                                            <th>solutions</th>
                                            <th>key_features</th>
                                            <th>Year</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Github</th>
                                            <th>Live Link</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->title }}</td>
                                                <td>
                                                    @if (is_array($project->technologies_used))
                                                        @foreach ($project->technologies_used as $tech)
                                                            <li>{{ $tech }}</li>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $project->project_overview }}</td>
                                                <td>{{ $project->Challenges }}</td>
                                                <td>{{ $project->solution }}</td>
                                                <td>
                                                    @if (is_array($project->key_features))
                                                        @foreach ($project->key_features as $feature)
                                                            <li>{{ $feature }}</li>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $project->date }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td style="display: flex; flex-wrap: wrap;">

                                                    @if ($project->images != null)
                                                        @foreach ($project->images as $image)
                                                            <img src="{{ asset('storage/' . $image) }}" alt="photo"
                                                                style="width: 80px; height: 60px; object-fit: cover; margin: 4px; border-radius: 4px;">
                                                        @endforeach
                                                    @endif
                                                </td>

                                                <td>{{ $project->github }}</td>
                                                <td>{{ $project->live_link }}</td>
                                                <td> <a href="{{ route('project.edit', $project->id) }}"
                                                        class="btn btn-inverse-warning btn-fw">Edit</a>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                        action={{ route('project.destroy', $project->id) }}>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-inverse-danger btn-fw">Delete</button>
                                                    </form>
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
