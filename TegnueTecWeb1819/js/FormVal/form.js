function isFutureDate(idate){
    var today = new Date();
    var seldata = new Date(idate);
    return(today < seldata );
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function checkTime(ora) {
	var re = /^(1[1-9]|2[0-2]):[0-5][0-9]$/.test(ora.value);
	return re;
}

function validateForm() {
	
	var nome = document.forms["formp"]["cognomenome"];
	var persone = document.forms["formp"]["persone"];
	var email = document.forms["formp"]["email"];
	var data = document.forms["formp"]["data"];
	var telefono = document.forms["formp"]["telefono"];
	var ora = document.forms["formp"]["ora"];

	var errori=[];
	var first="cn";
	
	var x = document.getElementsByClassName("inputf");
	var i;
	for (i = 0; i < x.length; i++) {
		x[i].style.border = "2px solid black";
	}
	
	document.getElementById("maill").innerHTML = 'E-mail:';
	if(email.value == "")
	{
		errori.unshift("Inserire la email."); 
		document.getElementById("mail").style.border = "4px double red";
		document.getElementById("maill").innerHTML = 'E-mail: <span class="error">&#10005;</span>';
		first="mail";
	}
	else if(!validateEmail(email.value)) {
		errori.unshift("Email inserita non valida.");
		document.getElementById("mail").style.border = "4px double red";
		document.getElementById("maill").innerHTML = 'E-mail: <span class="error">&#10005;</span>';
		first="mail";
	}
	
	document.getElementById("numl").innerHTML = 'Numero di telefono:';
	if(telefono.value == "")
	{
		errori.unshift("Inserire il numero di telefono.");
		document.getElementById("num").style.border = "4px double red";	
		document.getElementById("numl").innerHTML = 'Numero di telefono: <span class="error">&#10005;</span>';
		first="num";
	}
	else if(!/^\d{10}$/.test(telefono.value)){
		errori.unshift("Numero di telefono non valido.");
		document.getElementById("num").style.border = "4px double red";
		document.getElementById("numl").innerHTML = 'Numero di telefono: <span class="error">&#10005;</span>';
		first="num";
	}
	
	document.getElementById("orl").innerHTML = 'Ora: (hh:mm)';
	if(ora.value == "")
	{
		errori.unshift("Inserire l'ora."); 
		document.getElementById("or").style.border = "4px double red";
		document.getElementById("orl").innerHTML = 'Ora: (hh:mm) <span class="error">&#10005;</span>';
		first="or";
	}
	else if(!checkTime(ora))
	{
		errori.unshift("Ora inserita non valida (Prenotabile: 11:00 - 22:00).");
		document.getElementById("or").style.border = "4px double red";
		document.getElementById("orl").innerHTML = 'Ora: (hh:mm) <span class="error">&#10005;</span>';
		first="or";
	}
	
	document.getElementById("dtl").innerHTML = 'Data: (gg/mm/aaaa)';
	if(data.value == "")
	{
		errori.unshift("Inserire la data."); 
		document.getElementById("dt").style.border = "4px double red";
		document.getElementById("dtl").innerHTML = 'Data: (gg/mm/aaaa) <span class="error">&#10005;</span>';
		first="dt";
	}
	else if(!isFutureDate(data.value)){
		errori.unshift("Data inserita gi&agrave; passata."); 
		document.getElementById("dt").style.border = "4px double red";
		document.getElementById("dtl").innerHTML = 'Data: (gg/mm/aaaa) <span class="error">&#10005;</span>';
		first="dt";
	}
	
	document.getElementById("persl").innerHTML = 'Numero di persone:';
	if(persone.value == "")
	{
		errori.unshift("Inserire il numero di persone.");   
		document.getElementById("pers").style.border = "4px double red";
		document.getElementById("persl").innerHTML = 'Numero di persone: <span class="error">&#10005;</span>';
		first="pers";
	}
	else if(persone.value > 20)
	{
		errori.unshift("Impossibile prenotare per piu di 20 persone attraverso il sito, telefonare al ristorante."); 
		document.getElementById("pers").style.border = "4px double red";
		document.getElementById("persl").innerHTML = 'Numero di persone: <span class="error">&#10005;</span>';
		first="pers";
	}
	else if(persone.value < 1)
	{
		errori.unshift("Numero persone non valido.");
		document.getElementById("pers").style.border = "4px double red";
		document.getElementById("persl").innerHTML = 'Numero di persone: <span class="error">&#10005;</span>';
		first="pers";
		
	}
	
	document.getElementById("cnl").innerHTML = 'Cognome e nome:';
	if(nome.value == "")
	{
		errori.unshift("Inserire nome e cognome.");
		document.getElementById("cn").style.border = "4px double red";
		document.getElementById("cnl").innerHTML = 'Cognome e nome: <span class="error">&#10005;</span>';
		first="cn";
	}
	
	document.getElementById(first).focus();

	if(errori.length > 0)
	{	
		var rm1=document.getElementById("perror");
		if(rm1)
		{
			rm1.remove();
		}
		var rm2=document.getElementById("ulerror");
		if(rm2)
		{
			rm2.remove();
		}
		var ul=document.createElement('ul');
		ul.setAttribute("class", "formerror");
		ul.setAttribute("id", "ulerror");
		var p=document.createElement('p');
		p.setAttribute("class", "formerror");
		p.setAttribute("id", "perror");

		p.innerHTML= "Attenzione! il form non &egrave; stato compilato correttamente:";
		
		for(var i=0; i<errori.length; i++)
		{
			var li=document.createElement('li');
			li.innerHTML= "<span class='err'>&#10005;</span>" + errori[i];
			ul.appendChild(li);
			
		}
		document.getElementById('errbox').appendChild(p);
		document.getElementById('errbox').appendChild(ul);
		document.getElementById("confirmbox").style.display = "none";
		return false;
	}
	document.getElementById("confirmbox").style.display = "block";
	return true;
}