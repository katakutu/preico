<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bitxx Login Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/img/icon.png') }}" type="image/x-icon" />

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ url('/back/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('/back/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ url('/back/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="{{ url('icons/padlock.png') }}" alt="login-icon" style="max-width:64px" />
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form id='msg_validate' action='#' novalidate='novalidate' class='no-mb no-mt' method='post' />
                            @csrf
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="username" placeholder="username"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="controls">
                                            <input type="password" class="form-control" name="password" placeholder="password" required  />
                                        </div>
                                    </div>

                                    <div class="pull-left">
                                        <button class="btn btn-primary mt-10 btn-corner right-15">Sign In</button>
                                        <a href="{{ url('/account/register') }}" class="btn mt-10 btn-corner signup">Sign up</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="{{ url('/account/register') }}" title="Sign Up">Sign Up</a>
                </p> --}}

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{ url('back/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ url('back/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('back/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('back/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('back/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('back/plugins/viewport/viewportchecker.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="{{ url('back/js/jquery-1.11.2.min.js') }}"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{ url('back/js/scripts.js') }}"></script>
    <!-- END CORE TEMPLATE JS - END -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(Session::has('error'))
      <script>
        swal({
        title: "Error!",
        text: "{{ Session::get('error') }}",
        icon: "error",
      });
      </script>
    @endif

    @if(Session::has('success'))
      <script>
        swal({
        title: "success!",
        text: "{{ Session::get('success') }}",
        icon: "success",
      });
      </script>
    @endif
</body>

</html>