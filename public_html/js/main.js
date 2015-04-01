$(document).ready(function onLoad() {


	var circle = new ProgressBar.Line
		('#progress', {
		    color: '#8E236B',
		    duration: 1100,
		    easing: 'easeInOut'
			
		});
                

$(document).delay(500).ready(circle.animate(1));
});

window.onload = function(){
    	$('.loading-mask').delay(1100).fadeOut(1000);
	$('.progressbar').delay(1000).fadeOut(400);
};


