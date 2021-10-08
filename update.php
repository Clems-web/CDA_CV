<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Content.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ContentManager.php';

if ($_SESSION['user']) {
    $db = new DB();

    if (isset($_POST['message']) && isset($_POST['sectionSelect'])) {
        $content = $db->cleanInput($_POST['message']);
        $id = $db->cleanInput($_POST['sectionSelect']);

        $request = new ContentManager();
        $request->updateContentDd($content, $id);
    }
    header('Location: ../panel.php');
}

else {
    echo "T'as pas les droits FDP (Fils de <a href='https://fr.wikipedia.org/wiki/P%C3%A9lobate_brun'>Pélobate brun</a>)";
}


