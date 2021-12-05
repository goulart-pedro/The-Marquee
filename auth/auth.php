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
        [$name, $passwd] = $this->getLoginInfo(); 

        if (!$this->verifyCredentials($name, $passwd))
            return "no";

        setcookie("USER_SESSION", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
        return 'ok';
    }

    public function verifyCredentials(string $username, string $password) {
        $user = $this->database->getUser($username);
    
        /* saindo se usuario nao existe */
        if(count($user) == 0) {
            return false;
        }
        return hash('sha256', $password) == $user['Passwd'];
    }

    public function getLoginInfo() {
        return [$_POST['user_name'], $_POST['user_password']];
    }
}

$auth = new AuthHandler();
echo $auth->handleLogin();
?>