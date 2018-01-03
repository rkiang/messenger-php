<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Messenger: PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <h1>
            <?php echo "Full stack messenger app"; ?>
        </h1>
        <form action="" method="post">
            Name: <input type="text" name="name" value="<?php echo $name;?>">
                <!-- <span class="error">* </span> -->
                 <br><br>
            Message: <input type="text" name="name" value="<?php echo $message;?>">
                <!-- <span class="error">* </span> -->
                <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        echo "<h2>Message:</h2>";
        echo $name;
        echo "<br>";
        echo $message;
        ?>
    </body>
</html>