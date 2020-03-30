<html>
<head>
    <link rel="stylesheet" href="UI.css">
<style>
p1{
    position:absolute;
    left:720px;
    bottom:430px;
}
p2{
    position:absolute;
    left:920px;
    bottom:430px;
}
p3{
    position:absolute;
    left:1050px;
    bottom:430px;
}
</style>
</head>
<script>
    function checkdata(){
            if(Number(document.X.text1) < 0){
                alert('Input invalid');
                document.X.text1.focus();
                return false;
            }
            
            else if(Number(document.X.text3) < 0){
                alert('input invalid');
                document.X.text3.focus();
                return false;}
        }
</script>
<body>
    <h2>Loan</h2>
    <p1>Your ID</p1>
    <p2>Your Name</p2>
    <p3>Amount of cash you want to loan</p3>
    
    <form name="X"action="Editloanrecord.php">
        <t2><input type="text" Name="text1" id="text1"></t2>
        <t3><input type="text" Name="text2"></t3>
        <t4><input type="text" Name="text3"></t4>
        <b3><input type="submit" value="Loan"></b3>
    </form>
    <form action="Prototype.html">
        <input type="submit" value="Back">
    </form>
    <label></label>
</body>
</html>
