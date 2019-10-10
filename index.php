<html>
    <head>
        <title>Maintenance Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" href="http://example.com/favicon.png"><!--Icon for tab in browser-->
    </head>

    <body>
        <div class="container">
            <h1 style="text-align: center"> Menu</h1>
            <a href="Views/Maintenance/MaintenanceCreate.php" class="menu-anchor"> 
                <button type="button" class="btn btn-primary menu-button"> Create maintenance</button> <!--bootstrap style-->
            </a>

            <a href="Views/Maintenance/MaintenanceRead.php" class="menu-anchor"> 
                <button type="button" class="menu-button"> Read maintenance</button> 
            </a>

            <a href="Views/Maintenance/MaintenanceUpdate.php" class="menu-anchor"> 
                <button type="button" class="menu-button">Update maintenance</button> 
            </a>

            <a href="Views/Maintenance/MaintenanceDelete.php" class="menu-anchor"> 
                <button type="button" class="menu-button"> Delete maintenance</button> 
            </a>

        </div>
    </body>

</html>