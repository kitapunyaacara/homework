 @include('front.include.head')

<body>

@include('front.include.menu')

<div class="container">
	<div class="row">
		@for ($a=0;$a<10;$a++)
		<div class="col-lg-4 content-events">
			<div class="col-events">
				<img class="img-responsive" src="{{ asset('img/img-events.jpg') }}">
        <div class="text-center">
  				<p>July 02, 2016</p>
  				<p>Lorem ipsum dolor sit amet</p>
  				<span>lorem ipsum </span>
        </div>
        <hr/>
        <div class="">
          <div class="col-sm-8">
            <span>Community</span>
          </div>
          <div class="col-sm-2">
            <i class="fa"></i>
          </div>
          <div class="col-sm-2">
            <i class="fa"></i>
          </div>
          <div class="clearfix"></div>
        </div>
			</div>
		</div>
		@endfor

	</div>
</div>

@include('front.include.ourwork')

@include('front.include.footer')

</body>
</html>
