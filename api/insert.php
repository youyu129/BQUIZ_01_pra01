<?php

include_once "db.php";

$table=$_POST['table'];

$db=ucfirst($table);

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
    
}

unset($_POST['table']);
unset($_POST['pw2']);

$$db->save($_POST);

to("../admin.php?do=$table");

?>

<?php
// $table=title
// ucfirst($table)
// ucfirst(title)=>Title
// $db=Title
// $$db=${Title}
// $$db=$Title