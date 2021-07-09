<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 45px">
                <h3>Admin Registration</h3><br>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="enter name" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="enter phone number">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="enter email address">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="enter password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="text" name="cpassword" class="form-control" placeholder="enter confirm password">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
