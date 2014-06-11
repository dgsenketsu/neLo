$(document).ready(function() {
	$("#overbookcheck").hide();
	$("#overlabel").hide();
	$("#minibtn").click(function() {
		if(!($.isNumeric($("#inputDaysNumber").val()) && parseInt($("#inputDaysNumber").val()) > 0 && parseInt($("#inputDaysNumber").val()) < 31))
		{
			$("#nonumber").html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>You have not entered a number between 0 and 32</strong>");
		    return;
		}
		else
		{
			var d = new Date();
			var text = $("#fromMonth").val();
			if(!text.match(/[0-1]+[1-9]+\/201[4-5]+/)) 
			{
				$("#nonumber").html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Incorrect month/year !</strong>");
				return;
			}
			var parts = text.split("/");
			var month = parseInt(parts[0]);
			var year = parseInt(parts[1]);
			var room = parseInt($('#selectroom').val());
			if(d.getFullYear() > year || (d.getMonth()+1 < month && year <= d.getFullYear())) 
			{
				$("#nonumber").html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Incorrect month/year !</strong>");
				return;
			}
			$("#nonumber").html("");
			if($("#overbookcheck:checked").val()!==undefined)
			{
				var overbook = 1;
			}
			else
			{
				var overbook = 0;
			}
			var nr_days = parseInt($("#inputDaysNumber").val());
			var request = $.ajax({
            		type: 'POST',
            		data: { month :month, year :year, days :nr_days, room :room, overbook :overbook},
            		url: 'checkreservation.php',
            		dataType: 'text',
        		});
        	request.done(function(data)
        	{
        		$("#showDate").html("<div class=\"form-group\"><label for=\"select\" class=\"col-lg-2 control-label\">From</label><div class=\"col-lg-10\"><select class=\"form-control\" id=\"selectdate\" name=\"selectdate\">" + data + "</select></div></div> ");
        	    $("#show").html("<div class=\"form-group\"><div class=\"col-lg-10 col-lg-offset-2\"><button type=\"submit\" class=\"btn btn-primary\">Submit</button></div></div>");
        	});
	    }
    });

});