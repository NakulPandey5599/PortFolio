@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Skills Here</h4>
                            <form action="{{ route('skills.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="hidden" name="skills_id" value="{{ $skill->id }}">
                                    <label for="exampleInputUsername1">Skill Name</label>
                                    <input type="text" class="form-control"
                                        value="{{ $skill->skill_name }}"name="skill_name" id="exampleInputUsername1"
                                        placeholder="e.g., Laravel" />
                                </div>

                                <div class="form-group">
                                    <label for="level">Categories</label>
                                    <select name="categories" id="categories" class="form-control">
                                        <option value="">Select Categories</option>
                                        <option value="0" {{ $skill->categories == '0' ? 'selected' : '' }}>Frontend
                                        </option>
                                        <option value="1" {{ $skill->categories == '1' ? 'selected' : '' }}>Backend
                                        </option>
                                        <option value="2" {{ $skill->categories == '2' ? 'selected' : '' }}>Tools
                                        </option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="level">Skill Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="">Select Level</option>
                                        <option value="Beginner" {{ $skill->level == 'Beginner' ? 'selected' : '' }}>
                                            Beginner</option>
                                        <option value="Intermediate"
                                            {{ $skill->level == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                        <option value="Advanced" {{ $skill->level == 'Advanced' ? 'selected' : '' }}>
                                            Advanced</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="experience_years">Years of Experience</label>
                                    <input type="number" value="{{ $skill->experience_years }}" name="experience_years"
                                        id="experience_years" class="form-control" min="0" max="50"
                                        placeholder="e.g., 2">

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
