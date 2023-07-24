<?php

$conn['db'] = (new Database())->db;
    


    try{
        if(isset($_POST['project_name'])){
                $name = $_POST['project_name'];
                $type= $_POST['projects'];
                // var_dump($type);
                // $image = $_FILES;
                $uploadFolder = 'images/';
                $statement = $conn['db']->prepare("INSERT into projects(name) values('$name')");
                $statement->execute();
                $values = $conn['db']->prepare("SELECT id FROM projects where name = '$name'");
                $values->execute();
                $data = $values->fetchAll();
           $id = $data[0]['id'];


        foreach ($_FILES['files']['tmp_name'] as $key => $image) {
            $imageTmpName = $_FILES['files']['tmp_name'][$key];

            $imageName = $_FILES['files']['name'][$key];


            $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);


        //    var_dump($id);
        //    var_dump($uploadFolder.$imageName);
        //    var_dump($type);
           $imagePath = $conn['db']->prepare("INSERT into images(image_path,model_id,model_name) values('$uploadFolder$imageName',$id,'$type')");
           $imagePath->execute();
        }
                // var_dump($image);
            // $statement = $conn['db']->prepare("INSERT into projects(name) values('$name')");
            // $statement->execute();

            // header("location:/");
        }
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }



    try{

            
        $values = $conn['db']->prepare("SELECT * FROM projects");
        $values->execute();
        $data = $values->fetchAll();
        // $_SESSION['id'] = $data[0]['id'];
      
        return $data;
            
    //     $values = $conn['db']->prepare("SELECT * FROM projects");
    //     $values->execute();
    //     $TotalValues = $values->fetchAll(PDO::FETCH_OBJ);
    //     return $TotalValues;


    //     // var_dump($TotalValues);
    //     header("location:/");
    }
    catch(Expection $e)
    {
        die($e->getMessage());
    }