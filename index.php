<!DOCTYPE html>
<html>

    <head>
        <title>V2.3</title>
    </head>

    <body>
        <?php
            echo 'Hello, world! I like java! Today is: ';
        ?>
        <?php
            date_default_timezone_set('Asia/Novosibirsk');
            echo date("D, j F Y, g:i");
        ?>
    </body>

</html>