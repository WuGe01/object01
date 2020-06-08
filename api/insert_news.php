<?php
include_once "../plugins/try.php";

$title=new DB('b_news');
$see=0;
$text=$_POST['text'];
$title->save(['text'=>$text,'see'=>$see]);
to("../backend.php?do=news");
?>