@extends('layouts.app')

@section('content')
    <div class="container w-50 mx-auto bg-dark shadow rounded p-5 mt-5">
        @guest
            <h1 class="text-center text-light p-2">Welcome, Traveler!</h1>
        @endguest

        @auth
            <h1 class="text-center text-light p-2">Welcome, {{ auth()->user()->username }}!</h1>
        @endauth
    </div>
@endsection