@extends('admin.partials.master')
@section('main')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Your Education and Certification Here</h4>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Education and Certification Name</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="eg: Graduation" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Year of Compeltion</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="eg: 2022-2025" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                                            placeholder="Password" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" required />
                                            <a href="#">Remember me</a>
                                            <i class="input-helper"></i></label>
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
