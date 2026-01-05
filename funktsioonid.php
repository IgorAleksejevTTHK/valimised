<?php
require ('config.php');
global $yhendus;

//lisa 1 punkt
function lisapunkt($id){
    global $yhendus;
        $paring = $yhendus->prepare("UPDATE valimised SET punktid=punktid+1 WHERE id=?");
        $paring->bind_param("i", $id);
        $paring->execute();
        header("Location: $_SERVER[PHP_SELF]"); //adressiriba puhastab päring ja jääb faili nimi
        $yhendus->close();

}
