

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <link href="views/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">

    <!-- <form action="/undeleteList" method="POST"> -->
          <a href="/"><button type="submit" name="undeleteList" value="<?php echo $_SESSION['id']?>">UN Deleted list</button></a>  
        <!-- </form> -->
   <form action="/update" method="post">

            <?php foreach($deleteData as $single):?>
            
               
                <?php if($single['delete_at']):?>
                   
                    <div>
                    <li>TaskName: <?php echo $single['name']?></li>
                    <li>Name: <?php echo $single['assigning_person']?></li>
                    <li>Description: <?php echo $single['description']?></li>
                    <li>status: <?php echo $single['is_status']?></li>
                    <button type="submit" name="update" value="<?php echo $single['id']?>">Delete</button>
                        

                    </div>
            <?php endif;?>    
            <?php endforeach;?>   

   </form>
 
    </div>
</body>
</html>
