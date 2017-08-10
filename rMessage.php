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
            <li class=""><a href="main.php">SEND</a></li>
            <li class=""><a href="sMessage.php">SENT MESSAGES</a></li>
            <li class="active"><a href="#">RECEIEVED MESSAGES</a></li>
            <li class=""><a href="logout.php">LOG OUT</a></li>
        </ul>
        </div>
    </div>
    </nav>
     <div class="form_custom">
        <form action="displayR.php">
           <div class="form-group">
           <label for="">From</label>
           <input type="email" name="from" class="form-control">
           </div>
           <input type="submit" class="btn btn-primary btn-block" name="search" value="SEARCH">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     </body>
</html>
