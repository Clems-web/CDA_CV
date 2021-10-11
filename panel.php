<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Content.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ContentManager.php';

$manager = new ContentManager();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PanelAdmin</title>
</head>
<body>

    <h1>Bienvenue sur le Panel Admin</h1>
    <a href="./index.php">Retour sur la page d'accueil</a>
    <h2>Sections</h2>
    <fieldset>
        <legend>Changer le contenu d'une Section</legend>
        <form action="update.php" method="POST">
            <label for="message"></label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <select name="sectionSelect" id="sectionSelecy">
                <option value="1">Degrees</option>
                <option value="2">Hobbies</option>
                <option value="3">Experiences</option>
            </select>
            <button type="submit">Modifier</button>
        </form>
    </fieldset>
    <h2>Li</h2>
    <fieldset>
        <legend>Changer le contenu d'un Li</legend>
        <form action="updateLi.php" method="POST">
            <label for="message"></label>
            <input type="text" name="message" id="message">
            <select name="sectionSelect" id="sectionSelect">
                <option value="1"><?= $manager->getContentli()[0]->getContent() ?></option>
                <option value="2"><?= $manager->getContentli()[1]->getContent() ?></option>
                <option value="3"><?= $manager->getContentli()[2]->getContent() ?></option>
            </select>
            <button type="submit">Modifier</button>
        </form>
    </fieldset>

</body>
</html>
