<?php
/**
 * Created by PhpStorm.
 * User: i
 * Date: 2018/1/4
 * Time: 1:29
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);


require '../vendor/autoload.php';
use think\Db;

Db::setConfig(require '../config/database.php');
$db = Db::name('user')->find();
echo "<pre>";
print_r($db);
die();