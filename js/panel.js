var data_news;
var data_booking;
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
	//Booking Manager
	var request3 = $.ajax({
		type: 'POST',
		data: { funct :"bm"},
		url: 'panel-api.php',
		dataType: 'json',
	});
	request3.done(function(data2)
	{
		data_booking = data2;
		var text = "";
		for(var i=0; i < data2["length"]; i++)
		{
			text += "<option value=\""+ i +"\">" + data2[i]["nume"] + " " + data2[i]["prenume"] + ":" + data2[i]["startday"] + "/"+data2[i]["startmonthyear"]+"-"+data2[i]["endday"]+"/"+data2[i]['endmonthyear'] + "</option>";
		}
		$("#selectbooking").html(text);
	});
	$("#selectbooking").change(function(){
		var id = $(this).val();
		$("#nume").val(data_booking[id]["nume"]);
		$("#prenume").val(data_booking[id]["prenume"]);
		$("#phone").val(data_booking[id]["phone"]);
		$("#email").val(data_booking[id]["email"]);
		$("#startday").val(data_booking[id]["startday"]);
		$("#startmonthyear").val(data_booking[id]["startmonthyear"]);
		$("#endday").val(data_booking[id]["endday"]);
		$("#endmonthyear").val(data_booking[id]["endmonthyear"]);
		$("#room").val(data_booking[id]["room"]);
		$("#overbook").val(data_booking[id]["overbook"]);
		$("#expireoverbook").val(data_booking[id]["expireoverbook"]);
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
	$("#btnBMDelete").click(function(){
		var nume = $("#nume").val();
		var prenume = $("#prenume").val();
		var startday = $("#startday").val();
		var endday = $("#endday").val();

		var request2 = $.ajax({
			type: 'POST',
			data: { funct :"BMdelete", nume :nume, prenume :prenume, endday :endday, startday :startday},
			url: 'panel-api.php',
			dataType: 'text',
		});
		request2.done(function()
		{
			location.reload();
		});
	});
});