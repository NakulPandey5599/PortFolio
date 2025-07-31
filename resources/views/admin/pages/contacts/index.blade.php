@extends('admin.partials.master')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your All Contacts Here</h4>
                            <p class="card-description"> 
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Emails</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        
                                            
                                    </thead>
                                    <tbody>
                                    
                                        @foreach ($contacts as $contact)
                                            
                                        <tr>
                                            
                                            <td>{{ $contact->name}}</td>
                                            <td>{{ $contact->email }}</td>
                        
                                            <td>{{ $contact->subject}}</td>
                                            <td>{{ $contact->message}}</td>
                                            
                                           
                                            {{-- <td><form method="POST"
                                                        action={{ route('contacts.destroy', $contact->id) }}>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-inverse-danger btn-fw">Delete</button>
                                                    </form> --}}
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
