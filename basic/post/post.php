<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/1
 * Time: 22:10
 */

if($_POST['a']&&$_POST['b'])
{
   echo "result=:".$_POST['a']+$_POST['b'];
}else{
    echo "a=:".$_POST['a']."   b=:".$_POST['b'];
}

