<?php
include('../soap/auth.php');

// access the client
$users = $client->getUsers();

foreach($users as $user){
	echo("ID: $user->X1  USER: $user->X2  PASSWORD: $user->X3 <br>");
}
?>