<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Content.php';

class ContentManager {

    public function getContentDd(): array {
        $content = [];
        $request = DB::getInstance()->prepare("SELECT content FROM dd");

        $result = $request->execute();

        if ($result) {
            $data = $request->fetchAll();

            foreach($data as $content_data) {
                $content[] = new Content(
                    $content_data['content']
                );
            }
        }
        return $content;
    }

    public function getContentDt(): array {
        $content = [];
        $request = DB::getInstance()->prepare("SELECT content FROM dt");

        $result = $request->execute();

        if ($result) {
            $data = $request->fetchAll();

            foreach($data as $content_data) {
                $content[] = new Content(
                    $content_data['content']
                );
            }
        }
        return $content;
    }

    public function getContentli(): array {
        $content = [];
        $request = DB::getInstance()->prepare("
            SELECT content FROM li INNER JOIN ul u on li.ul_fk = u.id;
            ");

        $result = $request->execute();

        if ($result) {
            $data = $request->fetchAll();

            foreach($data as $content_data) {
                $content[] = new Content(
                    $content_data['content']
                );
            }
        }
        return $content;
    }
}