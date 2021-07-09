<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Doctor Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 45px">
                <h3>Doctor Login</h3><br>
                <form method="post" action="{{ route('doctor.check') }}">
                    @if(\Illuminate\Support\Facades\Session::get('fail'))
                        <div class="btn btn-success">
                            {{ \Illuminate\Support\Facades\Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                    <a href="{{ route('doctor.register') }}">Create Account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
