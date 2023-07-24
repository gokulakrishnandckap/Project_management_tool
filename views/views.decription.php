

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <link href="views/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">

   <form action="/update" method="post">
            <?php foreach($singleDatum as $single):?>
            
            <div>
            <li>TaskName: <?php echo $single['name']?></li>
            <li>Name: <?php echo $single['assigning_person']?></li>
            <li>Description: <?php echo $single['description']?></li>
            <li>status: <?php echo $single['is_status']?></li>
            
            <!-- image:<img src="<?php echo $single['image']?>" width="100px"> -->
            <button type="submit" name="update" value="<?php echo $single['id']?>">Delete</button>
                

            </div>

            <?php endforeach;?>   

   </form>
 
    </div>
</body>
</html>
