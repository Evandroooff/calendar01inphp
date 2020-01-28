<html>
    <head>
        <link href="calendar.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            include 'calendario03.php';

            $calendar = new Calendar();

            echo $calendar->show();
        ?>
    </body>
</html>