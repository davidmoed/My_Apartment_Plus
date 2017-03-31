<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Apartment+</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/flat-ui.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">
    
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

	
  <body>

	<div class="demo-headline">
			<h1>My Apartment+</h1>
		</div>
	
		<section class="col-md-12 form-sections container">
		
		
			<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 demo-section-title">
				<h2>New Apartment: Overview</h2> 
			
				<form>
				
					<table>
						<tr>
							<td class="basic-info-input">
								<h4>State:</h4><input type="text" name="state" class="form-control"></input>
							</td>
							<td class="basic-info-input">
								<h4>City:</h4><input type="text" name="city" class="form-control"></input>
							</td>
							<td class="basic-info-input">
								<h4>Neighborhood:</h4><input type="text" name="neightborhood" class="form-control"></input>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<td>
								<h4>Rent</h4>
									  <label>
										<input type="hidden" name="rent-low" id="amount" readonly style="border:0; font-weight:bold;">
										<input type="hidden" name="rent-high" id="amount1" readonly style="border:0; font-weight:bold;">
										<div id="rent-slider-size">
											<div id="slider3">
											  <span class="ui-slider-value first"></span>
											  <span class="ui-slider-value last"></span>
											</div>	
										</div>
									</label>
							</td>
						</tr>
					</table>
					<table>
						<tr>	
							<td class="basic-info-input">
								<h4>Bedrooms:</h4><input type="text" name="bedrooms" class="form-control"></input>
							</td>
							<td class="basic-info-input">
								<h4>Bathrooms:</h4><input type="text" name="bathrooms" class="form-control"></input>
							</td>
							<!-- send type as apartment -->
							<input type="hidden" name="home-type" value="apartment"></input>
							
						</tr>
					</table>
				</form> 	
			</div>
		</section>
	
		<section class="col-md-12 demo-section-title container amenities">
			<div class="row">
				<h1>Amenities</h1>
		
				<div class="col-md-10 col-md-offset-1">
			
					<form action="/agregate_page.php" method="post">
						<h3 class="demo-panel-title">Current</h3>
						  <table>  
						<tr>
							<td>
								<label>
									<div class="pbm bootstrap-switch-square">
									Pets
									<input type="checkbox" name="pets" data-toggle="switch" id="custom-switch-03" data-off-text="<span class='fui-cross'></span>"data-on-text="<span class='fui-check'></span>"  />
									</div>
								</label>
							</td>
							<td>
								<label>
									<div class="pbm bootstrap-switch-square">
									Laundry
									<input type="checkbox" name="laundry" data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
									</div>
								</label>
							</td>
							<td>
								<label>
									<div class="pbm bootstrap-switch-square">
									Furnished
									<input type="checkbox" name="furnished" data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
									</div>
								</label>
							</td>
							<td>
								<label>
									<div class="pbm bootstrap-switch-square">
									Gym
									<input type="checkbox" name="gym" data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
									</div>
								</label>
							</td>
							<td>
								<label>
									<div class="pbm bootstrap-switch-square">
									Elevator
									<input type="checkbox" name="elevator" data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
									</div>
								</label>
							</td>
						</tr>
						
						<tr>
							<td>
							  <label>
								  <div class="pbm bootstrap-switch-square">
									  AC
									  <input type="checkbox" name="ac"  data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
								  </div>
							  </label>
							</td>
						  
						  	<td>
							  <label>
								  <div class="pbm bootstrap-switch-square">
									  Doorman
									  <input type="checkbox" name="doorman"  data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
								  </div>
							  </label>
							</td>
							<td>
							  <label>
								  <div class="pbm bootstrap-switch-square">
									  Smoke Free
									  <input type="checkbox" name="smoke-free"  data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
								  </div>
							  </label>
							</td>
							<td>
							  <label>
								  <div class="pbm bootstrap-switch-square">
									  Parking
									  <input type="checkbox" name="parking"  data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
								  </div>
							  </label>
							</td>
							<td>
							  <label>
								  <div class="pbm bootstrap-switch-square">
									  Outdoor Space
									  <input type="checkbox" name="outdoor"  data-toggle="switch" id="custom-switch-03" data-on-text="<span class='fui-check'></span>" data-off-text="<span class='fui-cross'></span>" />
								  </div>
							  </label>
							</td>
						</tr>
		
						</table>
		
					</form>
		
				</div>

			</div>
		</section>
		
		
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/video.js"></script>
		<script src="js/vendor/html5shiv.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/flat-ui.min.js"></script>
		<script src="js/flat-ui.js"></script>
		<script src="js/application.js"></script>
		<script src="js/slider.js"></script>

		<script>
		  videojs.options.flash.swf = "js/vendors/video-js.swf"
		</script>

    </body>
</html>