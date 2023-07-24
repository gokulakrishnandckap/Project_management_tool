<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <link href="views/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
            <form action="/insert" method="post" enctype="multipart/form-data">
                <input type="text" name="projects" value="projects" hidden>
                <label>Enter your project Name</label>
                <input  autocomplete="off" type="text" name="project_name">
                <input   type="file" name="files[]" multiple>
                <button type="submit">Sumbit</button>
            </form>



    </div>
</body>
</html>
