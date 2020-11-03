<?php
include_once('backend/database.php');
if(isset($_GET['id']))
{
    $sql = "DELETE FROM users WHERE id=".$_GET['id'];
    $link->query($sql);
    header("location: users.php");
}
?>
