<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hej <?php echo $_POST["namn"];?>!<br>
    <?php echo ($_POST["ålder"] < 18) ? 'Du är för ung för att använda den här webbplatsen.' : 'Välkommen till vår webbplats.';?>
    
</body>
</html>