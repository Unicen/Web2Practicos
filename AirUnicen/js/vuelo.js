
$(document).ready(function(){
	setInterval(function(){
		$(".estado").each(function(index, value ){
			var id_vuelo = $(value).attr("id_vuelo");

			$.ajax({
			  method: "GET",
			  url: "API/vuelo/"+id_vuelo,
			  contentType: false,
			  success : function(data)
			  {
			  }
			});
			
	  });	  
	}, 500);

});
