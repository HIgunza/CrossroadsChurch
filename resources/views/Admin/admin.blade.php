<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CrossRoads Fellowship</title>
    {!!HTML::style('css/bootstrap.css')!!}
</head>
<body>
    <div class="container">
    <header id="header">
        <div class="jumbotron">
            <h1>CrossRoads Fellowship Ministry</h1>
        </div>
    </header>
        <div class="row">
            @yield('main')
        
	<h2>Login to your account</h2>
                            <form method="POST" action="{{url('auth/login')}}">
                                {!! csrf_field() !!}
                                <input type="email" name="email" id="email" placeholder="Email Address" />
                                <input type="password" name="password" id="password" placeholder="Password" />
                                <span>
                                    <input name="remember" id="remember" type="checkbox" class="checkbox"> 
                                    Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form method="POST" action="{{url('register')}}">
                                {!! csrf_field() !!}
                                <input type="text" name="name" id="name"  placeholder="Name">
                                <input type="email" name="email" placeholder="Email Address"/>
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
</body>
</html>