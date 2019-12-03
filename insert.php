
<html>

<body>

 

 

<?php

$con = mysql_connect("server","id","password");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("id", $con);

 

$sql="INSERT INTO tablename (input1, input2)

VALUES

('$_POST[input1]','$_POST[input2]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 
