<?php
include_once "../plugins/try.php";

$title=new DB('b_main');

if(!empty($_FILES['img']['tmp_name'])){
    $fname=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$fname);
}
$text=$_POST['text'];
$see=0;

$title->save(['text'=>$text,'img'=>$fname,'see'=>$see]);

to("../backend.php?do=main");
?>