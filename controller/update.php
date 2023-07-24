<?php

                $conn['db'] = (new Database())->db;

        try{
            $id = $_POST['update'];

                    
            $statement = $conn['db']->query("UPDATE task SET delete_at = now()WHERE id = $id");
            $statement->execute();

            header("location:/");

        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }

           
