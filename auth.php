<?php
    ob_start();
    if(isset($_SERVER["PHP_AUTH_USER"]) && $_SERVER['PHP_AUTH_USER']=="admin" && $_SERVER['PHP_AUTH_PW']=="@pass1234@"){

        $redirect="";
        $arr=explode("=",$_GET["red"]);
        if(count($arr)==2)
                $redirect=$arr[1];
        if(strlen(trim($redirect))==0)
                $redirect="/wp-login.php";
        if(!isset($_COOKIE["admin_authenticated"])){
         setcookie("admin_authenticated","yes",0,"/");
         header("Location: ".$redirect);
        }else{
         header("Location: ".$redirect);
        }
    }else{
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Text to send if user hits Cancel button';
        exit;
     }

