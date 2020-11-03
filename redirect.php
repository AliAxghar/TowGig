<?php
// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $url = var_dump(parse_url($actual_link));
// $url = basename($actual_link)
// if ($actual_link == "http://localhost/towgig/login") {
header("location: login.php");
// }
// if($url == "login"){
//     header("location: login.php");
// } else{
//     echo "Something went wrong. Please try again later.";
// }
// if ($url == $login) {
//     header("location: login.php");
// } elseif ($url == $admin) {
//     header("location: login.php");
// }
?>