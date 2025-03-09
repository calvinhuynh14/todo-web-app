@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="card" style="width: 50%; margin: 0 auto;">
        <div class="card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body" style="padding: 20px;">
            <form action="/login_attempt" method="post" class="form-group">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="john@doe.com">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection


