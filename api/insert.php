<?php

include_once "db.php";

// $_POST['img'];
// $_POST['text'];
// $_POST['sh'];

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
    
}

$Title->save($_POST);

to("../admin.php?do=title");

?>