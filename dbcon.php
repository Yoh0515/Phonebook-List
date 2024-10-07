<?php

    define("Hostname", "localhost");
    define("Username", "root");
    define("Password", "Qwerty_Qwerty11");
    define("Database", "phonebook");

    $connection = mysqli_connect(Hostname,Username,Password,Database);

    if (!$connection){
        die ("Connection Failed");
    }

    else {
        echo "yessss";
    }

?>