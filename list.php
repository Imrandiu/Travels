<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">

        <link rel="stylesheet" href="style.css">
        <title>list</title>
    </head>
    <body style="color:black;font-family: 'Playfair Display', serif; margin: 0;
padding: 0;" class="container-fluid list_background">
        
         
        
        <header>
            <div class="row wrapper navbar-fixed-top">
                <div class="col-sm-4 ">
                    <div class="logo">
                        <img src="images/logo.png" alt="logo">
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-2  ">
                    <div class="navber">
                        <ul>
                            <li><a href="index.php" target="_blank">Home</a></li>                
                            <li><a href="user.php" target="_blank">User</a></li>
                            <li><a href="admin.php" target="_blank">Admin</a></li>
                            <li><a href="registretion.php" target="_blank">Regg</a></li> 
                            <li><a href="https://www.google.com/maps" target="_blank">Location/Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        
        
   
 

 <?php 
  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $date=$_POST['date'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];   
      $password=$_POST['password'];
  }

?>
<h2 style="color:green">User's are:-</h2>
<table style="margin-top:250px;color:blue;" border="2px;">
    <tr>
        <th> Name</th>
        <th> Email</th>
        <th> Phone</th>
        <th> Date of birth</th>
        <th> Gender</th>
        <th> Address</th>
        <th> Password</th>
    </tr>
    <tr>
        <td> <?php echo $name; ?> </td>
        <td> <?php echo $email; ?> </td>
        <td> <?php echo $phone; ?> </td>
        <td> <?php echo $date; ?> </td>
        <td> <?php echo $gender; ?> </td>
        <td> <?php echo $address; ?> </td>
        <td> <?php echo $password; ?> </td>
    </tr>
    
</table>
 </body>
</html>






















