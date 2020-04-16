<?php
function auth($login, $passwd)
{
    if (!$login || !$passwd)
        return false;
    $accounts = unserialize(file_get_contents("../private/passwd"));
    if ($accounts)
    {
        foreach ($accounts as $key => $user)
        {
            if ($user['login'] === $login && $user['passwd'] === hash("whirlpool", $passwd))
                return true;
        }
    }
    return false;
}
?>
