$(document).ready(function(){
	$("body").append('<div id="tooltiptop" style="display:none; padding:8px; position:absolute; background-color: rgba(0, 0, 0, 0.8); color: #FFFFFF; max-width:300px"></div>');	
		$(".tooltiptop").mouseenter( function(e){
			var Y = X = 10;
			var textin = $(this).attr("tooltiptop"); 
			$("#tooltiptop").show();
			$("#tooltiptop").css('top',e.pageY+Y).css('left',e.pageX+X);
			//$("#tooltiptop").text('Y: ' + e.pageY + ' X: ' + e.pageX );
			$("#tooltiptop").html(textin);
		}).mouseleave(function(){
			$("#tooltiptop").hide().text("");
		});		
	});