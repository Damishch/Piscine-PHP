<?php
if ($_POST['submit'] !== 'OK' || $_POST['login'] === "" || $_POST['oldpw'] === "" || $_POST['newpw'] === "")
{
    echo "ERROR\n";
    return;
}
$accounts = unserialize(file_get_contents("../private/passwd"));
$oldpw = hash('whirlpool', $_POST['oldpw']);
if ($accounts)
{
    foreach ($accounts as $key => $user)
    {
        if ($user['login'] === $_POST['login'] && $user['passwd'] === hash("whirlpool", $_POST['oldpw']))
        {
            $user['passwd'] = hash("whirlpool", $_POST['newpw']);
            file_put_contents("../private/passwd", serialize($accounts));
            echo "OK\n";
            return;
        }
        else
            echo "ERROR\n";
    }
}
else
    echo "ERROR\n";
?>