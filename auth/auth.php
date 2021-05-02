<?php
if(!isset($POST['user_name'])) 
    header('Location=?page=404'); // security redirection
/*--------
    Login Page has to be refreshed for cookie to set
*/

function handleLogin()
{
    [$name, $passwd] = getLoginInfo($_POST); 

    if (!credentialsAreValid($name, $passwd))
        return "no";

    setcookie("USER_SESSION", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
    return 'ok';
       
}

// dependency injection not working
function getLoginInfo($requisition)
{
    return [$_POST['user_name'], $_POST['user_password']];
}

function credentialsAreValid(string $username, string $password)
{
    return $username == 'Adm' && $password == '123';
}

echo handleLogin();
?>