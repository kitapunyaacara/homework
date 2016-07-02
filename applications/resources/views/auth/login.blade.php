<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

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
      @if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
			@endif	
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('auth/login')}}">{!! csrf_field()!!}
                        <fieldset>
                            <div class="form-group{{ $errors->has('log') ? ' has-error' : '' }}">
                                <input class="form-control" placeholder="E-mail" name="log" type="email" id="log">
                                @if($errors->has('log'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('log')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                @if($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Login
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->



    <script src="{{ url('back/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ url('back/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('back/js/chart.min.js') }}"></script>
    <script src="{{ url('back/js/chart-data.js') }}"></script>
    <script src="{{ url('back/js/easypiechart.js') }}"></script>
    <script src="{{ url('back/js/easypiechart-data.js') }}"></script>
    <script src="{{ url('back/js/bootstrap-datepicker.js') }}"></script>
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
