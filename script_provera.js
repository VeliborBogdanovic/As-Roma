function provera(){
		var ime = document.getElementById('ime');
		var reIme = /^[A-Z]{1}[a-z]{3,10}$/;
	
		var mail = document.getElementById('mail');
		var reMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var broj = document.getElementById('broj');
		var reBroj = /^06[0-9]{1}[0-9]{6,7}$/;
		var adresa=document.getElementById("adresa");
		var reAdresa=/^[A-Z][a-z]{5,}[0-9]{0,3}$/;
		
		
		
		
		if(!reIme.test(ime.value)){
			document.getElementById('Ime').style.color = "red";
			document.getElementById('Ime').innerHTML = "Ime nije u dobrom formatu";
			
			 
		}

	 if(!reMail.test(mail.value)){
			document.getElementById('Mail').style.color="red";
			document.getElementById('Mail').innerHTML = "Mail nije u dobrom formatu";
			
		
			
		}
		 if(!reBroj.test(broj.value)){
			document.getElementById('Broj').style.color = "red";
			document.getElementById('Broj').innerHTML = "Broj nije u dobrom formatu";
			
		
		}
		 if(!reAdresa.test(adresa.value)){
			document.getElementById('Adresa').style.color = "red";
			document.getElementById('Adresa').innerHTML = "Adresa nije u dobrom formatu";
			
			
		}
		else {
			var forma = document.getElementById('formica');
			forma.action = "Formular.php?dugmence=1";
			forma.submit();
		}
	}