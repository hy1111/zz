$.ajax({
	type:"get",
	url:"js/hu.grzl.json"
}).done(function(data){
	console.log(data)
	var a=data.datas[0];
	console.log(a)
	$("#a1").html(a[0])
	$("#a2").html(a[1])
	$("#a3").html(a[2])
	$("#a4").html(a[3])
	$("#a5").html(a[4])
	$("#a6").html(a[5])
	$("#a7").html(a[6])
	$("#a8").html(a[7])
	$("#a9").html(a[8])
});