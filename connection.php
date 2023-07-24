<?php

class Database
{
    public $db;
    public function __construct()
    {
        try
        {
           $this->db = new PDO
            (
                'mysql:host=127.0.0.1;dbname=project_management_tool',
                'admin',
                'welcome'
            );

        }
        catch(PDOException $e)
        {
            die("connection failed");
        }

    }
}




?>