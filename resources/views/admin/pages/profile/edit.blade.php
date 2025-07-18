@extends('admin.partials.master')

@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Your Profile</h4>

                        {{-- Flash message (optional, success msg) --}}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        @if (isset($profile) && $profile != null)
                        <form class="forms-sample" method="POST" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ old('name', $profile->name) }}" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" value="{{ old('email', $profile->email) }}" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                <select class="form-select" id="exampleSelectGender" name="gender" required>
                                    <option disabled>Select Gender</option>
                                    <option value="Male" {{ $profile->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $profile->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Current Image</label><br>
                                @if($profile->image)
                                    <img src="{{ asset('storage/' . $profile->image) }}" alt="Profile Image" width="100" class="mb-2">
                                @else
                                    <p>No image uploaded.</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Upload New Image</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="github">GitHub Profile:</label>
                                <input type="url" class="form-control" id="github" value="{{ old('github', $profile->github) }}" name="github" placeholder="https://github.com/your-profile" required>
                            </div>

                            <div class="form-group">
                                <label for="linkedin">LinkedIn Profile:</label>
                                <input type="url" class="form-control" id="linkedin" value="{{ old('linkedin', $profile->linkedin) }}" name="linkedin" placeholder="https://www.linkedin.com/in/your-profile" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputCity1">Location</label>
                                <input type="text" class="form-control" id="exampleInputCity1" value="{{ old('location', $profile->location) }}" name="location" placeholder="Location" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4" required>{{ old('description', $profile->description) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </form>
                        @else
                            <h2>No records found. Please add a profile first.</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
