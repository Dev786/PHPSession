
<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
?>

<html>
<head>
    <title>Main Page</title>
    <link href="css/bootstrap.min.css" rel="Stylesheet">
    <link href="css/mystyle.css" rel="Stylesheet">
</head>
    <body>
        
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="main.php">DEVASHISH</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">SEND</a></li>
            <li class=""><a href="sMessage.php">SENT MESSAGES</a></li>
            <li class=""><a href="rMessage.php">RECEIEVED MESSAGES</a></li>
            <li class=""><a href="logout.php">LOG OUT</a></li>
        </ul>
        </div>
    </div>
    </nav>
    
    <div class="form_custom">
        <form>
           <div class="form-group">
           <label for="">To</label>
           <input type="email" name="to" class="form-control">
           </div>
            <div class="form-group">
           <label for="Message">Message</label>
           <textarea rows="10" cols="20" class="form-control" name = "msg"></textarea>
           </div>
            <input type="submit" class="btn btn-primary btn-block" name="send" value="SEND">
        </form>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     </body>
</html>


<?php
    require('connection.php'); 

    if(isset($_REQUEST['send'])){
        $from = $_SESSION['email'];
        $to = $_REQUEST['to'];
        $message = $_REQUEST['msg'];
        
        $sql = "Insert into messages values('$to','$from','$message')";
        if($conn->query($sql)==TRUE){
             echo "<script type='text/javascript'>alert('Message Sent');</script>";
        }else{
             echo "<script type='text/javascript'>alert('Error');</script>";
        }
    }

    $conn->close();
?>