@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Certification Here</h4>
                            <form class="forms-sample"action="{{ route('certification.store') }}" method="POST">
                                @csrf   
                                <div class="form-group">
                                    <label for="degree">Certification</label>
                                    <input type="text" name="certification" id="certification" class="form-control"
                                        placeholder="e.g., Web development" required>
                                </div>

                                <!-- Institution / University -->
                                <div class="form-group">
                                    <label for="institution">Institution / University</label>
                                    <input type="text" name="institution" id="institution" class="form-control"
                                        placeholder="e.g., Delhi University" required>
                                </div>

                                <!-- Start Year -->
                                <div class="form-group">
                                    <label for="start_year"> Year</label>
                                    <input type="number" name="year" id="year" class="form-control"
                                        min="1950" max="2100" placeholder="e.g., 2020" required>
                                </div>

                               

                                <!-- Grade / CGPA -->
                                <div class="form-group">
                                    <label for="grade">Grade / CGPA</label>
                                    <input type="text" name="grade" id="grade" class="form-control"
                                        placeholder="e.g., 8.5 CGPA or 75%">
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Additional Notes (optional)</label>
                                    <textarea name="description" id="description" class="form-control" rows="3"
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
