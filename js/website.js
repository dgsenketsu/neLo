$(document).ready(function()
{
    var show = myfunct();
    var run = setInterval(function(){myfunct()}, 15000);
    function myfunct() {
        var request = $.ajax({
            type: 'POST',
            url: 'check.php',
            dataType: 'text',
        });
        request.done(function(data)
        {
            var rvalue = parseInt(data);
            var max=120;
            var value = Math.round(rvalue/max*100);
            console.log(rvalue + "," + max + "," + value);
            $('#output2').html("<h2>" + value +"% occupied</h2>");
            if(value < 71)
            {
                var text="progress-bar-success";
                var text2 = "<div class=\"progress progress-striped active\"><div class=\"progress-bar "+ text +"\" style=\"width: "+ value +"%;\"></div></div>"
                $('#output').html(text2);
                console.log(text2);
            }
            if(value < 86 && value > 70)
            {
                var text="progress-bar-warning";
                var text2 = "<div class=\"progress progress-striped active\"><div class=\"progress-bar "+ text +"\" style=\"width: "+ value +"%;\"></div></div>"
                $('#output').html(text2);
            }
            if(value > 85)
            {
                var text="progress-bar-danger";
                var text2 = "<div class=\"progress progress-striped active\"><div class=\"progress-bar "+ text +"\" style=\"width: "+ value +"%;\"></div></div>"
                $('#output').html(text2);
            }
        });
}
});

function makesubmit(){
    var request = $.ajax({
        type: 'POST',
        data: { email: $('#inputEmail').val(), phone: $('#inputPhone').val(), textArea: $('#textArea').val() },
        url: 'send_form.php',
        dataType: 'text',
    });
    request.done(function(data)
    {
        $('#inputEmail').val("");
        $('#inputPhone').val("");
        $('#textArea').val("");
        var omg = parseInt(data);
        if(omg == 1)
        {
            $('#modalmessage').html("<div class=\"alert alert-dismissable alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Message succesfully sent!</strong></div>");
        }
        if(omg == 2)
        {
            $('#modalmessage').html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>You have not entered a valid email address!</strong></div>");
        }
        if(omg == 3)
        {
            $('#modalmessage').html("<div class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button><strong>Your message exceeds 500 characters!</strong></div>");
        }
    });
    return false;
}