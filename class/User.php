<?php


require_once './init.php';


class user {


    private $data;
    private $errors = [];


    public function __construct($data){
        $this->data = $data;
    }


    private function getField($field){
        if (!isset($this->data[$field])) {
            return null;
        }
        return $this->data[$field];
    }
   

    public static function getUser($mail, $pass){
        $user = new User();
        $statement = $user->queryList("SELECT * FROM user WHERE mail=? AND mdp=?", array($mail, $pass));
        $statement->fetch();
        if ($statement){
        return true;
        }
        return false;
    }

    
    public function isUniq($field, $db, $errormsg){
        $req = $db->queryList("SELECT id from user WHERE $field = ?", [$this->getField($field)])->fetch();
        if ($req){
            $this->errors[$field] = $errormsg;
        }
    }

    
    public static function nouvuser($nom, $pnom, $mail, $pass, $db){
        $passcrypt = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $token = App::str_random(60);
        $db->queryList("INSERT user SET nom = ?, prenom=?, mdp = ?, mail = ?, confirmation_token = ?",
        array($nom, $pnom, $passcrypt, $mail, $token));
        $user_id=$db->lastInsertId();
        mail($mail, 'Confirmation de votre compte', "Pour valider la création de votre compte merci de cliquer sur ce lien\n\nhttp://localhost/projetweb/iconfirm.php?id=$user_id&token=$token");
    }


    public function isValid(){
        
       return (empty($this->errors));
    }


    public function getErrors(){
        return $this->errors;
    }
}