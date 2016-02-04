<?php


if (isset($_POST['save'])) {
  $vname = test_input($_POST["vname"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);

    $pdo = new PDO('mysql:host=localhost;dbname=rentnerpraktikum', 'root', '');

    $statement = $pdo->prepare("INSERT INTO kontaktdaten (prename, email, comment) VALUES (?, ?, ?)");
    $statement->execute(array("$vname", "$email", "$comment" ));
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<script language="javascript" type="text/javascript"> document.location="saved.html"; </script>
