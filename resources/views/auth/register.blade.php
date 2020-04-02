<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="{{ asset('res/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('res/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('res/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('res/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('res/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" method="POST" action="{{route('register')}}">
                @csrf
                <div class="form-group @error('name') has-error @enderror">
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Name" required="">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                    <input name="email" type="email" class="form-control " value="{{ old('email') }}" placeholder="Email" required="">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group @error('password') has-error @enderror">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group">
                    <input name="password-confirm" type="password" class="form-control" placeholder="Reconfirm Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{route('login')}}">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('res/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('res/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('res/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
