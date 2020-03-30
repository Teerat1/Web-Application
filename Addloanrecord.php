<html>
<head>
    <link rel="stylesheet" href="UI.css">
</head>
</html>
<?php
    require("connect.php");
    $ID = $_REQUEST['text1'];
    $Name = $_REQUEST['text2'];
    $Amount = $_REQUEST['text3'];
    $sql = "INSERT INTO People (ID, Name , Amount) Value";
    $sql .="('".$ID."','".$Name."','".$Amount."')";
    echo $Amount;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
