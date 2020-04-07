<?php
session_start();
if (isset($_GET['submit']))
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html>
<body>
<form name="index.php" action="" method="get">
    <p>Username:<input type="text" name="login" value="<?php if (isset($_SESSION['login'])){ echo $_SESSION['login'];}?>"></p>
   <p>Password:<input type="text" name="passwd" value="<?php if (isset($_SESSION['passwd'])){echo $_SESSION['passwd'];} ?>"></p>
    <p><input type="submit" name="submit" value="OK"></p>
</form>
</body>
</html>
