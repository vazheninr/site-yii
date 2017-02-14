$(window).load(function() {

	if ("ontouchstart" in document.documentElement) {
 
		$('#slider').nivoSlider({
		    effect: 'fade',
			animSpeed: 500,
			pauseTime: 7000,
		});

		$('a.nivo-nextNav').css('visibility', 'hidden');
		$('a.nivo-prevNav').css('visibility', 'hidden');
		
			var element = document.getElementById('slider');
			
			var hammertime = Hammer(element).on("swipeleft", function(event) {
				$('#slider img').attr("data-transition","slideInLeft");
				$('a.nivo-nextNav').trigger('click');
				return false; 
							
			});
				
			var hammertime = Hammer(element).on("swiperight", function(event) {
				$('#slider img').attr("data-transition","slideInRight");
                $('a.nivo-prevNav').trigger('click');
                $('#slider img').attr("data-transition","slideInLeft");
                return false;
							  		
			});
 
	}

	else {
  
		$("#slider").nivoSlider({effect:"fade",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:7000});
    
    }

});