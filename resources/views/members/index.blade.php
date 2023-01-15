@extends('members.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>APPLICATION</h1>
                    <a href="{{ route('create') }}"><button type="submit" class="btn btn-primary">Add New</button></a>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $data)
                            <tr>
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['user_id'] }}</td>
                                <td>{{ $data['mobile'] }}</td>
                                <td>{{ $data['address'] }}</td>
                                <td>{{ $data['country'] }}</td>
                                <td>{{ $data['company'] }}</td>
                                <td>{{ $data['profession'] }}</td>
                                <td>{{ $data['designation'] }}</td>
                                <td>
                                    <a href="{{ route('show',$data['id']) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('edit',$data['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('update',$data['id']) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
