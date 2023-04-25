<?php 

require_once "../admin/config.php"; 

$sql = "INSERT INTO user(emailavis,texteavis,usernameavis) VALUES(:emailavis,:texteavis,:usernameavis)";

$pre = $pdo->prepare($sql);

$pre->bindParam("emailavis", htmlspecialchars($_POST['emailavis'], ENT_QUOTES, 'UTF-8'));
$pre->bindParam("texteavis", htmlspecialchars($_POST['texteavis'], ENT_QUOTES, 'UTF-8'));
$pre->bindParam("usernameavis", htmlspecialchars($_POST['usernameavis'], ENT_QUOTES, 'UTF-8'));

$pre->execute();

header('Location:../html/avis.php');
?>
