<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
if (isset($_POST['username'])) {
      
        // Include the databas connection script
   include_once("connection.php");
  
   // Set the posted data from the form into local variables
    $usrname =$_POST['username'];
   $passwd = $_POST['password'];
  
   $sql = "SELECT email, password FROM administrators WHERE email = '$usrname'";
   $query = mysqli_query($conn, $sql);
   $row = mysqli_fetch_row($query);
  
   $dbUsname = $row[0];
   $dbPassword = $row[1];
  
   // Check if the username and the password they entered was correct
  
      
  
   if ($usrname == $dbUsname && $passwd == $dbPassword) {
  
       header("Location: welcome.php");
   } else {
       echo "<script>
                     $(document).ready(function(){
                           alert('arzed');
                         $('#p1').text('Error Invalid credential, you must correctly login to view this site.');
                     });
               
         
       </script>";
      
      
   }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>CSIT101 Log in System</title>
</head>
<body>
   <h1>Welcome to CSIT web site </h1>
   <p><h3>Please Login</h3></p>

   <form id="login" action="index.php" method="post">
       <table>
      
       <tr>
           <td>Email: </td>
           <td><input type="text" name="username" id="username"></td>
       </tr>
       <tr>
       <td>Password: </td>
       <td><input type="password" name="password" id="password"></td>
        </tr>
      
       <tr><td><input type="submit" value="Login" name="Submit" /></td></tr>

        </table>
        <p id="p1">You must login to view this site.</p>
   </form>

</body>
</html>

