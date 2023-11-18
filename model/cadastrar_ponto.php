<?php

session_start();
require_once 'database/conexao.php';

$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$place_name = mysqli_real_escape_string($connect, $_POST['place_name']);
$opening_hours = mysqli_real_escape_string($connect, $_POST['opening_hours']);
$day_of_operation = mysqli_real_escape_string($connect, $_POST['day_of_operation']);
$type_of_collection = mysqli_real_escape_string($connect, $_POST['type_of_collection']);
$we_make_withdrawal = mysqli_real_escape_string($connect, $_POST['we_make_withdrawal']);
$street = mysqli_real_escape_string($connect, $_POST['street']);
$district = mysqli_real_escape_string($connect, $_POST['district']);
$city = mysqli_real_escape_string($connect, $_POST['city']);
$number = mysqli_real_escape_string($connect, $_POST['number']);
$state = mysqli_real_escape_string($connect, $_POST['state']);
$latitude = mysqli_real_escape_string($connect, $_POST['latitude']);
$longitude = mysqli_real_escape_string($connect, $_POST['longitude']);



$cadastro_ponto = "INSERT INTO collection_points(place_name, opening_hours,day_of_operation, type_of_collection,we_make_withdrawal,street,
	district,city,number,state,latitude,longitude,users_id,created_at) 
	values ('$place_name', '$opening_hours','$day_of_operation', '$type_of_collection','$we_make_withdrawal','$street',
	'$district','$city','$number','$state','$latitude','$longitude','$user_id',now())";

$cad_pf = mysqli_query($connect, $cadastro_ponto);



if ($cad_pf) {


	header('Location: ../pontoscoleta.php?sucesso');
} else {

	$_SESSION['cadastradoInfo'] = "<div class='alert alert-danger' role='alert'>Falha ao registrar no banco de dados! erro:</div>" . mysqli_error($connect);

	

	echo mysqli_error($connect);
}
