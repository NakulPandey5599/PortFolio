@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Your Project</h4>
                            <p class="card-description"></p>
                            <form class="forms-sample" class="forms-sample" method="POST"
                                action="{{ route('project.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="hidden" name="project_id" value="{{ $project->id }}" />
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name='title'
                                        value=" {{ $project->title }}" placeholder="Title" />
                                </div>
                                <div class="form-group">
                                    <label for="technologies-used">Technologies-Used (Comma Separated)</label>
                                    <input type="text" class="form-control" id="technologies-used"
                                        name='technologies_used' value=" {{ $project->technologies_used }}"
                                        placeholder="e.g: laravel,React,etc" />
                                </div>
                                <div class="form-group">
                                    <label for="project-overview">Project Overview</label>
                                    <input type="text" class="form-control" id="project-overview" name='project_overview'
                                        value=" {{ $project->project_overview }}"
                                        placeholder="Provide a brief summary of the project and its purpose" />
                                </div>
                                <div class="form-group">
                                    <label for="challenges">Challenges</label>
                                    <input type="text" class="form-control" id="challenges" name='challenges'
                                        value=" {{ $project->challenges }}"
                                        placeholder="Mention a key challenge you faced during the project" />
                                </div>
                                <div class="form-group">
                                    <label for="solution">Solution</label>
                                    <input type="text" class="form-control" id="solution" name='solution'
                                        value=" {{ $project->solution }}"
                                        placeholder="Explain the solution you implemented to address the challenge" />
                                </div>
                                <ul class="list-unstyled" id="featuresList">
                                    @if (is_array($project->key_features))
                                        @foreach ($project->key_features as $feature)
                                            <li><input type="text" class="form-control mb-2" name="key_features[]"
                                                    value="{{ $feature }}"
                                                    placeholder="e.g., Integrated payment gateway"></li>
                                        @endforeach
                                    @else
                                        <li><input type="text" class="form-control mb-2" name="key_features[]"
                                                value="{{ $project->key_features }}"
                                                placeholder="e.g., Integrated payment gateway"></li>
                                    @endif
                                </ul>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" name='description' rows="4">{{ old('description', $project->description) }}</textarea>

                                </div>
                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <label>Current Image</label><br>
                                    @if ($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="Profile Image"
                                            width="100" class="mb-2">
                                    @else
                                        <p>No image uploaded.</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Project Images</label>
                                    <ul class="list-unstyled" id="imageList">
                                        <li>
                                            <input type="file" name="images[]" class="form-control mb-2"
                                                accept="image/*" />
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-inverse-primary btn-fw"
                                        onclick="addImageInput()">Add Photo</button>
                                </div>
                                <div class="form-group">
                                    <label for="linkedin">Github Link:</label>
                                    <input type="url" class='form-control' id="linkedin"
                                        value="{{ old('github', $project->github) }}" name="github"
                                        placeholder="https://github.com/in/your-project" required>
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">Live Link:</label>
                                    <input type="url" class='form-control' id="linkedin"
                                        value="{{ old('live_link', $project->live_link) }}" name="live_link"
                                        placeholder="https://your-live-link.com" required>

                                </div>
                                <div class="form-group">

                                </div>

                                <button type="submit" class="btn btn-primary me-2">
                                    Submit
                                </button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
