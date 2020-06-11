<?php
include_once "../plugins/try.php";
$type=$_POST['type'];
$title=new DB($type);

if(!empty($_POST['id'])){
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $title->del($id);
    }else{
        $row=$title->find($id);
        $row['name']=$_POST['name'][$key];
        $row['herf']=$_POST['herf'][$key];       
        $title->save($row);
    }
}
}
$parent=$_POST['parent'];

if(!empty($_POST['nameAdd'])){
    foreach($_POST['nameAdd'] as $key => $name){
        $new=[];
        $new['name']=$name;
        $new['herf']=$_POST['herfAdd'][$key];
        $new['see']=1;
        $new['parent']=$parent;
        $title->save($new);
    }
}

to("../backend.php?do=$type");
?>