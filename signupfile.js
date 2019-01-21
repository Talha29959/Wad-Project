$(document).ready(function(){
		$("#ns2").click(function(){
		var reM = /^\w+([\._]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		var em=$("#e").val();
		//alert(e);
		if(!reM.test(em) )
		{
			$("#s1").show();
		}
		else 
		{
			$("#s1").hide();
			$("#s2").show();

		}
		
		});
		$("#ps1").click(function(){
			$("#s1").show();
			$("#s2").hide();$("#s3").hide();$("#s4").hide();$("#s5").hide();$("#s6").hide();$("#s7").hide();$("#s8").hide();
			$("#s9").hide();$("#s10").hide();
		});
		$("#ns3").click(function(){
		var reN = /^[A-Za-z]{1,25}$/;
		var relN = /^[A-Za-z]{1,25}$/;

		var f=$("#fn").val();
		var l=$("#ln").val();

		//alert(e);
		if(!reN.test(f) )
		{
			$("#s2").show();
		}
		else if(!relN.test(l ))
		{
			("#s2").show();

		}
		else
		{
			$("#s2").hide();
			$("#s3").show();
		}
		});
		$("#ps2").click(function(){
			$("#s2").show();
			$("#s3").hide();$("#s4").hide();$("#s5").hide();$("#s6").hide();$("#s7").hide();$("#s8").hide();
			$("#s9").hide();$("#s1").hide();$("#s10").hide();
		});
		$("#ns4").click(function(){
		var f=$("#month_start").val();
		var l=$("#day_start").val();		
		var l1=$("#year_start").val();


		//alert(f);
			if(f =="Month" || l=="Day" ||l1=="Year")
		{
			$("#s3").show();
		}
		else
		{
			$("#s3").hide();
			$("#s4").show();
		}
		});
		$("#ps3").click(function(){
			$("#s3").show();
			$("#s4").hide();$("#s5").hide();$("#s6").hide();$("#s7").hide();$("#s8").hide();
			$("#s9").hide();$("#s2").hide();$("#s1").hide();$("#s10").hide();
		});
		$("#ns5").click(function(){

		var f=$("#gender").val();

		//alert(e);
		if(f =="Select Gender" )
		{
			$("#s4").show();
		}
		else
		{
			$("#s4").hide();
			$("#s5").show();
		}
		});
		$("#ps4").click(function(){
			$("#s3").show();
			$("#s4").hide();$("#s5").hide();$("#s6").hide();$("#s7").hide();$("#s8").hide();
			$("#s9").hide();$("#s2").hide();$("#s1").hide();$("#s10").hide();
		});
		
		$("#ns6").click(function(){

		var f=$("#n").val();

		//alert(e);
		if(f =="" )
		{
			$("#s5").show();
		}
		else
		{
			$("#s5").hide();
			$("#s6").show();
		}
		});
		$("#ps5").click(function(){
			$("#s4").show();
			$("#s5").hide();$("#s6").hide();$("#s7").hide();$("#s8").hide();$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s3").hide();
		});
		
		$("#ns7").click(function(){
		var reC = /^\d{7}$/;
		var f=$("#an").val();
		var f1=$("#cn").val();
		var f2=$("#n2").val();


		//alert(e);
		if(f ==""||f1 ==""|| !reC.test(f2) )
		{
			$("#s6").show();
		}
		else
		{
			$("#s6").hide();
			$("#s7").show();
		}
		});
		$("#ps6").click(function(){
			$("#s5").show();
			$("#s6").hide();$("#s7").hide();$("#s8").hide();$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s4").hide();$("#s3").hide();
		});
		
		$("#ns8").click(function(){

		var f=$("#p").val();
		//alert(e);
		if(f =="")
		{
			$("#s7").show();
		}
		else
		{
			$("#s7").hide();
			$("#s8").show();
		}
		});
		$("#ps7").click(function(){
			$("#s6").show();
			$("#s7").hide();$("#s8").hide();$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
		});
		
		$("#ns9").click(function(){

		var f=$("#fa").val();
		//alert(e);
		if(f =="Select One")
		{
			$("#s8").show();
		}
		else
		{
			$("#s8").hide();
			$("#s9").show();
		}
		});
		$("#ps8").click(function(){
			$("#s7").show();
			$("#s8").hide();$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s6").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
		});
		
		$("#ns10").click(function(){

		var f=$("#pkr").val();
		//alert(e);
		if(f =="Select One")
		{
			$("#s9").show();
		}
		else
		{
			$("#s9").hide();
			$("#s10").show();
		}
		});
		$("#ps9").click(function(){
			$("#s8").show();
			$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s7").hide();$("#s6").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
		});
		
		
		$("#ns11").click(function(){
		   		$("#s8").hide();
			$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s7").hide();$("#s6").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
						//$("#r1").show();
					$("#r1").show();
						//$("#r1").hide();
				});
		//var f=$("#fi").val();
		//alert(e);
		$("#exit").click(function(){
		$("#s9").hide();$("#s2").hide();$("#s1").hide();
			$("#s10").hide();$("#s7").hide();$("#s6").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
						//$("#r1").show();
					$("#s1").show();
						//$("#r1").hide();
				});
		
	
		$("#ps10").click(function(){
			$("#s9").show();
			$("#s10").hide();$("#s2").hide();$("#s1").hide();
			$("#s8").hide();$("#s7").hide();$("#s6").hide();$("#s5").hide();$("#s4").hide();$("#s3").hide();
		});
		
		$("#nr2").click(function(){
		var e=$("#ex").val();
		//alert(e);
		if(e =="Select Experience" )
		{
			$("#r1").show();
		}
		else
		{
			$("#r1").hide();
			$("#r2").show();
		}
		});
		$("#pr1").click(function(){
			$("#r1").show();
			$("#r2").hide();$("#r3").hide();$("r4").hide();$("#r5").hide();$("#r6").hide();$("#r7").hide();
		});
		$("#nr3").click(function(){
		var e=$("#pk").val();
		//alert(e);
		if(e =="Select salary" )
		{
			$("#r2").show();
		}
		else
		{
			$("#r2").hide();
			$("#r3").show();
		}
		});
		$("#pr2").click(function(){
			$("#r2").show();
			$("#r3").hide();$("#r3").hide();$("r4").hide();$("#r5").hide();$("#r6").hide();$("#r7").hide();
		});
		$("#nr4").click(function(){
		var e=$("#cl").val();
		//alert(e);
		if(e =="Select career Level" )
		{
			$("#r3").show();
		}
		else
		{
			$("#r3").hide();
			$("#r4").show();
		}
		});
		$("#pr3").click(function(){
			$("#r3").show();
			$("#r4").hide();$("#r1").hide();$("r4").hide();$("#r5").hide();$("#r6").hide();$("#r7").hide();
		});
		$("#nr5").click(function(){
		var e=$("#sj").val();
		//alert(e);
		if(e ==" " )
		{
			$("#r4").show();
		}
		else
		{
			$("#r4").hide();
			$("#r5").show();
		}
		});
		$("#pr4").click(function(){
			$("#r4").show();
			$("#r5").hide();$("#r1").hide();$("r2").hide();$("#r5").hide();$("#r6").hide();$("#r7").hide();
		});
		$("#nr6").click(function(){
		var e=$("#cw").val();
		//alert(e);
		if(e =="Select City" )
		{
			$("#r5").show();
		}
		else
		{
			$("#r5").hide();
			$("#r6").show();
		}
		});
		$("#pr5").click(function(){
			$("#r5").show();
			$("#r6").hide();$("#r1").hide();$("r2").hide();$("#r3").hide();$("#r6").hide();$("#r7").hide();
		});
		$("#nr7").click(function(){
		var e=$("#bp").val();
		//alert(e);
		if(e =="" )
		{
			$("#r6").show();
		}
		else
		{
			$("#r6").hide();
			$("#r7").show();
		}
		});
		$("#pr6").click(function(){
			$("#r6").show();
			$("#r7").hide();$("#r1").hide();$("r2").hide();$("#r3").hide();$("#r4").hide();$("#r7").hide();
		});
		$("#nr8").click(function(){
		var e=$("#ind").val();
		//alert(e);
		if(e =="Select Industry" )
		{
			$("#r7").show();
		}
		else
		{
			$("#r7").hide();
			$("#ns2").show();
		}
		});
		$("#pr7").click(function(){
			$("#r7").show();
			$("#r8").hide();$("#r1").hide();$("r2").hide();$("#r3").hide();$("#r4").hide();$("#r5").hide();
		});
});