<?php


        define('_HOSTNAME','localhost');
        define('_DB_NAME','crud');
        define('_DB_UNAME','root');
        define('_DB_PW','mysql');

        $connection=new mysqli(_HOSTNAME,_DB_UNAME,_DB_PW,_DB_NAME);


        if($connection->connect_errno){
            die('Error : ->'.$connection->connect_errno);
        }