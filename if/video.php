<?php
if($_GET['lx']=="video"){
$content = file_get_contents("http://api.mhycloud.fun:81/api/dy");
$json = json_decode($content,true);
header("Location: {$json['video_url']}");}
   if($_GET['lx']!="video"){
   $content = file_get_contents("http://api.mhycloud.fun:81/api/cos");
$json = json_decode($content,true);
header("Location: {$json['png_url']}");}