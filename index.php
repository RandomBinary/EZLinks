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

        <a href="http://localhost.c0m.at/view.php?name=2013-12-27-LocalLink">Powered by LocalLink!</a>

    </centeR>

    </body>
</html>
