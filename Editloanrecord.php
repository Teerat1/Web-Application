<html>

<?php
require("connect.php");
$A = $_REQUEST["text1"];
$B = $_REQUEST["text3"];

$sql = "SELECT ID,Amount FROM People" ;
$sql.= " WHERE ID='$A'";
//echo $sql;
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $X = $row['Amount'];
            $Total =$X + $B ;
            $sql = "UPDATE People SET Amount = '$Total',Status ='Waiting' WHERE ID='$A'";
            echo $sql;
            if (mysqli_query($conn, $sql)) {
                echo "Edit record created successfully";
            }
        }
    } else {
        $ID = $_REQUEST['text1'];
        $Name = $_REQUEST['text2'];
        $Amount = $_REQUEST['text3'];
        $sql = "INSERT INTO People (ID, Name , Amount) Value";
        $sql .="('".$ID."','".$Name."','".$Amount."')";
        echo $Amount;
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        }
    }
    mysqli_close($conn);
?>
</html>