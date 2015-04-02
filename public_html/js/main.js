window.onload = function onLoad() {


	var circle = new ProgressBar.Line
		('#progress', {
		    color: '#8E236B',
		    duration: 1100,
		    easing: 'easeInOut'
			
		});

circle.animate(1);

$(document).ready(function(){
    	$('.loading-mask').delay(1100).fadeOut(1000);
	$('.progressbar').delay(1000).fadeOut(400);
});

};
