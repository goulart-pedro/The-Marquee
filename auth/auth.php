<?php
if(!isset($POST['user_name'])) 
    header('Location=?page=404'); // security redirection
/*--------
    Login Page has to be refreshed for cookie to set
*/
require_once('../environment.php');
require_once('../Source/Database.php');
function handleLogin()
{
    [$name, $passwd] = getLoginInfo($_POST); 

    if (!areCredentialsValid($name, $passwd))
        return "no";

    setcookie("USER_SESSION", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
    return 'ok';
       
}

// dependency injection not working
function getLoginInfo($requisition)
{
    return [$_POST['user_name'], $_POST['user_password']];
}

function areCredentialsValid(string $username, string $password)
{
     /* Instanciando app para ter acesso
    ao banco de dados */
    $database = new Database($_ENV['DATABASE_NAME'], $_ENV['DATABASE_HOST'], $_ENV['DATABASE_USR'], $_ENV['DATABASE_PWD']);

    $user = $database->getUser($username);
    
    /* saindo se usuario nao existe */
    if(count($user) == 0) {
        return false;
    }
    return hash('sha256', $password) == $user['Passwd'];
}

echo handleLogin();
?>