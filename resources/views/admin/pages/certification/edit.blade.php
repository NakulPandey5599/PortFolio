@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Certification Here</h4>
                            <form class="forms-sample"action="{{ route('certification.update', $certification->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <input type="hidden" name="certification_id" value="{{$certification->id}}"/>
                                    <label for="degree"> Certification</label>
                                    <input type="text" value="{{$certification->certification}}" name="name" id="name" class="form-control"
                                        placeholder="e.g., Web development" required>
                                </div>

                                <!-- Institution / University -->
                                <div class="form-group">
                                    <label for="institution">Institution / University</label>
                                    <input type="text"  value="{{$certification->institution}}" name="institution" id="institution" class="form-control"
                                        placeholder="e.g., Delhi University" required>
                                </div>

                                <!-- Start Year -->
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input type="number" value="{{$certification->year}}" name="year" id="year" class="form-control"
                                        min="1950" max="2100" placeholder="e.g., 2020" required>
                                </div>

                               

                                <!-- Grade / CGPA -->
                                <div class="form-group">
                                    <label for="grade">Grade / CGPA</label>
                                    <input type="text" value="{{$certification->grade}}" name="grade" id="grade" class="form-control"
                                        placeholder="e.g., 8.5 CGPA or 75%">
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Additional Notes </label>
                                    <textarea name="description" value="{{$certification->description}}" id="description" class="form-control" rows="3"
                                        placeholder="e.g., specialized in AI, participated in hackathons"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
