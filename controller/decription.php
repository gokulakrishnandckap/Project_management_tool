<?php

    // echo "goku";
 

    $conn['db'] = (new Database())->db;

        try{
            $id = $_POST['edit'];

                
            $statement = $conn['db']->query("SELECT * FROM task where id = $id");
             $singleDatum = $statement->fetchAll();

                 require "views/views.decription.php";
        }
        catch(Expection $e)
        {
        die($e->getMessage());
        }
