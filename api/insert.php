<?php
include_once "../plugins/try.php";

$type=$_POST['type'];
$title=new DB($type);
$date=[];
if(!empty($_FILES['img']['tmp_name'])){
    $fname=$_FILES['img']['name'];
    switch ($type) {
        case 'main':
            move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$fname);
            break;
        case 'mvim':
            move_uploaded_file($_FILES['img']['tmp_name'],"../img2/".$fname);
            break;
        case 'image':
            move_uploaded_file($_FILES['img']['tmp_name'],"../img3/".$fname);
            break;     
        default:
            # code...
            break;
    }
    $date['img']=$fname;
}
if(!empty($_POST['text'])){
    $date['text']=$_POST['text'];
}
if(!empty($_POST['name'])){
    $date['name']=$_POST['name'];
    $date['herf']=$_POST['herf'];
    $date['parent']=0;
}
if(!empty($_POST['acc'])){
    $date['acc']=$_POST['acc'];
    $date['pw']=$_POST['pw'];
}else{
    ($title=='main')?$date['see']=0:$date['see']=1;
}
$title->save($date);
to("../backend.php?do=$type");
?>