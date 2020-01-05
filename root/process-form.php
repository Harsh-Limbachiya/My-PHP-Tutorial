<!DOCTYPE html>
<html lang="en>
<head>
  <title>Contact form</title>
  <meta charset="UTF-8">
</head>
<body>
  <h2>Thank You</h2>
  <p> This is the Information you submitted. </p>
  <ol>
    <li><em>Name :</em><?php echo $_POST["name"] ?></li>    
    <li><em>E-mail :</em><?php echo $_POST["email"] ?></li>
    <li><em>Subject :</em><?php echo $_POST["subject"] ?></li>
    <li><em>Message :</em><?php echo $_POST["message"] ?></li>
  </ol>
</body>
</html>