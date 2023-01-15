@extends('members.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Add Member</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-control">
                            <label for="">User_ID</label>
                            <input type="text" name="user_id" id="" class="form-control mb-2">
                            @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Mobile</label>
                            <input type="text" name="mobile" id="" class="form-control mb-2">
                            @error('mobile')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control mb-2">
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Country</label>
                            <input type="text" name="country" id="" class="form-control mb-2">
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Company</label>
                            <input type="text" name="company" id="" class="form-control mb-2">
                            @error('company')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Profession</label>
                            <input type="text" name="profession" id="" class="form-control mb-2">
                            @error('profession')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="">Designation</label>
                            <input type="text" name="designation" id="" class="form-control mb-2">
                            @error('designation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Create New User">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
