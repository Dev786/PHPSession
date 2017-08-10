<?php
    session_start();
    if(isset($_SESSION['email'])){
        header("location:main.php");
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/mystyle.css" rel="Stylesheet">

    </head>
    <body>
        <div class="form_custom">
        <form>
           <div class="form-group">
           <label for="email">Email Address</label>
           <input type="email" name="email" class="form-control" id= "email">
           </div>
            <div class="form-group">
           <label for="pwd">Password</label>
           <input type="password" name="pwd" class="form-control" id= "email">
           </div>
            <input type="submit" class="btn btn-primary btn-block" name="login" value="SIGN IN">
            <input type="submit" class="btn btn-primary btn-block" name="register" value="SIGN UP">
        </form>
        </div>
    </body>
</html>


<?php
 require('connection.php');
       
    if(isset($_REQUEST['register'])){
        header('location:register.php');
    }

    if(isset($_REQUEST['login'])){
        $email = $_REQUEST['email'];
        $pwd = $_REQUEST['pwd'];

        $sql = "select name from registeration where email='$email' and password='$pwd'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = $pwd;
            header("location:main.php");
        }else{
            echo "<script type='text/javascript'>alert('user does not exist');</script>";
        }
    }

    $conn->close();
?>