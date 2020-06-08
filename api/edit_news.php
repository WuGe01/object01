<?php
include_once "../plugins/try.php";
$news=new DB('b_news');
if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $news->del($id);
        }else{
            $row=$news->find($id);
            $row['text']=$_POST['text'][$key];
            $row['see']=(in_array($id,$_POST['see']))?1:0;
            $news->save($row);
        }
    }
}
to("../backend.php?do=news");
?>