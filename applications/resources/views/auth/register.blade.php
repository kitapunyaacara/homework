<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>

<link href="{{ url('back/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('back/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('back/css/styles.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('auth/register')}}">{!! csrf_field()!!}
                        <fieldset>
                            <div class="form-group{{ $errors->has('username' ? 'has-error' : '')}}">
                                <input class="form-control" placeholder="Name" name="username" type="text" autofocus="">
                                @if( $errors->has('username'))
                                    <span cslass="help-block">
                                        <strong>{{ $errors->first('username')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                                <input class="form-control" placeholder="E-mail" name="email" type="email">
                                @if($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? 'has-error' : ''}}">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                @if($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                                @if($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation')}}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->



    <script src="back/js/jquery-1.11.1.min.js"></script>
    <script src="back/js/bootstrap.min.js"></script>
    <script src="back/js/chart.min.js"></script>
    <script src="back/js/chart-data.js"></script>
    <script src="back/js/easypiechart.js"></script>
    <script src="back/js/easypiechart-data.js"></script>
    <script src="back/js/bootstrap-datepicker.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
</body>

</html>
