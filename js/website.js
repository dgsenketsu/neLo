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