<html>
<head>
    <link rel="stylesheet" href="UI.css">
</head>
<body>
    <h8>Loan Info</h8>
    <t1><table border="8">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Amount</td>
                <td>Status</td>
            </tr>
<script>
    function App(){
        document.getElementbyname ("Status").value="approve";
        
        


    }

</script>
<?php

require("connect.php");

$sql = "SELECT * FROM People";

$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td><input type='text' name='ID' size='13' value=" . $row["ID"]. " readonly></td>";
                echo "<td><input type='text' name='Name' size='30' value=" . $row["Name"]. " readonly></td>";
                echo "<td><input type='text' name='Amount' size='8' value=" . $row["Amount"]. " readonly></td>";    
                echo "<td><input type='text' name='Status' size='15' value=" . $row["Status"]. " readonly></td>";
                echo "<input type='button' name='Approve' value='Approve'onclick='App()'>";
            echo "</tr>";
            //echo"</form>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

?>
</table></t1>
<form action="Prototype.html">
    <input type="submit" value="Back">
</form>
</body>
</html>