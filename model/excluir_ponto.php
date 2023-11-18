<?php

session_start();
require_once 'database/conexao.php';



$point_id = mysqli_real_escape_string($connect, $_POST['point_id']);
	$delete_point = "DELETE FROM collection_points where id='$point_id' ";

	$del_point = mysqli_query($connect, $delete_point);


	if ($del_point) {


		header('Location: ../pontoscoleta.php?sucesso');
	} else {

		echo mysqli_error($connect);
	}

