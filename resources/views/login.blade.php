<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mainindex/css/styles.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-dark font-weight-light mb-5"><i class="fa fa-lock"></i> Sign In</h2>
                    <form method="POST" action="{{ url('/login') }}">
                         {{ csrf_field() }}    
                        <div class=" form-group ">
                            <label class="text-secondary ">Email</label>
                            <input class="form-control" name="email" type="email" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group ">
                            <label class="text-secondary ">Password</label>
                            <input class="form-control" name="password" type="password"required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-dark mt-2 " type="submit ">Log In</button>
                    </form>
                    <p class="mt-3 mb-0 "><a class="text-dark small " href="{{ url('/register') }}">Don't&nbsp; have any account ? Register Now</a></p>
                    <p class="mt-3 mb-0 "><a class="text-dark small " href="{{ url('/') }}">Visit Main Website</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;mainindex/img/loginregister.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2">
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js "></script>
</body>
