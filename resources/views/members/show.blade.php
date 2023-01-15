@extends('members.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User_id</th>
                                <th>Mobile</th>
                                <th>Addresss</th>
                                <th>Country</th>
                                <th>Company</th>
                                <th>Profession</th>
                                <th>Designation</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->user_id }}</td>
                                <td>{{ $member->mobile }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->country }}</td>
                                <td>{{ $member->company }}</td>
                                <td>{{ $member->profession }}</td>
                                <td>{{ $member->designation }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
@endsection
