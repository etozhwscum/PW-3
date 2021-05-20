<?php

    $connect = mysqli_connect('localhost', 'root', '', 'birzha_truda');

    if (!$connect) {
        die('Error connect to DataBase');
    }