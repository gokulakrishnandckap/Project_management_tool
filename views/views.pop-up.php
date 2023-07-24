
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <link href="views/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="/inserting" method="post" enctype="multipart/form-data">
            <input type="text" hidden name="key" value="<?php echo $_POST['adding']?>" >
            <input type="text" hidden name="task" value="task" >
            <label>taskName</label>
            <input type="text" name="name">
            <label>PersonName</label>
            <input type="text" name="PersonName">
            <label>Description</label>
            <input type="text" name="decription">
            <label>image</label>
            <input type="file" name="files[]" multiple>
            <select name="select">
                <option value="">select</option>
                <option value="not yet">not yet</option>
                <option value="in_progress">in_progress</option>
                <option value="completed">completed</option>
            </select>
            <button type="submit">Sumbit</button>

        </form>

    </div>
</body>
</html>
