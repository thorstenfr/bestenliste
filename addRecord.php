<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bestenliste";
	
	
	
	// Verbindung herstellen
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	// Verbindung prüfen
	if (!$conn){
		die("Verbindung fehlgeschlagen: " . mysqli_connect_error());		
	}
	
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO scores (spieler, punkte) VALUES (?, ?)");
	$stmt->bind_param("si", $spieler, $punkte);

	// set parameters and execute
	$spieler = $_POST['spieler'];
	$punkte = intval($_POST['punkte']);	
	$stmt->execute();
	
	// Verbindung explizit schließen
	mysqli_close($conn);
		
?>