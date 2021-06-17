<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample Leads CRUD php</title>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Template Engine: -->
                <?php
                    require_once './lead_logic.php';
                    $leads = getAllLeads();
                    foreach($leads as $l) {
                        #print_r($l);
                    echo "<tr>" . 
                            // "<td id='$l[$LeadID]'>" .
                            "<td>".
                                // "<a href='details.php?id=$p->id'>
                                $l->firstName
                                // </a>"
                                 .
                            "</td>" .
                            "<td>$l->lastName</td>" .
                            "<td>$l->phone</td>" .
                            "<td>$l->mail</td>" .
                            "<td>$l->submission</td>" .
                            "<td>" .
                                // "<button onclick='navigateToEdit($p->id)'>Edit</button>" .
                            "</td>" .
                            "<td>" .
                                // "<button onclick='navigateToDelete($p->id,\"$p->name\")'>Delete</button>" .
                            "</td>" .
                         "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>