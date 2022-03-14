<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('CssLogin/styleLogin.css') }}">
</head>
<body>
    <div class="login">
        <div class="heading">
            <h2>Sign in</h2>
            <form action="{{ url('selenium/cekLogin') }}" method="POST">
                @csrf
                @if ($errors->has('username'))
                    <div class="error" style="color: red">{{ $errors->first('username') }}</div>
                @endif
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username or email" value="{{ old('username') }}">
                </div>

                @if ($errors->has('password'))
                    <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                @endif
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="float">Login</button>
                </form>
        </div>
    </div>
</body>
</html>
