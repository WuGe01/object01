<?php
include_once "../plugins/try.php";
$mvim=new DB('b_mvim');
if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $mvim->del($id);
        }else{
            $row=$mvim->find($id);
            $row['see']=(in_array($id,$_POST['see']))?1:0;
            $mvim->save($row);
        }
    }
}
to("../backend.php?do=mvim");
?>