<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    error_reporting(0);
    require_once 'config.php';
    require_once 'database.php';
    require_once 'model/model.php';
    require_once 'user.php';
    $db=new database();
    $model=new model($db);
    $user=new user($model);
    if(isset($_GET['c'])&&isset($_GET['v']))
    {
        $c=$_GET['c'];
        $v=$_GET['v'];
        if(file_exists("controler/{$c}Controler.php")&& file_exists("view/{$v}View.php"))
        {
            require_once "controler/{$c}Controler.php";
            $cname="{$c}Controler";
            $controler=new $cname($model);
            require_once "layout.php";
        }
        else
        {
            echo 'error';
        }
    }
    else if($_SERVER['PHP_SELF']=='/mvc/index.php')
    {
        require_once "controler/homeControler.php";
        $c='home';
        $v='home';
        $cname="{$c}Controler";
        $controler=new $cname($model);
        require_once "layout.php";
    }
    else
    {
        echo 'error';
    }