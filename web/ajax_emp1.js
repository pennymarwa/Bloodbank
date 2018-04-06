var xmlhttp;
 function GetXMLHttp()
 {
	 if(window.XMLHttpRequest)
	 {
		 return new(XMLHttpRequest);
	 }
	 if(window.ActiveXObject)
	 {
		 return new ActiveXObject("Microsoft.XMLHTTP");
	 }
 }
 function select_patient(str)
 {
	 xmlhttp=GetXMLHttp();
	 if(xmlhttp==null)
	 {
		 alert("Empty Result");
	 }
	 var url="select_ser1.php";
	 url=url+"?x="+str;
	 xmlhttp.onreadystatechange= function()
	 {
		 if(xmlhttp.readyState==4)
		 {
			 document.getElementById("table1").innerHTML=xmlhttp.responseText;
		 }
	 }
	 xmlhttp.open("GET",url,true);
	 xmlhttp.send(null);
 }