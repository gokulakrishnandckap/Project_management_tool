<?php
        $conn['db'] = (new Database())->db;

   try{

    if(array_keys($_POST)[0] == 'Deleted_Datas')
    {

        $id= $_POST['Deleted_Datas'];

        $_SESSION['id'] =  $id;

        $_SESSION['btnName'] = "Un Deleted Datas";
        
        $statement = $conn['db']->query("SELECT * FROM task where delete_at IS NOT NULL AND projects_id = $id");

        $singleData = $statement->fetchAll();
        $_SESSION['single'] = $singleData;


        $state = $conn['db']->query("SELECT * FROM task where delete_at IS NULL AND projects_id = $id");
        $singlesData = $state->fetchAll();
        $count = count($singlesData);


    }
    elseif (array_keys($_POST)[0] == 'Un_Deleted_Datas') {
        $id= $_POST['Un_Deleted_Datas'];

        $_SESSION['id'] =  $id;

        $_SESSION['btnName'] = "Deleted Datas";

        $statement = $conn['db']->query("SELECT * FROM task where delete_at IS NULL AND projects_id = $id");
        $singleData = $statement->fetchAll();
        $_SESSION['single'] = $singleData ;

        $state = $conn['db']->query("SELECT * FROM task where delete_at IS NOT NULL AND projects_id = $id");
        $singlesData = $state->fetchAll();
        $count = count($singlesData);



    }
    else if(array_keys($_POST)[0] == 'list')
    {

 
            $id= $_POST['list'];
            $_SESSION['id'] =  $id;
            $_SESSION['btnName'] = "Deleted Datas";

        $statement = $conn['db']->query("SELECT * FROM task where delete_at IS NULL AND projects_id = $id");
        $singleData = $statement->fetchAll();
        $_SESSION['single'] = $singleData ;

        $state = $conn['db']->query("SELECT * FROM task where delete_at IS NOT NULL AND projects_id = $id");
        $singlesData = $state->fetchAll();
        $count = count($singlesData);


    }

    require "views/home.views.php";
}
catch(Expection $e)
{
    die($e->getMessage());
}


