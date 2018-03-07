jQuery(function($) {
	
	$(document).ready(function(){

		$("td.edit").click(function() {
			var name = $(this).parent().find("td.name").text();
			$("#editing input.edit_name").val(name);

			$("#editing").addClass("show_modal");
		});

		$("#editing input.cancel").click(function() {
			$("#editing").removeClass("show_modal");
		});

		$("input.add").click(function() {

			$("#add_new").addClass("show_modal");
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

		

		$("td.edit_pay").click(function() {
			var ag_name = $(this).parent().find("td.ag_name").text();
			$("#editing_pay .ag_name").text(ag_name);

			var chat7days = $(this).parent().find("td.chat7days").text();
			$("#editing_pay input.edit_chat7days").val(chat7days);

			var chat15days = $(this).parent().find("td.chat15days").text();
			$("#editing_pay input.edit_chat15days").val(chat15days);

			var chat30days = $(this).parent().find("td.chat30days").text();
			$("#editing_pay input.edit_chat30days").val(chat30days);

			var mail15days = $(this).parent().find("td.mail15days").text();
			$("#editing_pay input.edit_mail15days").val(mail15days);

			var mail30days = $(this).parent().find("td.mail30days").text();
			$("#editing_pay input.edit_mail30days").val(mail30days);

			$("#editing_pay").addClass("show_modal");
		});

		$("#editing_pay input.cancel").click(function() {
			$("#editing_pay").removeClass("show_modal");
		});

		
	});

	
	
});