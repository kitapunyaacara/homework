 @include('front.include.head')

<body>
  <script>
    window.setTimeout(function() {
      $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
    }, 5000);
  </script>
  <div class="col-md-12">
    @if(Session::has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
        <p>{{ Session::get('message') }}</p>
      </div>
    @endif
  </div>
   @include('front.include.menu')

<div class="slide">
	<div class="container">
        <div class="slider">
			<img src="img/slide-one.jpg" />
			<img src="img/slide-two.jpg" />
        </div>
  	</div>
	<div class="clearfix"></div>
</div>

@include('front.include.ourwork')

@include('front.include.footer')

</body>
</html>
