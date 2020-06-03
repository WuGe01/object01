<?php
include_once "../plugins/try.php";
$main=new DB('b_main');
if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $main->del($id);
        }else{
            $row=$main->find($id);
            $row['text']=$_POST['text'][$key];
            $row['see']=($_POST['see']==$id)?1:0;
            $main->save($row);
        }
    }
}
to("../backend.php?do=main");
?>