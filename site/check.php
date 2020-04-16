<?php
// Скрипт проверки

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "6503998", "login");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);


    if(($userdata['user_hash'] === $_COOKIE['hash']) or ($userdata['user_id'] === $_COOKIE['id'])
        or (($userdata['user_ip'] === $_SERVER['REMOTE_ADDR']))){
        print "Привет, ".$userdata['user_login'];
    }
}
else
{
    print "Включите куки";
}
?>