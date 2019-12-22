@extends('layouts/app')

@section('content')
    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" />
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me" data-role="checkbox" data-caption="Remember me">
            </div>
            <div class="form-group">
                <button type="submit" class="button primary">Login</button>
                <button type="button" class="button">Cancel</button>
            </div>
        </form>
    </div>
@endsection
