<?php

// $ver = SQLite3::version();
// echo $ver['versionString'] . "\n";
// echo $ver['versionNumber'] . "\n";
// var_dump($ver);

$db = new SQLite3('mydb.db');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>id</td>
            <td>asset</td>
            <td>time buy</td>
            <td>price buy</td>
            <td>amount</td>
            <td>time sel</td>
            <td>time sel</td>
            <td>tozih</td>
        </tr>
        <?php
        $results = $db->query('SELECT * FROM tbl_trader');
        while ($row = $results->fetchArray()) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['asset']?></td>
            <td><?php echo $row['timebuy']?></td>
            <td><?php echo $row['pricebuy']?></td>
            <td><?php echo $row['amount']?></td>
            <td><?php echo $row['timesell']?></td>
            <td><?php echo $row['pricesell']?></td>
            <td><?php echo $row['tozih']?></td>
        </tr>
        <?php
        }//end while
        ?>
    </table>
   <hr>
   <label>asset:</label><input type="text"> <br>
   <label>time buy:</label><input type="text"> <br>

</body>
</html>

