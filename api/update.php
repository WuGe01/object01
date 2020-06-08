<?php
include_once "../plugins/try.php";
$type=$_POST['type'];
$title=new DB($type);
$row=$title->find($_POST['id']);
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
    $row['img']=$fname;
    $title->save($row);
}
to("../backend.php?do=$type");
?>