jQuery(function($) {
	
	$(document).ready(function(){

		$("td.edit").click(function() {
			var name = $(this).parent().find("td.name").text();
			$("#editing input.edit_name").val(name);
			$("#editing span.ag_name").text(name);

			$("#editing").addClass("show_modal");
		});

		$("#editing input.cancel").click(function() {
			$("#editing").removeClass("show_modal");
		});

		$("input.add").click(function() {

			$("#add_new").addClass("show_modal");
		});

		$("input.add_new_profile").click(function() {

			$("#add_new").removeClass("show_modal");
			$("#add_new_profile").addClass("show_modal");
		});

		$("#add_new_profile input.cancel").click(function() {
			$("#add_new_profile").removeClass("show_modal");
		});

		$("#add_new input.cancel").click(function() {
			$("#add_new").removeClass("show_modal");
		});

		$("input.credit").click(function() {

			$("#credit").addClass("show_modal");
		});


		$("#credit input.cancel").click(function() {
			$("#credit").removeClass("show_modal");
		});

		$("td.add_credit").click(function() {

			var name = $(this).parent().find("td.name").text();
			$("#credit span.ag_name").text(name);


			$("#credit").addClass("show_modal");
		});
		
		
	});

	
	
});