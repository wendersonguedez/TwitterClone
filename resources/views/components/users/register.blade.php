@extends('layout.app')

@section('title', 'Register Page')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <form class="form mt-5" action="{{ route('register.store') }}" method="post">
                @csrf
                <h3 class="text-center text-dark">Register</h3>
                <div class="row mb-3 mt-3">
                    <div class="col">
                        <label for="name" class="text-dark">Name:</label><br>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="user_name" class="text-dark">UserName:</label><br>
                        <input type="text" name="user_name" id="user_name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="text-dark">Email:</label><br>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="text-dark">Password:</label><br>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="confirm-password" class="text-dark">Confirm Password:</label><br>
                    <input type="text" name="confirm-password" id="confirm-password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="remember-me" class="text-dark"></label><br>
                    <button type="submit" class="btn btn-dark btn-md">Register</button>
                </div>
                <div class="text-right mt-2">
                    <a href="/login" class="text-dark">Login here</a>
                </div>
            </form>
        </div>
    </div>
@endsection
