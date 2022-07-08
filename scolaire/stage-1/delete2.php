<?php

$servname = "localhost"; $dbname = "asterisk"; $user = "root"; $pass = "";
$userId = $_GET['userId'];

?>
<html> 
<body> 
<?php 

    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user_id = $userId;
    $req = $dbco->prepare("DELETE FROM phone_book WHERE id >= :user_id");
    $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $req->execute();
    header("Location: phonebook.php?userId=<?= $customer['id'] ?>");
    
?>
</body>
</html>