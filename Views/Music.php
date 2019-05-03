<?php
require_once("../API/Youtube.php");
/** Author: Jasmine Crump */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Play List</title>
        <link rel="stylesheet" href="Index.css">
    </head>
    <body>
    <h6><?php echo $_SESSION['username'] ?></h6>
        <br>
        <p> This is the play list that best fits your mood:</p>
        <br>
        <?php

                $controller = new apiController();
                $controller->getPlaylist();

        ?>
        <br>
        <p> These are the songs that have been chosen specifically for you to look up and enjoy to start feeling better!</p>
    </body>
</html>



