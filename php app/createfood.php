<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Food</title>
        <link rel="stylesheet" href="./styles/main.css">
    </head>

    <body>
        <?php require "./sources/header.php"; ?>
        <div id="sidebarAlign">
                <?php require "./sources/sidebar.php"; ?>
            <div id="contentAlign">
                <?php require "./sources/foodCreator.php"; ?>
                <?php require "./sources/foodDisplayer.php"; ?>
            </div>
        </div>    
    </body>
</html>