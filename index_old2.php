<?php
    //try {
        //$con=new \PDO("mysql:host=localhost:8080;dbname=eletrolix;charset=utf8", "", "");

        //if($con):
            //echo "ok";
        //endif;

    //} catch (\PDOException $error) {
        //echo $error->getMessage();
    //}

    $servername = "localhost";
$username = "root";
$password = "";


$connect = mysqli_connect($servername, $username, $password);
if($connect){
    echo "ok";
} else if(mysqli_connect_error()){
    echo "Falha na conexão" .mysqli_connect_error();
}