<?php

class UserManager {

    public function connectUser(string $mail, string $password){

        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE mail = :mail");
        $request->bindValue(':mail', $mail);

        $result = $request->execute();
        if($result) {
            $user_data = $request->fetch();
            if($user_data) {
                if (password_verify($password, $user_data['password'])) {
                    $user = new User(
                        $user_data['id'],
                        $user_data['name'],
                        $user_data['mail'],
                        $password
                    );
                    return $user;
                }
            }
        }
        return false;
    }
}