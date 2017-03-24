var $slider3 = $("#slider3")
  , slider3ValueMultiplier = 1000
  , slider3Options;


$(function() {
	if ($slider3.length > 0) {
	  $slider3.slider({
		min: 1,
		max: 15,
		values: [3, 12],
		orientation: "horizontal",
		range: true,
		slide: function(event, ui) {
		  $slider3.find(".ui-slider-value:first")
			.text("$" + ui.values[0] * slider3ValueMultiplier)
			.end()
			.find(".ui-slider-value:last")
			.text("$" + ui.values[1] * slider3ValueMultiplier)
		
		$( "#amount" ).val( Number(ui.values[0] * slider3ValueMultiplier) );
		$( "#amount1" ).val( Number(ui.values[1] * slider3ValueMultiplier) );
		}
	  });
	  
	  if (slider3.values > 0) {
			$( "#amount" ).val( Number(values[0] * slider3ValueMultiplier) );
			$( "#amount1" ).val( Number(values[1] * slider3ValueMultiplier) );
		}

	  slider3Options = $slider3.slider("option");
	  $slider3.addSliderSegments(slider3Options.max)
		.find(".ui-slider-value:first")
		.text("$" + slider3Options.values[0] * slider3ValueMultiplier)
		.end()
		.find(".ui-slider-value:last")
		.text("$" + slider3Options.values[1] * slider3ValueMultiplier);
	}
 
});
