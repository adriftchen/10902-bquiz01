<?php
include "../base.php";
print_r($_POST);
$table=$_POST['table'];
$db=new DB($table);

foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){

        $db->del($id);

    }else{

        $row=$db->find($id);
        

        switch($table){
            case "tilte":

                $row['sh']=($id==$_POST['sh'])?1:0;
            break;
            case "ad":
            case "mvim":
            case "image":
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "total":
                $row['total']=$_POST['total'];
            break;
            case "bottom":
                $row['bottom']=$_POST['bottom'];
            break;


        }

        if(!empty($_POST['text'])){

            $row['text']=$_POST['text'][$key];
        }

        $db->save($row);

    }


}

to("../backend.php?do=$table");
?>
