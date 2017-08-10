
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

<table class="table">
<thead>
    <tr>
        <th>Number</th>
        <th>Messages</th>
    </tr>
</thead>
<?php
    require('connection.php'); 

    $from = $_REQUEST['from'];
    $to = $_SESSION['email'];
    $i=1;
    $sql = "Select * from messages where from_m = '$from' and to_m = '$to'";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>$i</td><td>".$row['content']."</td></tr>";
            $i+=1;
        }
    }else{
        echo "Doesn't Exist";
    }


    $conn->close();
?>
<table>
    
</body>
</html>