<?php

/*--------
    Login Page has to be refreshed for cookie to set
*/

function handleLogin()
{
    [$name, $passwd] = getLoginInfo($_POST); 
    if (credentialsAreValid($name, $passwd))
    {
        setcookie("USER_SESSION", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
        return ('login realizado com sucesso');
    }
        return "Credenciais Inválidas";
}

function getLoginInfo(array $requisition)
{
    return [requisition['user_name'], requisition['user_password']];
}

function credentialsAreValid(string $username, string $password)
{
    return $username == 'Adm' && $password == '123';
}

echo handleLogin();
?>