function navi(id) {
 if(id == 1) {
  if( document.getElementById('mainblock').style.display == 'none' ) { 
  document.getElementById('mainblock').style.display = 'block'; 
  }
	document.getElementById('clanblock').style.display = 'none';
	document.getElementById('commblock').style.display = 'none';
	document.getElementById('mediablock').style.display = 'none';
	document.getElementById('miscblock').style.display = 'none';	
	document.getElementById('amain').className = 'aktiv';
	document.getElementById('aclan').className = '';
	document.getElementById('acomm').className = '';
	document.getElementById('amedia').className = '';
 	document.getElementById('amisc').className = '';
 } 
 else if(id == 2) {
  if( document.getElementById('clanblock').style.display == 'none' ) { 
  document.getElementById('clanblock').style.display = 'block'; 
  }
	document.getElementById('mainblock').style.display = 'none';
	document.getElementById('commblock').style.display = 'none';
	document.getElementById('mediablock').style.display = 'none';
	document.getElementById('miscblock').style.display = 'none';	
	document.getElementById('amain').className = '';
	document.getElementById('aclan').className = 'aktiv';
	document.getElementById('acomm').className = '';
	document.getElementById('amedia').className = '';
 	document.getElementById('amisc').className = '';
 }
 else if(id == 3) {
  if( document.getElementById('commblock').style.display == 'none' ) { 
  document.getElementById('commblock').style.display = 'block'; 
  }
	document.getElementById('clanblock').style.display = 'none';
	document.getElementById('mainblock').style.display = 'none';
	document.getElementById('mediablock').style.display = 'none';
	document.getElementById('miscblock').style.display = 'none';	
	document.getElementById('amain').className = '';
	document.getElementById('aclan').className = '';
	document.getElementById('acomm').className = 'aktiv';
	document.getElementById('amedia').className = '';
 	document.getElementById('amisc').className = '';
 }
 else if(id == 4) {
  if( document.getElementById('mediablock').style.display == 'none' ) { 
  document.getElementById('mediablock').style.display = 'block'; 
  }
	document.getElementById('clanblock').style.display = 'none';
	document.getElementById('mainblock').style.display = 'none';
	document.getElementById('commblock').style.display = 'none';
	document.getElementById('miscblock').style.display = 'none';	
	document.getElementById('amain').className = '';
	document.getElementById('aclan').className = '';
	document.getElementById('acomm').className = '';
	document.getElementById('amedia').className = 'aktiv';
 	document.getElementById('amisc').className = '';
 } 
 else if(id == 5) {
  if( document.getElementById('miscblock').style.display == 'none' ) { 
  document.getElementById('miscblock').style.display = 'block'; 
  }
	document.getElementById('clanblock').style.display = 'none';
	document.getElementById('mainblock').style.display = 'none';
	document.getElementById('commblock').style.display = 'none';
	document.getElementById('mediablock').style.display = 'none';	
	document.getElementById('amain').className = '';
	document.getElementById('aclan').className = '';
	document.getElementById('acomm').className = '';
	document.getElementById('amedia').className = '';
 	document.getElementById('amisc').className = 'aktiv';
 } 
}

function switcher(id) {
 if(id == 1) {
  if( document.getElementById('squada').style.display == 'none' ) { 
  document.getElementById('squada').style.display = 'block'; 
  }
	document.getElementById('squad1').style.display = 'none';
	document.getElementById('squad2').style.display = 'none';
	document.getElementById('squad3').style.display = 'none';
	document.getElementById('squad4').style.display = 'none';	
	
 } 
 else if(id == 2) {
  if( document.getElementById('squad1').style.display == 'none' ) { 
  document.getElementById('squad1').style.display = 'block'; 
  }
	document.getElementById('squada').style.display = 'none';
	document.getElementById('squad2').style.display = 'none';
	document.getElementById('squad3').style.display = 'none';
	document.getElementById('squad4').style.display = 'none';	
	
 }
 else if(id == 3) {
  if( document.getElementById('squad2').style.display == 'none' ) { 
  document.getElementById('squad2').style.display = 'block'; 
  }
	document.getElementById('squada').style.display = 'none';
	document.getElementById('squad1').style.display = 'none';
	document.getElementById('squad3').style.display = 'none';
	document.getElementById('squad4').style.display = 'none';	
	
 }
 else if(id == 4) {
  if( document.getElementById('squad3').style.display == 'none' ) { 
  document.getElementById('squad3').style.display = 'block'; 
  }
	document.getElementById('squada').style.display = 'none';
	document.getElementById('squad1').style.display = 'none';
	document.getElementById('squad2').style.display = 'none';
	document.getElementById('squad4').style.display = 'none';	

 } 
 else if(id == 5) {
  if( document.getElementById('squad4').style.display == 'none' ) { 
  document.getElementById('squad4').style.display = 'block'; 
  }
	document.getElementById('squada').style.display = 'none';
	document.getElementById('squad1').style.display = 'none';
	document.getElementById('squad2').style.display = 'none';
	document.getElementById('squad3').style.display = 'none';	

 } 
}