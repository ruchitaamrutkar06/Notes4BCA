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
	$un=$_REQUEST['un'];
	$pw=$_REQUEST['pw'];
    $count=mysqli_query($con,"select * from student where username='$un' and password='$pw'");
	if(mysqli_num_rows($count)>=1)
	{
		include('content.html');
	}
	mysqli_close($con);
    ?>
</body>
</html>