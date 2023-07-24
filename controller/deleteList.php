<?php
        $conn['db'] = (new Database())->db;

   try{
    $id= $_POST['deleteList'];
    $_SESSION['id'] =  $id;

    // var_dump(array_keys($_POST));
    if(array_keys($_POST) =="deleteList")
    {
        $statement = $conn['db']->query("SELECT * FROM task where delete_at IS NULL AND projects_id = $id");
        $singleData = $statement->fetchAll();

    }
    // var_dump($id);
            

    // var_dump($deleteData);
    //   var_dump($deleteData);
    // var_dump($singleData);
    // return $singleData;
    header("location:/");
    // require "views/views.delete.php";
}
catch(Expection $e)
{
    die($e->getMessage());
}
// header("location:/");