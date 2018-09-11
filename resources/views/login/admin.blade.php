<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bitxx Admin Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/img/icon.png') }}" type="image/x-icon" />

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ url('/back/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('/back/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/assets/plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/assets/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ url('/back/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="../data/icons/padlock.png" alt="login-icon" style="max-width:64px" />
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form id='msg_validate' action='#' novalidate='novalidate' class='no-mb no-mt' method='post' /><input type='hidden' name='form-name' value='msg_validate' />
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="formfield2" placeholder="email" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="formfield1" placeholder="password" />
                                        </div>
                                    </div>

                                    <div class="pull-left">
                                        <a href="index-dashboard.html" class="btn btn-primary mt-10 btn-corner right-15">Log in</a>
                                        <a href="ui-register.html" class="btn mt-10 btn-corner signup">Sign up</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a>
                </p>

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="../assets/js/jquery-1.11.2.min.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="../assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>