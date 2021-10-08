<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="connect.css">
    <title>Se connecter</title>
</head>
<body>
<div id="formContainer">
    <form id="formConnect" action="./connexion.php" method="POST">
        <div class="inputBlock">
            <input type="email" id="inputUsername" name="user-mail" placeholder="Mail" required>
        </div>
        <div class="inputBlock">
            <input type="password" id="inputUserPass" name="user-pass" placeholder="Password" required>
        </div>
        <button id="buttonConnect" type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>