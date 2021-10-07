<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Content.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ContentManager.php';

$manager = new ContentManager();

$result = $manager->getContentli();

if ($result) {

    $tab = [];

    foreach ($result as $licontent) {
        $tab[] = [
            'li' => $licontent->getContent(),
        ];
    }

    echo json_encode($tab);
}