<?php
include_once "../plugins/try.php";
$total=new DB('total');
$row=$total->find(1);
$row['total']=$_POST['total'];
$total->save($row);

to("../backend.php?do=total");
?>