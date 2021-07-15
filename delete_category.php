<?php
include_once('backend/database.php');
if(isset($_GET['id']))
{
    $sql = "DELETE FROM post_category WHERE id=".$_GET['id'];
    $link->query($sql);
    // echo ($_GET['Id']);
    header("location: allcategory.php");
}
?>