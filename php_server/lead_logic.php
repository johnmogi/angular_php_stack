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
function getOneLead($id) {
   
    $sql = "SELECT * FROM Leads WHERE LeadID =$id";
    $lead = select($sql);
    return $lead[0];

}

function deleteLead($id) {
    $sql = "DELETE FROM Leads WHERE LeadID=$id";
    $affectedRows = delete($sql);
    return $affectedRows;
}


// function updateLead($LeadID, $firstName, $lastName, $phone, $mail, $submission) {
    
//     $sql = "UPDATE Products SET " . 
//             "firstName='$firstName', lastName='$lastName', " .
//             "phone='$phone' WHERE LeadID=$LeadID";
    
//     $affectedRows = update($sql);
    
//     return $affectedRows;
// }


?>