<?php
function verification($path)
{
if(!$_SESSION['id']){
header('Location: pages/login.php' . $path);
exit;

}
}
?>