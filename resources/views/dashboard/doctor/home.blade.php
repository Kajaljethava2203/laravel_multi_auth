<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 45px">
                <h3>Doctor Dashboard</h3>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>{{ \Illuminate\Support\Facades\Auth::guard('doctor')->user()->name }}</td>
                        <td>{{ \Illuminate\Support\Facades\Auth::guard('doctor')->user()->email }}</td>
                        <td>
                            <a href="{{ route('doctor.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('doctor.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
