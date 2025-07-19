@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Skills Here</h4>
                            <form action="{{ route('skills.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Skill Name</label>
                                    <input type="text" class="form-control" name="skill_name" id="exampleInputUsername1"
                                        placeholder="e.g., Laravel" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="level">Categories</label>
                                    <select name="categories" id="level" class="form-control">
                                        <option value="">Select Categories</option>
                                        <option value="0">Frontend</option>
                                        <option value="1">Backend</option>
                                        <option value="2">Tools</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Skill Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="">Select Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="experience_years">Years of Experience</label>
                                    <input type="number" name="experience_years" id="experience_years" class="form-control"
                                        min="0" max="50" placeholder="e.g., 2">
                                </div>
                                
                                <div class="form-check">

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
