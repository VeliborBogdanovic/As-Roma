$(document).ready(
 
function(){
	var greske = 1;
 $('#tabela  tr:even').not(':first').addClass('zebra');
  $('#tabela  tr').mouseover(function(){
    $(this).addClass('zebraHover');
  });
  $('#tabela  tr').mouseout(function(){
    $(this).removeClass('zebraHover');
  });
	var salji="";

 setTimeout(3000); PrikaziSlike();ddm();

function PrikaziSlike() {
  if($('#header img').attr("src")=="slike/22.png"){
	  
	$('#header img').attr("src","slike/2.png");
  }
  else $('#header img').attr("src","slike/22.png");
 setTimeout(PrikaziSlike,3000);
}
function ddm(){
$('#lista li ul').css({ display: "none", left: "auto" });

$('#lista li').hover(function()
 { $(this) .find('ul') .stop(true, true) .slideDown('300'); },
 function() 
 { $(this) .find('ul') .stop(true,true) .fadeOut('2000'); 
});}


}
);
function onemoguci() {
    document.getElementById("dugmence").disabled = true;
	
}
function omoguci() {
    document.getElementById("dugmence").disabled = false;
}

function proveraIme() {
		
		var ime = document.getElementById('ime');
		var reIme = /^[A-Z]{1}[a-z]{3,10}$/;
		
		if(!reIme.test(ime.value)){
			
			document.getElementById('Ime').style.color = "red";
			document.getElementById('Ime').innerHTML = "Ime nije u dobrom formatu";
			greske=0;
			 onemoguci();
		}
		else{
			document.getElementById('Ime').style.color ="green";
			document.getElementById('Ime').innerHTML = "Ime je u dobrom formatu";
			salji+=ime;
		}

}


function proveraMail(){
	
		var mail = document.getElementById('mail');
		var reMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		if(!reMail.test(mail.value)){
			document.getElementById('Mail').style.color="red";
			document.getElementById('Mail').innerHTML = "Mail nije u dobrom formatu";
			greske=0;
			 onemoguci();
		}
		else{
			document.getElementById('Mail').style.color = "green";
			document.getElementById('Mail').innerHTML = "Mail je u dobrom formatu";
		salji+=mail;
		}
	
}
function proveraBroj(){

		var broj = document.getElementById('broj');
		var reBroj = /^06[0-9]{1}[0-9]{6,7}$/;
		
		if(!reBroj.test(broj.value)){
			document.getElementById('Broj').style.color = "red";
			document.getElementById('Broj').innerHTML = "Broj nije u dobrom formatu";
			greske=0;
			 onemoguci();
		}
		else {
			document.getElementById('Broj').style.color = "green";
			document.getElementById('Broj').innerHTML = "Broj je u dobrom formatu";
			omoguci();
			salji+=broj;
		}

}
function proveraAdresa(){
		var adresa=document.getElementById("adresa").value;
		var reAdresa=/^[A-Z][a-z]{5,}[0-9]{0,3}$/;
		if(!reAdresa.test(adresa)){
			document.getElementById('Adresa').style.color = "red";
			document.getElementById('Adresa').innerHTML = "Adresa nije u dobrom formatu";
			
			 onemoguci();
			
		}
		else{
			document.getElementById('Adresa').style.color= "green";
			document.getElementById('Adresa').innerHTML = "Adresa je u dobrom formatu";
			salji+=adresa;
			
			
		}
		
		
	
}
function php(){
	
	if(greske=""){
		var forma = document.getElementById('forma2');
			forma.action = "Formular.php?btnPrijavi=1";
			forma.submit();
		
	}
}

function hvala()
{
 var anketa = document.getElementsByName('izbor');
 
 var cekirano = "";
  for(var i=0; i < anketa.length; i++)
  {
   if(anketa[i].checked)
   {
    cekirano = anketa[i].value;
     break;
   }
  }
  
  if(cekirano== "")
  {
   alert('Anketa je obavezna, molimo vas da je popunite!');
  }
  else
  {
   alert('Hvala sto ste popunili anketu!');
  }
  
}
function hvala1()
{
 var anketa = document.getElementsByName('pobednik');
 
 var cekirano = "";
  for(var i=0; i < anketa.length; i++)
  {
   if(anketa[i].checked)
   {
    cekirano = anketa[i].value;
     break;
   }
  }
  
  if(cekirano== "")
  {
   alert('Anketa je obavezna, molimo vas da je popunite!');
  }
  else
  {
   alert('Hvala sto ste popunili anketu!');
  }
  
}




///////////////////////////////.......PRETRAGA.......//////////////////////////////////////////////

function pretraga(){
if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
 else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
 xmlhttp.open("GET","igraci.xml",false);
 xmlhttp.send();
 xml=xmlhttp.responseXML;
  
 podaci(xml);

}
function podaci(xml){
	
 var search=document.getElementById('search');
 var tekst="<div id='provera123'>Unesite ime igraca!</div>";
  var podaci=xml.getElementsByTagName('igrac');
  for(var i=0;i<podaci.length;i++){
	  var ime=podaci[i].getElementsByTagName('ime')[0].childNodes[0].nodeValue;
	  var prezime=podaci[i].getElementsByTagName('prezime')[0].childNodes[0].nodeValue;
	 var godine=podaci[i].getElementsByTagName('godine')[0].childNodes[0].nodeValue;
	  var poz=podaci[i].getElementsByTagName('pozicija')[0].childNodes[0].nodeValue;
	   var brojGolova=podaci[i].getElementsByTagName('brojGolova')[0].childNodes[0].nodeValue;
      if(search.value.toLowerCase().trim()==ime.toLowerCase().trim()){
	  tekst="<span style='color:#B30000;; font-size:13px'><i><b>Ime </b></i></span>"+ime+
	        "<br/><span style='color:#B30000; font-size:13px'><i><b>Prezime: </b></i></span>"+prezime+
			"<br/><span style='color:#B30000; font-size:13px'><i><b>Godine </b></i></span>"+godine+
			"<br/><span style='color:#B30000; font-size:13px'><i><b>Pozicija </b></i></span>"+poz+
			"<br/><span style='color:#B30000; font-size:13px'><i><b>Broj golova </b></i></span>"+brojGolova;
			
			}
	
			document.getElementById('rezultat').innerHTML=tekst;
  }
  
}