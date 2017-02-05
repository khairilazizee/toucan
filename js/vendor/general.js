$(document).ready(function(){
	$(document).on("click","#btnBack",function(){
		// alert("poing");
		var hdnURL = $("#hdnURL").val();

		location.href=hdnURL+"home"
	});

});