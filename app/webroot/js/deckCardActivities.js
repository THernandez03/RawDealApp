
divSelectDeck = document.getElementById("selectDeck");

function selectDeck(td, from){
    
	if(from == 'index'){
		var rect = td.getBoundingClientRect();
		var x = rect.left;
		var y = rect.top;
		
		var bodyRect = document.body.getBoundingClientRect();
		var yoffset   = y - bodyRect.top;
		divSelectDeck.style.top = yoffset;	
		document.getElementById("hiddenKeyword").value = document.getElementById("searchInput").value;
	}
	
	document.getElementById("hiddenCardId").value = td.id;	
	divSelectDeck.style.display = "block"	
}

function cancelAddCards(){
   divSelectDeck.style.display = "none"
   return false;
}
