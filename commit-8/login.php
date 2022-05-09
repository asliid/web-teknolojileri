<?php
include("kullanici.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass))
{
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Refresh:0; url=index.html");
$mesaj       ="<script>alert('Hosgeldin G211210061')<script>";
echo $mesaj;
}
else
{
$mesaj       ="<script>alert('Kullancı Adı veya Şifre Yanlış. Login sayfasına yönlendiriliyorsunuz.')<script>";
echo $mesaj;
header("Refresh: 0; url=giriş.html");
}
ob_end_flush();
?>