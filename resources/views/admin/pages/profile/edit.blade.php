@extends('admin.partials.master')

@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Your Profile</h4>

                        {{-- Flash message (optional, success msg) --}}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="forms-sample" method="POST" action="{{ route('profile.update',$profile->id) }}" enctype="multipart/form-data">
                            @csrf
                                  @method("PUT")
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name"   value="{{$profile->name}}"  placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" value="{{$profile->eamil}}" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                <select class="form-select" id="exampleSelectGender" value="{{$profile->gender}}" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file"value="{{$profile->image}}"  name="image" class="file-upload-default" required>
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="github">Github Profile:</label>
                                <input type="url" class='form-control' id="github" value="{{$profile->github}}"  name="github" placeholder="https://github.com/your-profile" required>
                            </div>

                            <div class="form-group">
                                <label for="linkedin">LinkedIn Profile:</label>
                                <input type="url" class='form-control' id="linkedin"value="{{$profile->linkedin}}"  name="linkedin" placeholder="https://www.linkedin.com/in/your-profile" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputCity1">Location</label>
                                <input type="text" class="form-control" id="exampleInputCity1" value="{{$profile->location}}" name="location" placeholder="Location" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" value="{{$profile->description}}"  name="description" rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
