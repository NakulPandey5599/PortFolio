@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Profile</h4>
                            <p class="card-description"></p>
                            <form class="forms-sample" method="POST" action="/profile/store" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  name="name" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                        placeholder="Email"  name="email" />
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-select" id="exampleSelectGender"  name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" class="file-upload-default"  name="image"/>
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
                                    <label for="linkedin">Github Profile:</label>
                                    <input type="url" class='form-control' id="github" name="github"
                                        placeholder="https://github.com/in/your-profile" required>
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">LinkedIn Profile:</label>
                                    <input type="url" class='form-control' id="linkedin" name="linkedin"
                                        placeholder="https://www.linkedin.com/in/your-profile" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">location</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="Location"  name="location" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"  name="description"></textarea>
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
