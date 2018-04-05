 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});

$( function() {
		$( "#start_date" ).datepicker();
	} );
	$( function() {
		$( "#end_date" ).datepicker();
	} );

