<?php

try {
    $dbhandle = new PDO('mysql:host=localhost; dname=library', $username, $pwd);
    doDB_Work($dbhandle);
    $dbhandle = null;
}
catch (PDOException $error){
    print "Error!" . $error->getMessage() . "<br/>";
    die();
}
?>