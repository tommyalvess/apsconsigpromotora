(function(){
	"use strict";

	$(document).ready(function(){
		smoothScroll.init();

		var contatoForm = document.querySelector("#contatoForm");
		var freteForm = document.querySelector("#freteForm");

		$(contatoForm).submit(function(event){
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: "__email.php",
				data: $( this ).serialize(),
				success: function(e){
					alert(e);
				},
				error: function(e){
					alert(e);
				},
				dataType: "text"
			});
		});

		$(freteForm).submit(function(event){
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: "_calculate.php",
				data: $( this ).serialize(),
				success: function(e){
					console.log(e);
					//modal_?????
					//from, dest, dist, value

					//e.???? || e[????]
					//distance, origin, destination, value

					$("#modal_from").html(e.origin);
					$("#modal_dest").html(e.destination);
					$("#modal_dist").html(e.distance);
					$("#modal_value").html("R$" + e.value);

					$("#freteResult").removeClass("hidden");
				},
				error: function(e){
					console.log("Ajax Response: %s", e);
					console.log(e);
				},
				dataType: "json"
			});
		});
	});

	$(document).ready(function(){
			/* Get iframe src attribute value i.e. YouTube video url
			and store it in a variable */
			var url = $("#cartoonVideo").attr('src');

			/* Remove iframe src attribute on page load to
			prevent autoplay in background */
			$("#cartoonVideo").attr('src', '');

			/* Assign the initially stored url back to the iframe src
			attribute when modal is displayed */
			$("#myModal").on('shown.bs.modal', function(){
					$("#cartoonVideo").attr('src', url);
			});

			/* Assign empty url value to the iframe src attribute when
			modal hide, which stop the video playing */
			$("#myModal").on('hide.bs.modal', function(){
					$("#cartoonVideo").attr('src', '');
			});
	});

	$(document).ready(function() {
		$('#myCarousel').carousel({
		interval: 10000
		})

			$('#myCarousel').on('slid.bs.carousel', function() {
				//alert("slid");
		});


	});


})();
