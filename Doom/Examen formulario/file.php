<?php
	$conectar= mysqli_connect('localhost','root','','ajaxbd');

    $email = $_POST["email"];
    $password = $_POST["password"];
    $year = $_POST["year"];
    

    if(isset($email) && $email != "" &&  isset($password) && $password != "" && isset($year) && $year != "" ){
    	 $insetar = "INSERT INTO usuario VALUES ('','$email','$password','$year')";
    	echo 1;

    }else{
    	echo 2;
    }
    

    mysqli_query($conectar,$insetar);

?>