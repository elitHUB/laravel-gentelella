<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {!! BootForm::open(['url' => url('/login'), 'method' => 'post']) !!}

                <h1>Login Form</h1>
                {!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email'] ) !!}
                {!! BootForm::password('password', 'Password', ['placeholder' => 'Password']) !!}
                <div class="checkbox">
                    <label>
                        <input type="checkbox"
                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
                {!! BootForm::submit('Log in', ['class' => 'btn btn-primary submit text-center','style'=>'margin: 0 40% 2%;']) !!}
                <div class="clearfix"></div>
                <a class="reset_pass" href="{{  url('/password/reset') }}">Lost your password ?</a>
                <div class="separator">

                    <p class="change_link">New to site?
                        <a href="{{ url('/register') }}" class="to_register"> Create Account </a>
                    </p>

                    <div class="clearfix"></div>
                    <br/>

                    <div>
                        <h1><i class="fa fa-paw"></i>&nbsp;{{config('app.name')}}</h1>
                        <p>©@php echo date("Y"); @endphp All Rights Reserved. {{config('app.name')}}. Privacy and
                            Terms</p>
                    </div>
                </div>
                {!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>