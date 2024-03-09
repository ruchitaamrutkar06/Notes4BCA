<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","clg");
    if(!$con)
    {
        print("not connected");
    }
    $sn=$_REQUEST['sn'];
    $un=$_REQUEST['un'];
    $pw=$_REQUEST['pw'];
    $co=$_REQUEST['co'];
    $count=mysqli_query($con,"insert into student values('$sn','$un','$pw','$co')");
    if($count>=1)
    {
        print("Record Registered Welcome to Notes4BCA");
    }
    mysqli_close($con);
    ?>
    <br>
    <button><a href="Login.php">Login with Registered Account</a></button>
    
</body>
</html>