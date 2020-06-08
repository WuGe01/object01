<?php
include_once "../plugins/try.php";

$title=new DB('b_main');
$row=$title->find($_POST['id']);
if(!empty($_FILES['img']['tmp_name'])){
    $fname=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$fname);
    $row['img']=$fname;
    $title->save($row);
}

to("../backend.php?do=main");
?>