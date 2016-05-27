$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$(document).ready(function(){
		$(".msg-alert").on( "click", function() {
			$('.alert-success-js').hide(); //muestro mediante id

		 });

	});
