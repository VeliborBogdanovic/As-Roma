
	var xmlHttp=null;
	
	function prikaziIgraca(str){
		
		xmlHttp=kreiranje();
		if(xmlHttp==null){alert("Ne podrzavate AJAX");return}
		
		var url="podaciIgraca.php";
		url=url+ "?pozicija="+str;
		
		xmlHttp.onreadystatechange=listaIgraca;
		xmlHttp.open("GET",url,true);
		xmlHttp.send(null);
		
	}
	function listaIgraca(){
	
		if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
				
			document.getElementById("rezultat1").innerHTML=xmlHttp.responseText;
		}
	}

