<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">

        <title>Link shortener</title>

    </head>

    <body>

    <Center>

        <?php
            include('./config/config.php');

            echo "<h1> $site_name </h1>";

        ?>

        <form action="2.php" method="post">

            Link to shorten: <input type="text" name="url">

            <input type="submit" value="Shorten">

        </form><br><br><br>

        <a href="http://GitHub.com/RandomBinary/EZLinks">Powered by EZLinks!</a>

    </centeR>

    </body>
</html>
