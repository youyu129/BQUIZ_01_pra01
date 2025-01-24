<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);
        }else{
            $row=$$db->find($id);
            $row['text']=$_POST['text'][$idx];
            $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            $$db->save($row);
        }
    }
}
to("../admin.php?do=$table")
?>