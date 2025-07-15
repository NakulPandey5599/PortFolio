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
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="images">Select multiple images:</label><br><br>
  <input type="file" id="images" name="img[]"  class="file-upload-default" accept="image/*" multiple>
  <br><br>
  <button type="submit">Upload</button> --}}
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default" />
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
                                    <input type="url" class='form-control' id="linkedin" name="github"
                                        placeholder="https://github.com/in/your-project" required>
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">Live Link:</label>
                                    <input type="url" class='form-control' id="linkedin" name="live_Link"
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
