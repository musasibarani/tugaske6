<?php require_once("../includes/db.connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
if(isset($_POST['submit'])){
	//process the form
	
	$menu_name = mysql_prep($POST["menu_name"]);
	$position = (int) $_POST["position"];
	$visible = (int) $_POST["visible"];
	
	$query = "INSERT INTO subjects (";
	$query .= " menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= " '{$menu_name}', {$position}, {$visible}";
	$query .= ")";
	
	result = mysqli_query($connection, $query);
	
	if($result){
		//Success
		$message = "Subject created.";
		redirect_to("manage_content.php");
	}
	
} else {
	//failure
	//$message = "Subject creation failed";
	redirect_to("new_subject.php");
}
?>

<?php
	if(isset($connection)){mysqli_close($connection);}
?>