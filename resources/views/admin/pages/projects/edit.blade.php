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
                                    <input type="hidden" name="project_id" value="{{$project->id}}"/>
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name='title'
                                        value=" {{$project->title}}" placeholder="Name" />
                                </div>
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
                                    <label>File upload</label>
                                    <input type="file" name="image" class="file-upload-default" />

                                    
                                    <div class="input-group col-xs-12 d-flex align-items-center">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" />
                                        <span class="input-group-append ms-2">
                                            <button class="file-upload-browse btn btn-primary" type="button">
                                                Upload
                                            </button>
                                        </span>
                                    </div>
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
