@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Your Degree and Certification Here</h4>
                            <form class="forms-sample"action="{{ route('education.store') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="degree">Degree / Certification</label>
                                    <input type="text" name="degree" id="degree" class="form-control"
                                        placeholder="e.g., B.Tech in Computer Science" required>
                                </div>

                                <!-- Institution / University -->
                                <div class="form-group">
                                    <label for="institution">Institution / University</label>
                                    <input type="text" name="institution" id="institution" class="form-control"
                                        placeholder="e.g., Delhi University" required>
                                </div>

                                <!-- Start Year -->
                                <div class="form-group">
                                    <label for="start_year">Start Year</label>
                                    <input type="number" name="start_year" id="start_year" class="form-control"
                                        min="1950" max="2100" placeholder="e.g., 2020" required>
                                </div>

                                <!-- End Year -->
                                <div class="form-group">
                                    <label for="end_year">End Year</label>
                                    <input type="number" name="end_year" id="end_year" class="form-control" min="1950"
                                        max="2100" placeholder="e.g., 2024" required>
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
