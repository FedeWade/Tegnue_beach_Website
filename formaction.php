<?php
	require_once __DIR__ . "/php/connectionpd.php";
	
	$conn = new DBConnection();
	$conn->openConnection();
	
	$nome = $_POST['cognomenome'];
	$pers = $_POST['persone'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$tel = $_POST['telefono'];
	$ora = $_POST['ora'];
	$note = $_POST['note'];
	$errors="";
	
	if(empty($nome)) {
		$error ="<li> <span class='err'>X</span> Cognome e nome non inserito </li>";
		$errors=$errors.$error;
	}
	if(empty($pers)) {
		$error = "<li> <span class='err'>X</span> Numero persone non inserito </li>";
		$errors= $errors.$error;
	}
	else if($pers < 1) {
		$error = "<li> <span class='err'>X</span> Numero persone inserito non valido</li>";
		$errors= $errors.$error;		
		
	}
	else if($pers > 20) {
		$error = "<li> <span class='err'>X</span> Impossibile prenotare per piu di 20 persone attraverso il sito, telefonare al ristorante.</li>";
		$errors= $errors.$error;		
	}
	
	if(empty($data)) {
		$error = "<li> <span class='err'>X</span> Data non inserita </li>";
		$errors= $errors.$error;
	}
	else {
		$data = str_replace('/', '-', $data );
		$data = date("Y-m-d", strtotime($data));
		
		$comparedate = new DateTime($data);
		$now = new DateTime();

		if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$data)) {
			$error = "<li> <span class='err'>X</span> Data inserita non valida </li>";
			$errors= $errors.$error;
		}
		if($comparedate < $now ) {
			$error = "<li> <span class='err'>X</span> Data inserita già passata </li>";
			$errors= $errors.$error;
		}
	}
	
	if(empty($ora)) {
		$error = "<li> <span class='err'>X</span> Ora non inserita </li>";
		$errors= $errors.$error;
	}
	else if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $ora)  ||  date($ora) < 11 || date($ora) > 22 )
	{
		$error = "<li> <span class='err'>X</span> Ora inserita non valida (Prenotabile: 11:00 - 22:00) </li>";
		$errors= $errors.$error;
	}
		
	
	if(empty($tel)) {
		$error = "<li> <span class='err'>X</span> Numero di telefono non inserito </li>";
		$errors= $errors.$error;
	}
	else if(!preg_match('/^[0-9]{10}+$/', $tel)){
		$error = "<li> <span class='err'>X</span> Numero di telefono inserito non valido </li>";
		$errors= $errors.$error;
	}
	
	if(empty($email)) {
		$error = "<li> <span class='err'>X</span> Email non inserita </li>";
		$errors= $errors.$error;
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "<li> <span class='err'>X</span> Email inserita non valida </li>";
		$errors= $errors.$error;
	}
	
		
		
	
	if(empty($error)) {
	
		$sql = "INSERT INTO Prenotazione (CodicePrenotazione, CognomeNome, Email, Telefono, Data, Ora, NumeroPersone, Nota) 
		VALUES ('','$nome','$email','$tel','$data','$ora','$pers','$note')";
		
		if( $conn->connection->query($sql) === TRUE )
			{
				echo 'La prenotazione è stata registrata con successo! verrai reindirizzato sul sito a breve.';
				$okmessage = "<p class='formerror'>Prenotazione registrata con successo!</p><p class='formerror'> In data ". date("d-m-Y", strtotime($data)) ." alle ore ".$ora." per ".$pers." persone.</p>";
				$errors="";
				header("Refresh: 3; url=tegnue.php?confirm=$okmessage&message=$errors#prenota");
			}
		else	
			{
				echo 'ERRORE: prenotazione fallita, verrai reindirizzato sul sito a breve.';
				$connerror ="<p class='formerror'>ERRORE: prenotazione fallita, impossibile comunicare con il database.</p>";
				$okmessage="";
				header("Refresh: 3; url=tegnue.php?message=$connerror&confirm=$okmessage#prenota");
			}
		
	}
	else{
		$errors= "<p class='formerror'>Attenzione! il form non è stato compilato correttamente: </p> <ul class='formerror'>".$errors. "</ul>";
		$okmessage="";
		header("Location: tegnue.php?message=$errors&confirm=$okmessage#prenota");
	}
		
	
?>