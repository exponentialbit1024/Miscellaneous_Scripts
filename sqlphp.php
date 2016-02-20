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

	$conn = new mysqli('127.12.108.130:3306', 'adminZsLC8b2', 'hFZKSTM-FKHC', 'rapidqs');
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
<html>
<head>
	<title> Your results</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
<body onLoad="init()">
	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width:8%">
    			8%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> SENIOR MANAGEMENT COMMITMENT </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t1.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> There is a senior management commitment to prioritise shrinkage, oversee an action plan, allocate resources and monitor results. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice1*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width:17%">
    			17%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> ORGANISATIONAL OWNERSHIP </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t2.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> All parts of the business recognise the value of prioritising shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice2*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
    			25%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> EMBEDDING LOSS PREVENTION </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t3.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> All parts of the business are taking action to address the problem of shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice3*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<!-- Question 4 -->
	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%">
    			33%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> DATA MANAGEMENT </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t4.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> The company has available actionable, reliable and timely data on shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice4*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width:42%">
    			42%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> OPERATIONAL EXCELLENCE </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t5.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> All parts of the company recognise the link between poor process adherance and shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice5*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
    			50%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> INNOVATION AND EXPERIMENTATION </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t6.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> The company is willing to innovate and experiment to deal with the problem of shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice6*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width:58%">
    			58%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> COLLABORATION </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t7.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> There is regular collaboration between Loss Prevention Department and third party organisations (such as police, manufacturers, security providers). </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice7*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%">
    			67%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> PRIORITISING PEOPLE </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t8.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> The company has developed a strong multi-functional team to deal with shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice8*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
    			75%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> LOSS PREVENTION LEADERSHIP </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t9.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> There is clear and strong leadership in place to effectively manage shrinkage. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice9*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width:83%">
    			83%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> COMMUNICATING SHRINKAGE </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t10.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> The issue of shrinkage is clearly and regularly communicated across the organisation. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice10*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width:92%">
    			92%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> STORE MANAGEMENT RESPONSIBILITY </h4>
	 					</td>
	 					<tr>
	 					</tr>
	 					<td>
	 						<!-- <img class="tableImage" src="css/images/t11.png"/> -->
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> Store management and associates are given the necessary data, tools and training to enable them to deal with shrinkage effectively. </h5>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($choice11*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>

	<div class="image2 container">
	 	<div class="jumbotron">
	 		<div class="progress">
  				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
    			100%
  				</div>
			</div>
	 	<div class="form-group">
	 		<table class="table table-striped">
	 			<tbody>
	 				<tr>
	 					<td>
	 						<h4> AGGREGATE PERCENTAGE </h4>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<h5> Aggregate Percentage: </h5>
	 					</td>
	 					<tr>
	 					</tr>
	 				</tr>
	 				<tr>
	 					<td>
	 						<input type="text" placeholder="<?php echo((round($avg*100/3))."%"); ?>" disabled></input>
	 					</td>
	 				</tr>
	 				<tr>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
	</div>
</body>
</html>