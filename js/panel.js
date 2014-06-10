var data_news;
$(document).ready(function() {
	var request = $.ajax({
		type: 'POST',
		data: { funct :"show"},
		url: 'panel-api.php',
		dataType: 'json',
	});
	request.done(function(data)
	{
		data_news = data;
		var text = "";
		for(var i=0; i < data["length"]; i++)
		{
			text += "<option value=\""+ i +"\">" + data[i]["title"] + "</option>";
		}
		$("#selectnews").html(text);
	});
	$("#selectnews").change(function(){
		var id = $(this).val();
		$("#inputTitle").val(data_news[id]["title"]);
		$("#textArea").val(data_news[id]["content"]);
		$("#inputLink").val(data_news[id]["link"]);
	   });
	$("#btnUpdate").click(function(){
		var original = $("#selectnews :selected").text();
		var title = $("#inputTitle").val();
		var content = $("#textArea").val();
		var link = $("#inputLink").val();
		var request2 = $.ajax({
			type: 'POST',
			data: { funct :"update", original :original, title :title, content :content, link :link},
			url: 'panel-api.php',
			dataType: 'text',
		});
		request2.done(function()
		{
			location.reload();
		});
	});
	$("#btnInsert").click(function(){
		var title = $("#inputTitle").val();
		var content = $("#textArea").val();
		var link = $("#inputLink").val();
		var request2 = $.ajax({
			type: 'POST',
			data: { funct :"insert", title :title, content :content, link :link},
			url: 'panel-api.php',
			dataType: 'text',
		});
		request2.done(function()
		{
			location.reload();
		});
	});
	$("#btnDelete").click(function(){
		var original = $("#selectnews :selected").text();
		var request2 = $.ajax({
			type: 'POST',
			data: { funct :"delete", original :original},
			url: 'panel-api.php',
			dataType: 'text',
		});
		request2.done(function()
		{
			location.reload();
		});
	});
});