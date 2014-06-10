$(document).ready(function() {
	$("#minibtn").click(function() {
		if($.isNumeric($("#inputDaysNumber").val()) && parseInt($("#inputDaysNumber").val()) > 0 && parseInt($("#inputDaysNumber").val()) < 31)
		{
			var nr_days = parseInt($("#inputDaysNumber").val());
			$("#nonumber").html("");
		}
		else
		{
			$("#nonumber").html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>You have not entered a number between 0 and 32</strong>");
	    }
    });
});