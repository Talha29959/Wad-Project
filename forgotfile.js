$(document).ready(function(){
		$("#nr2").click(function(){
		var e=$("#em").val();
		//alert(e);
		if(e =="" )
		{
			$("#r1").show();
		}
		else
		{
			$("#r1").hide();
			$("#r2").show();
		}
		});
		$("#nr3").click(function(){
		var e=$("#pc").val();
		//alert(e);
		if(e =="" )
		{
			$("#r2").show();
		}
		else
		{
			$("#r2").hide();
			$("#r3").show();
		}
		});
		
		$("#nr4").click(function(){
		var e=$("#s").val();
		//alert(e);
		if(e =="" )
		{
			$("#r3").show();
		}
		else
		{
			$("#r3").hide();
			$("#r4").show();
		}
		});

});