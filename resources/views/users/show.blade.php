@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>User Details</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Name:</h5>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Email:</h5>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6">
                    <h5>Role:</h5>
                    <p>{{ $user->role }}</p>
                </div>
            </div> --}}
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
