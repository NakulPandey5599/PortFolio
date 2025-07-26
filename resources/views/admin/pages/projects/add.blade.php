@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Project</h4>
                            <p class="card-description"></p>
                            <form class="forms-sample" method="POST" action="{{ route('project.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name='title'
                                        placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <label for="technologies-used">Technologies-Used (Comma Separated)</label>
                                    <input type="text" class="form-control" id="technologies-used"
                                        name='technologies-used' placeholder="e.g: laravel,React,etc" />
                                </div>
                                <div class="form-group">
                                    <label for="project-overview">Project Overview</label>
                                    <input type="text" class="form-control" id="project-overview" name='project-overview'
                                        placeholder="Provide a brief summary of the project and its purpose" />
                                </div>
                                <div class="form-group">
                                    <label for="challenges">Challenges</label>
                                    <input type="text" class="form-control" id="challenges" name='challenges'
                                        placeholder="Mention a key challenge you faced during the project" />
                                </div>
                                <div class="form-group">
                                    <label for="solution">Solution</label>
                                    <input type="text" class="form-control" id="solution" name='solution'
                                        placeholder="Explain the solution you implemented to address the challenge" />
                                </div>
                                <div class="form-group">
                                    <label for="solution">key Feature</label>
                                    <ul class="list-unstyled" class="form-control" id="featuresList">
                                        <li><input type="text" class="form-control" name="key_features[]"
                                                placeholder="e.g., Integrated payment gateway"></li>
                                    </ul>
                                    <button type="button" class="btn btn-inverse-primary btn-fw" onclick="addFeature()">
                                        Add Feature</button>




                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" name='description' rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                     <label for="images">Select multiple images:</label><br><br>
  <input type="file" id="images" name="img[]"  class="file-upload-default" accept="image/*" multiple>
  <br><br>
  <button type="submit">Upload</button> 
                                </div>
                                <div class="form-group">

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
                                    <label for="images">Upload images</label>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>

                                <div class="form-group">
                                    <label for="github">Github Link:</label>
                                    <input type="url" class='form-control' id="github" name="github"
                                        placeholder="https://github.com/in/your-project" required>
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">Live Link:</label>
                                    <input type="url" class='form-control' id="live_link" name="live_link"
                                        placeholder="https://www/your-profile" required>
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
