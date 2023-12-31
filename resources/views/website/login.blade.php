@extends('website.layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Login | SkillSwap')</title>
    @section('styles')
        <link rel="stylesheet" href="css/auth.css">
    @endsection
    
</head>
<body>

    <!-- Navbar -->
    @section('links')
        <a href="/">Home</a>
        <a href="/signup">Sign Up</a>
        <a href="/login">Log In</a>
    @endsection


@section('button')
    <button class="cta-button" onclick="window.location.href='/create'">Create a Room</button>
@endsection

    
    @section('content')
    <div class="login-container">
        <h1 class="section-title">Log In</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="cta-button btn">Log In</button>
        </form>
        <h4>Don't have an account? <a href="/signup" class="link">Sign Up</a></h4>
    </div>

    <hr>
    @endsection

    
</body>
</html>