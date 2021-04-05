<?php 
include_once 'DbConnection.php';
include_once 'registerProcess.php';


$con = new DBConnector();
$pdo = $con ->connectToDB();

$event = $_POST['event'];

if($event == 'Register')
{
		$Firstname = $_POST["fname"];
		$Lastname = $_POST["lname"];
		$Username = $_POST["Uname"];
		$EmailorContact = $_POST["mail"];
		$Address = $_POST["address"];
		$password = $_POST["pass"];
		$user = new User($Firstname, $Lastname,$Username, $password);
		$user->setEmailorContact($emailorContact);
		$user->setAddress($res);
		echo $user ->register($pdo);
}
else
{
		$Username = $_POST["Uname"];
		$password = $_POST["pass"];
		$user = new User($Username, $password);
		echo $user->login($pdo);
}

?>