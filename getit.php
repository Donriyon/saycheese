<?php

     file_put_contents("log.txt", "number: " . $_POST['number'] . "\n", FILE_APPEND);
     header('location: Rediret.html');
    exit();
