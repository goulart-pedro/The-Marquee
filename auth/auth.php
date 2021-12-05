<?php
if(!isset($POST['user_name'])) 
    header('Location=?page=404'); // security redirection
/*--------
    Login Page has to be refreshed for cookie to set
*/
require_once('../environment.php');
require_once('../Source/Database.php');


class AuthHandler {

    public function __construct() {
        /* Instanciando database para ter acesso
        ao banco de dados */
        $this->database = new Database($_ENV['DATABASE_NAME'], $_ENV['DATABASE_HOST'], $_ENV['DATABASE_USR'], $_ENV['DATABASE_PWD']); 
    }

    public function handleLogin() {
        [$email, $passwd] = $this->getLoginInfo(); 

        $user = $this->database->getUser($email);
    
        /* saindo se usuario nao existe */
        if(count($user) == 0)
            return 'no';
        
        if (!$this->verifyCredentials($email, $passwd, $user['Passwd']))
            return "no";

        setcookie("USER_SESSION", $user['Name'], time() + (86400 * 30), "/"); // 86400 = 1 day
        return 'ok';
    }

    private function verifyCredentials(string $email, string $inputPassword, string $hashedPassword) {
       
        return hash('sha256', $inputPassword) == $hashedPassword;
    }

    private function getLoginInfo() {
        return [$_POST['user_name'], $_POST['user_password']];
    }
}

$auth = new AuthHandler();
echo $auth->handleLogin();
?>