<?php
include_once "../plugins/try.php";
$image=new DB('b_image');
if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $image->del($id);
        }else{
            $row=$image->find($id);
            $row['see']=(in_array($id,$_POST['see']))?1:0;
            $image->save($row);
        }
    }
}
to("../backend.php?do=image");
?>