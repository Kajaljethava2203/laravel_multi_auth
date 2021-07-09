<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                <h3>User Login</h3>
                <form method="post" action="{{ route('user.check') }}">
                    @if(\Illuminate\Support\Facades\Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ \Illuminate\Support\Facades\Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Login</button>
                </div>

                <a href="{{ route('user.register') }}">Create Account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
