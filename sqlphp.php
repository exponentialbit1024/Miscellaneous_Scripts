<?php
if(isset($_POST['choice1']) && isset($_POST['choice2'])  
	&& isset($_POST['choice3']) && isset($_POST['choice4'])  
	&& isset($_POST['choice5']) && isset($_POST['choice6'])  
	&& isset($_POST['choice7']) && isset($_POST['choice8'])  
	&& isset($_POST['choice9']) && isset($_POST['choice10']) 
	&& isset($_POST['choice11']) && isset($_POST['email']) 
	&& !empty($_POST['email']) && isset($_POST['title']) 
	&& !empty($_POST['title']))
{
	$choice1 = $_POST['choice1'];
	$choice2 = $_POST['choice2'];
	$choice3 = $_POST['choice3'];
	$choice4 = $_POST['choice4'];
	$choice5 = $_POST['choice5'];
	$choice6 = $_POST['choice6'];
	$choice7 = $_POST['choice7'];
	$choice8 = $_POST['choice8'];
	$choice9 = $_POST['choice9'];
	$choice10 = $_POST['choice10'];
	$choice11 = $_POST['choice11'];
	$email = $_POST['email'];
	$title = $_POST['title'];

	$sum = (int)$choice1 + (int)$choice2 + (int)$choice3 + (int)$choice4 + (int)$choice5 + (int)$choice6 + (int)$choice7 + (int)$choice8 + (int)$choice9 + (int)$choice10 + (int)$choice11;
	$avg = round($sum/11);

	$emailf = "\"".$email."\"";
	$titlef = "\"".$title."\"";

	$conn = new mysqli('IP:PORT_OF_DB', 'username', 'password', 'dbname');
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	$sql="INSERT INTO rapid (Email, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Title)
	VALUES ($emailf, $choice1, $choice2, $choice3, $choice4, $choice5, $choice6, $choice7, $choice8, $choice9, $choice10, $choice11, $titlef)";
	if ($conn->query($sql) === TRUE) {
	    echo "<h1> Thank You! </h1>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

else{
	echo "You forgot to add your title and/or email! Please go back and re-enter those details and submit the form again.";
}



sleep(2);
// header("Location: results.html");
?>