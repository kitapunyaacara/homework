@include('front.include.head')

<body>

@include('front.include.menu')

<div class="container">
	<div class="row">
		<div class="col-lg-12 content-events">
			<div class="col-events">
				<div class="col-lg-12 text-center">
					<img src="{{ asset('img/img-events-detail.jpg') }}">
				</div>
        <div class="col-lg-12 text-event text-left">
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
	</div>
</div>

@include('front.include.ourwork')

@include('front.include.footer')

</body>
</html>
