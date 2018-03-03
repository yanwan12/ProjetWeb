<?php


require_once './init.php';


class user {

    private $options = [];
    private $session;


    public function __construct($session, $options = []){
        $this->options = array_merge($this->options, $options);
        $this->session = $session;
    }


    public static function connexion($mail, $pass){
        $user = new User();
        $statement = $user->queryList("SELECT * FROM user WHERE mail=? AND mdp=?", array($mail, $pass));
        $statement->fetch();
        if ($statement){
        return true;
        }
        return false;
    }

    
    public static function nouvuser($db, $nom, $pnom, $mail, $pass){
        $passcrypt = password_hash($pass, PASSWORD_BCRYPT);
        $token = App::str_random(60);
        $db->queryList("INSERT user SET nom = ?, prenom=?, mdp = ?, mail = ?, confirmation_token = ?",
        array($nom, $pnom, $passcrypt, $mail, $token));
        $user_id=$db->lastInsertId();
        mail($mail, 'Confirmation de votre compte', "Pour valider la création de votre compte merci de cliquer sur ce lien\n\nhttp://localhost/projetweb/iconfirm.php?id=$user_id&token=$token");
    }


    public function confirm($user_id, $token, $db){

        $user = $db->queryList("SELECT * FROM user WHERE id = $user_id")->fetch();

        if($user && $user->confirmation_token == $token ){
         
            $db->queryList("UPDATE user SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = $user_id");
            $this->session->write('auth',$user);
            return true;
        }

        return false;
    }


    public function restrict(){
        echo '<pre>'.print_r($this->session).'</pre>';
        if(!$this->session->read('auth')){
           $this->session->setFlash('danger', $this->options['restriction_msg']);
            header('Location: connex.php');
            exit();
        }
    }


    public function isConnected(){
        if(!$this->session->read('auth')){

            return false;
        }

        return $this->session->read('auth');

    }


    public function connect($user){
        $this->session->write('auth', $user);

    }


     public function connectFromCookie($db){
        if(isset($_COOKIE['remember']) && !$this->isConnected()){
            $remember_token = $_COOKIE['remember'];
            $parts = explode('==', $remember_token);
            $user_id = $parts[0];
            $user = $db->queryList('SELECT * FROM user WHERE id = ?', [$user_id])->fetch();
            if($user){
                $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
                if($expected == $remember_token){
                    $this->connect($user);
                    setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
                } else{
                    setcookie('remember', null, -1);
                }
            }else{
                setcookie('remember', null, -1);
            }
        }

    }


    public function login($db, $mail, $pass, $remember = false ){
        $user = $db->queryList('SELECT * FROM user WHERE mail = :mail AND confirmed_at IS NOT NULL', array('mail' => $mail))->fetch();
        if(password_verify($pass, $user->mdp)){
            $this->connect($user);
        if($remember){

            $this->remember($db, $user_id);
        }
            return $user;

        }else{

            return false;
        }
    }


    public function remember($db, $user_id){
        $remember_token = App::str_random(250);
        $db->queryList('UPDATE user SET remember_token = ? WHERE id = ?',[$remember_token, $user_id]);
        setcookie('remember', $user_id . '==' . $remember_token . sha1($user_id . 'ecomyanis'), time() + 60 * 60 * 24 * 7);
    }


    public function deco (){
        setcookie('remember', NULL, -1);
        $this->session->delete('auth');
    }

}