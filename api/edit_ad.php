<?php
include_once "../plugins/try.php";
$ad=new DB('b_ad');
if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $ad->del($id);
        }else{
            $row=$ad->find($id);
            $row['text']=$_POST['text'][$key];
            if(in_array($id,$_POST['see'])){
                $row['see']=1;
            }else{
                $row['see']=0;
            }
            $ad->save($row);
        }
    }
}
to("../backend.php?do=ad");
?>