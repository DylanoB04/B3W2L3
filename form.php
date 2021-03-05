<!-- <!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W2L2</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <body>
            <div id="container">
                <h1>B3W2L1</h1><br>
                <form action="form.php" method="GET">
                    <label for="textInput">Name: </label><br>
                    <input type="text" id="textInput" name="txtInput"><br>
                    <br>
                    <label for="emailInput">Email: </label><br>
                    <input type="email" id="emailInput" name="mailInput"><br>
                    <br>
                    <input type="submit" value="submit" id="button" name="submit">  
                </form>
                <h1>De ingevulde gegevens zijn:</h1>
                <?php 
                    echo nl2br ("Naam: " . $_GET['txtInput'] . "\n" . "Emailadres: " . $_GET['mailInput']);
                ?>
            </div>
        </body>
</html> -->


<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W2L2</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <body>
            <div id="container">
                <h1>B3W2L1</h1><br>
                <form action="form.php" method="POST">
                    <label for="textInput">Name: </label><br>
                    <input type="text" id="textInput" name="txtInput"><br>
                    <br>
                    <label for="emailInput">Email: </label><br>
                    <input type="email" id="emailInput" name="mailInput"><br>
                    <br>
                    <input type="submit" value="submit" id="button" name="submit">  
                </form>
                <h1>De ingevulde gegevens zijn:</h1>
                <?php 

                function cleanData($data){
                    $schonetextInput=trim($data);
                    $schonetextInput=htmlspecialchars($schonetextInput);  
                    $schonetextInput=stripslashes($schonetextInput);
                    
                    return $schonetextInput;
                };
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $opgeschoondeTxtInput = cleanData($_POST['txtInput']);
                    $opgeschoondeMailInput = cleanData($_POST['mailInput']);

                    echo nl2br ("Naam: " . $opgeschoondeTxtInput . "\n" . "Emailadres: " . $opgeschoondeMailInput);
                }else{}

                ?>
            </div>
        </body>
</html>