<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/1
 * Time: 21:58
 */
$name = $_GET['name'];
$pwd= $_GET['password'];
if($name!=null&&strlen($name)>0&&$pwd!=null&&strlen($pwd)>0)

{
    echo "name=:".$name."   "."password=:".$pwd;
}else
    {
        echo "用户名或者密码不能为空！";
    }