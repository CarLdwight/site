


function fetch(){
	var x = document.getElementById("YEAR").value;
	var site= document.getElementById("site_id").value;

	$.ajax({
		url:"showData.php",
		method:"POST",
		data:{
			id: x,
			sitee: site  
		},
		success:function(data){
			$("#ans").html(data);
		}

	})
}