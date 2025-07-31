@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">See Your Certification Here</h4>
                            <p class="card-description"> 
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Certifications</th>
                                            <th>Institution</th>
                                            <th>Year</th>
                                            <th>Description</th>
                                            
                                    </thead>
                                    <tbody>
                                        {{-- @dd($skills) --}}
                                        @foreach ($certifications as $certification)
                                            
                                        <tr>
                                            {{-- @dd($skill->id) --}}
                                            <td>{{ $certification->certification }}</td>
                                            <td>{{ $certification->institution }}</td>
                                            <td>{{ $certification->year }}</td>
                                            <td>{{ $certification->description}}</td> 
                                            <td> <a href="{{ route('certification.edit', $certification->id) }}"
                                                    class="btn btn-inverse-warning btn-fw">Edit</a>
                                            </td>
                                            <td><form method="POST"
                                                        action={{ route('certification.destroy', $certification->id) }}>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-inverse-danger btn-fw">Delete</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
