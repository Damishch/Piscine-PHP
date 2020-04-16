<?php
if ($_POST['submit'] !== 'OK' || $_POST['passwd'] === "" || $_POST['login'] === "")
{
    echo "ERROR\n";
    return;
}
if (!file_exists("../private"))
    mkdir("../private");
$accounts = array();
if (file_exists("../private/passwd"))
{
    $accounts = unserialize(file_get_contents('../private/passwd'));
    foreach ($accounts as $user)
    {
        if ($user['login'] === $_POST['login'])
        {
            echo "ERROR\n";
            return;
        }
    }
}
$user['login'] = $_POST['login'];
$user['passwd'] = hash("whirlpool", $_POST['passwd']);
$accounts[] = $user;
file_put_contents("../private/passwd", serialize($accounts));
echo "OK\n";
?>