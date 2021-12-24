<!DOCTYPE html>
<html lang="en">

   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">

        <title>Travels</title>

    </head>

<body style="font-family: 'Playfair Display', serif;">

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
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="place.php">Place</a></li>             
                            <li><a href="user.php" >User</a></li>
                            <li><a href="admin.php" >Admin</a></li>
                            <li><a href="https://www.google.com/maps" >Location/Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
<!--        header end----------->



    <div class="container-fluid background">
        <div class="row">

            <div class="col-md-2 col-sm-4 col-xs-12"></div>
            <div class="col-md-8 col-sm-8 col-xs-12 shadow register_bottom_space">
                <form class="form-container " action="" method="post">
                    <h1 style="text-align: center; color:white;">Registration form</h1>

                    <div class="form-group">
                        <label  style="color:white;" for="exampleInputName1">Name</label>
                        <input type="name" name="name" class="form-control" id="exampleInputName1" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label  style="color:white;"for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label  style="color:white;" for="exampleInputPhone1">Phone</label>
                        <input type="phone" name="phone" class="form-control" id="exampleInputPhone1" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label  style="color:white;"for="exampleInputEmail1">Date of birth</label>
                        <input type="date" name="date" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label  style="color:white;"for="exampleInputEmail1">Gender</label>
                        <input style="color:white;" type="radio" value="male" name="gender"/>Male
                        <input style="color:white;" type="radio" value="female" name="gender"/>Female
                    </div>
                    
                    <div class="form-group">
                        <label  style="color:white;" for="exampleInputPhone1">User address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="user address">
                    </div>
                    <div class="form-group">
                        <label  style="color:white;" for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                    </div>


                   <input class="submit" name="submit" type="Submit" value="Submit">
                    <br><br>

<!--                    <button input type="submit" name="submit" class="btn btn-success btn-block">Register</button>-->
                    







                </form>



            </div>
            <div class="col-md-2 col-sm-4 col-xs-12"></div>
        </div>

    </div>




</body>

</html>