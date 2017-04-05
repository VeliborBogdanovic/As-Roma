<script>
	var httpObj=null;
	
	function kreiranje (){
		if(window.ActiveXObject){
			return new ActiveXObject("Microsoft.XMLHTTP");
			}
		else if(window.XMLHttpRequest){
			return new XMLHttpRequest();
		}
		else {  alert("Vas brownser ne podrzava AJAX")
				return null;
		}
	}
</script>	
