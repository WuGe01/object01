<?php
include_once "../plugins/try.php";
$bottom=new DB('bottom');
$row=$bottom->find(1);
$row['bottom']=$_POST['bottom'];
$bottom->save($row);

to("../backend.php?do=bottom");
?>