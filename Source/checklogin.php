<?php

/*--------
    Login Page has to be refreshed for cookie to set
*/

function handleLogin()
{
    [$name, $passwd] = getLoginInfo(); 
    if (credentialsAreValid($name, $passwd))
    {
       setcookie("USER_SESSION", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
       header("Location: /The-Marquee/?page=home"); 
    }
}

function getLoginInfo()
{
    return [$_POST['user_name'], $_POST['user_password']];
}

function credentialsAreValid(string $username, string $password)
{
    return $username == 'Adm' && $password == '123';
}

handleLogin();
?>