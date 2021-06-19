<?php

// Need to declare on any .php file
// in which we need to use session:
session_start();

require_once './lead-logic.php';

$command = $_REQUEST["command"];

if(isset($_SESSION["lastCommands"])) {
    $lastCommands = $_SESSION["lastCommands"];
    $lastCommands .= "<br>" . $command;
}
else {
    $lastCommands = $command;
}
$_SESSION["lastCommands"] = $lastCommands;

// Destroy the session: 
// session_destroy();
switch($command) {

    case "deleteLead": 
        $id = $_POST["id"];
        $affectedRows = deleteLead($id);
        header("location: thanks.php");
        break;

    case "getAllLeads":
        $leads = getAllLeads();
        echo $leads;
        break;
        
        
}