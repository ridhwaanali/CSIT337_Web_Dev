<html>

<head><title>Product</title><!-- Title here-->

<style><!-- style sheet here-->

table {

border-collapse: collapse;

width: 100%;

}

th, td {

text-align: left;

padding: 8px;

}

tr:nth-child(even){background-color: #f2f2f2}

</style></head><!--Title set -->

<body>

<form method="post">

Enter value of n :<select name="Query">

<option value="0">*</option>

<option value="ID">ID</option>

<option value="Title">Title</option>

<option value="Category">Category</option>

<option value="isbn">isbn</option>

</select><br><!--Input text for enter number 1 -->

<input type="submit" name="OK" value="OK"><!--Input Button for submit -->

</form>

<?php

if(isset($_POST['OK']))

{

if($_POST['Query']=="0")

{

$con=mysqli_connect("localhost","lw3htp","password","product");

// Check connection

if (mysqli_connect_errno())

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$sql="SELECT * FROM books";

if ($result=mysqli_query($con,$sql))

{

// Fetch one and one row

echo '<div style="overflow-x:auto;">

<table>

<tr><th>ID</th>

<th>Title</th>

<th>Category</th>

<th>ISBN</th> </tr>';

while ($row=mysqli_fetch_row($result))

{

printf ("<tr><td>%s</td> <td>(%s)</td><td>%s</td> <td>(%s)</td></tr>",$row[0],$row[1],$row[2],$row[3]);

}

// Free result set

mysqli_free_result($result);

}

mysqli_close($con);

}

else

{

$con=mysqli_connect("localhost","root","","product");

// Check connection

if (mysqli_connect_errno())

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$sql="SELECT ".$_POST['Query']." FROM books";

echo $sql;

if ($result=mysqli_query($con,$sql))

{

echo '<div style="overflow-x:auto;">

<table>

<tr><th>';

echo $_POST['Query'];

echo '</th>

</tr>';

while ($row=mysqli_fetch_row($result))

{

printf ("<tr><td>%s</td></tr>",$row[0]);

}

  

mysqli_free_result($result);

}

mysqli_close($con);

}

}

?>

</body>

</html>

output: