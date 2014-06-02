jQuery(document).ready(function($) {
	var count = 0;
	$('.tab-content:first').show();
	$('.tab-content').each(function(){
		var ID = $(this).attr('id');
		var text = $(this).attr('title');
		if(!count) {
			$('.tabs').append('<li id="tab-'+ID+'" class="current">'+text+'</li>');
		} else {
			$('.tabs').append('<li id="tab-'+ID+'">'+text+'</li>');	
		}
		count++;
	});
	// tabs clicking
	$('.tabs li').click(function(){
		var ID = $(this).attr('id').slice(4);
		$('.tabs li').removeClass('current');
		$(this).addClass('current');
		$('.tab-content').fadeOut(100).delay(50);
		$('#'+ID).fadeIn(100);
		console.log(ID);
	});
});