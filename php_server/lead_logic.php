<?php

require_once ('./dal.php');

function getAllLeads() {
    $sql = "SELECT * FROM Leads";
    // $sql = "SELECT LeadID as id, firstName as Name, " . 
    //         "lastName as LastName, phone as Phone " .
    //         "mail as Email, submission as time " .
    //         "FROM Leads";
    $leads = select($sql);
    return $leads;
}

?>