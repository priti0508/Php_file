<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST">
    Id:
    <input type="number" name="id"><br>
    Name:
    <input type="text" name="name" id=""><br>
    Address:
    <input type="text" name="add" id=""><br>
    <button type="submit">Submit</button>

   </form> 
</body>
</html>
<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $id=$_POST["id"];
    $name=$_POST["name"];
    $add=$_POST["add"];

    $sql=$conn->prepare("insert into emp values(?,?,?)");
    $sql->bind_param("iss"  ,$id,$name,$add);

    if ($sql->execute()) {
        echo "<script>alert('Inserted')</script>";
    }
}


?>