<?php
require "service.php";

$userId = $_POST["id"];
$typePrelevement = $_POST["typePrelevement"];
$resultat = $_POST["resultat"];


$stmt = $conn->prepare("INSERT INTO prelevement (idpatient,resultat,type,date)
                          VALUES (:id,:reslt,:typePrelevement,NOW())");

$stmt->bindParam(':reslt', $resultat);
$stmt->bindParam(':id', $userId);
$stmt->bindParam(':typePrelevement', $typePrelevement);

if (!$stmt->execute())
    echo "prblm";
else echo "hooooooooo";

?>