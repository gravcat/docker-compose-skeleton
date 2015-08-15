<!doctype html>
<html class="no-js" lang="en" />
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Docker test project</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <h1>Congratulations!</h1>
        <p>
            You are viewing a PHP generated page from a docker container,<br>
            containing content (below) from a MySQL database in another docker container,<br>
            that is served by nginx in yet another docker container.
        </p>
        <h3>Database Content</h3>
        <p>Look! Some random data loaded from a linked MySQL docker container:</p>
        <ul>
        <?php

        session_start();

        $dsn = sprintf(
            'mysql:host=%s;port=%d;dbname=app',
            'mysql',
            '3306'
        );
        $db = new PDO($dsn,'mysqluser','123456');
        $stmt = $db->prepare('SELECT * FROM `items`;');
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            echo sprintf('<li>%s (%d)</li>', $row['name'], $row['id']);
        }
        
        ?>
        </ul>
    </body>
</html>
