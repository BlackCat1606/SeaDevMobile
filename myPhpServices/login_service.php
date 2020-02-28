<?php
    require "service.php";
	$userName= $_POST["userName"];
	$userPass= $_POST["pwd"];


/*	$userName= "k_amine";
	$userPass= "123456789";

	// prepare sql and bind parameters
    $stmt = $conn->prepare("SElECT * 
    	FROM xx 
    	WHERE  nom = :nom AND pwd = :pwd ");
    $stmt->bindParam(':nom', $user_name);
    $stmt->bindParam(':pwd', $user_pass);

    $stmt->execute();

    $count = $stmt->rowCount();

    if($count > 0){
    	echo "login ";
    }*/


    $stmt = $conn->prepare("SElECT * 
                            FROM patient 
                            WHERE  idpatient = :nom AND passwd = :pwd ");

    $stmt->bindParam(':nom', $userName);
    $stmt->bindParam(':pwd', $userPass);

    $stmt->execute();


    //$id=$stmt->bindColumn();
    $count = $stmt->rowCount();


    $res=$stmt->fetch(PDO::FETCH_ASSOC);


    if($count > 0){
    	echo "login:".$res['idpatient'];
    }

?>