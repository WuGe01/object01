<?php
include_once "../plugins/try.php";
$type=$_POST['type'];
$title=new DB($type);
if(!empty($_POST['id']) && $type != 'bottom' && $type != 'total'){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $title->del($id);
        }else{
            $row=$title->find($id);
            if(!empty($_POST['text'])){
                $row['text']=$_POST['text'][$key];
            }
            if(!empty($_POST['name'])){
                $row['name']=$_POST['name'][$key];
                $row['herf']=$_POST['herf'][$key];
            }
            if($type =='main'){
                $row['see']=($_POST['see']==$id)?1:0;
            }else if(!empty($_POST['acc'])){
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            }else{
                $row['see']=(in_array($id,$_POST['see']))?1:0;
            }
            $title->save($row);
        }
    }
}else{
    $row=$title->find(1);
    if($type =='bottom'){
        $row['bottom']=$_POST['bottom'];
    }else{
        $row['total']=$_POST['total'];
    }
    $title->save($row);
}

to("../backend.php?do=$type");
?>