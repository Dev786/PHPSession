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
           <label for="username">Username</label>
           <input type="text" name="uname" class="form-control" >
           </div>
           <div class="form-group">
           <label for="email">Email address</label>
           <input type="email" name="email" class="form-control">
           </div>
            <div class="form-group">
           <label for="pwd">Password</label>
           <input type="password" name="pwd" class="form-control">
           </div>
           <div class="form-group">
           <label for="phno">Phone Number</label>
           <input type="number" name="phno" class="form-control">
           </div>
            <input type="submit" class="btn btn-primary btn-block" name="register" value="REGISTER">
            <input type="submit" class="btn btn-primary btn-block" name="login" value="LOGIN">
        </form>
        </div>
    </body>
</html>

<?php
    require('connection.php');

    if(isset($_REQUEST['login'])){
        header("location:login.php");
    }
    if(isset($_REQUEST['register'])){
        $name = $_REQUEST['uname'];
        $email = $_REQUEST['email'];
        $pwd = $_REQUEST['pwd'];
        $phn = $_REQUEST['phno'];

        if($name!=NULL||$email!=NULL||$pwd!=NULL||$phn!=NULL){

            $sql = "Select name from registeration where email = '$email'";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                echo "<script type='text/javascript'>alert('Email Exists');</script>";
            }else{
                $sql = "Insert into registeration values('$name','$email','$pwd',$phn)";
                if($conn->query($sql)==TRUE){
                    echo "<script type='text/javascript'>alert('Data Entered Successfully');</script>";
                    header("location:login.php");
                }
                else{
                     echo "<script type='text/javascript'>alert('Error');</script>";
                }        
            }

        }else{
              echo "<script type='text/javascript'>alert('Incomplete Data');</script>";
        }
    }
    $conn->close();
?>