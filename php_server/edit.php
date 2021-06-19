<?php
    require_once './lead_logic.php';
    $id = $_GET["id"];
    $p = getOneLead($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- <link rel="stylesheet" href="styles.css"> -->
    </head>
    <body>
        <h1>Edit Lead: </h1>
        

        <form action="lead_controller.php" method="post">

            <input type="hidden" name="id" value="<?php echo $p->LeadID; ?>">
            <br><br>

            <input type="text" placeholder="Name..." name="name" value="<?php echo $p->firstName; ?>">
            <br><br>

            <input type="text" step="0.0001" placeholder="phone..." name="phone" value="<?php echo $p->phone; ?>">
            <br><br>

            <input type="text" placeholder="mail..." name="mail" value="<?php echo $p->mail; ?>">
            <br><br>

            <input type="hidden" name="command" value="updateProduct">

            <button>Update Lead</button>
        </form>
    </body>
</html>