<?php

require_once './lead-logic.php';

switch($command) {

    case "getAllLeads":
        $leads = getAllLeads();
        echo $leads;
        break;
        
}