<?php
include 'db.php';
$result=$conn->query("select * from emp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 ><center>Emp Data</center></h1>
    <table cellpadding="25"cellspacing="6" border="2" style="margin:auto;background:linear-gradient(lightblue,lightpink,lightgreen)";>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["address"];?></td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>