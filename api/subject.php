<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 17:35
 */
$url =  'https://api.douban.com/v2/movie/subject/'.$_GET['id'];
echo file_get_contents($url);
