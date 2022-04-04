@extends('layouts.app')

@section('content')
    <div class="container w-50 mx-auto shadow rounded p-5 mt-5">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="password">Password Again</label>
                <input type="password" class="form-control" id="password" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-dark w-100">Submit</button>
        </form>
    </div>
@endsection