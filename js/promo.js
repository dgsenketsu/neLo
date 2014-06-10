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