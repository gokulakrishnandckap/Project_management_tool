<?php

        $conn['db'] = (new Database())->db;



        try{
            // if(isset($_POST['project_name'])){
                    $name = $_POST['name'];
                    $person = $_POST['PersonName'];
                    $keys = $_POST['key'];
                    $decription = $_POST['decription'];
                    $select = $_POST['select'];
                $type = $_POST['task'];
                $uploadFolder = 'images/';
                // $statement = $conn['db']->prepare("INSERT into task(name,assigning_person,description,is_status,projects_id) values('$name','$person','$decription','$select','$key')");
                // $statement->execute();
        //         foreach ($_FILES['files']['tmp_name'] as $key => $image) {
        //             $imageTmpName = $_FILES['files']['tmp_name'][$key];
        
        //             $imageName = $_FILES['files']['name'][$key];
        
        
        //             $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
        
        // // var_dump($keys);
        //         //    var_dump($id);
        //         //    var_dump($uploadFolder.$imageName);
        //         //    var_dump($type);
        //         //    $imagePath = $conn['db']->prepare("INSERT into images(image_path,model_id,model_name) values('$uploadFolder$imageName',$key,'$type')");
        //         //    $imagePath->execute();
        //         }
                // var_dump($type);
                    // $fileName = $_FILES['image']['name'];
         
                    // $fileTmpName = $_FILES['image']['tmp_name'];
                    // $folder = "images/".$fileName;
                // move_uploaded_file($fileTmpName,$folder);    
                // var_dump($_FILES);


                // header("location:/");
            // }
        }
        catch(Expection $e)
        {
            die($e->getMessage());
        }

