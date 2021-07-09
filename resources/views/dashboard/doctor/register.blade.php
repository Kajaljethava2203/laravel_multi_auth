<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Doctor Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 45px">
                <h3>Doctor Register</h3><br>
                <form method="post" action="{{ route('doctor.create') }}">
                    @if(\Illuminate\Support\Facades\Session::get('success'))
                        <div class="btn btn-success">
                            {{ \Illuminate\Support\Facades\Session::get('success') }}
                        </div>
                    @endif

                    @if(\Illuminate\Support\Facades\Session::get('fail'))
                        <div class="btn btn-danger">
                            {{ \Illuminate\Support\Facades\Session::get('fail') }}
                        </div>
                        @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="hospital">Hospital</label>
                        <input type="text" name="hospital" class="form-control" placeholder="Enter Hospital" value="{{ old('hospital') }}">
                        <span class="text-danger">@error('hospital'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>

                    <a href="{{ route('doctor.login') }}">I already have an account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
