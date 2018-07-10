<title>SYSTEM</title>
    <center>
    <h3>SYSTEM</h3>
    <a href="index.php">HOME</a> |  
    <?php
    if(!isset($_SESSION['auth']))
    {
    ?>
    <b><a href="login.php">Login</a> </b>
    <?php
    }
    else
    {
    ?>
     <b><a href="logout.php">Logout</a></b>
     <?php
     }
     ?>
    <?php
    session_start() ;
    if(isset($_SESSION['success']))
    {
    ?>
    <div class="success">
    <?php echo $_SESSION['success'] ; ?>
    </div>
    <?php
    unset($_SESSION['success']) ;
    }
    if(isset($_SESSION['failure']))
    {
    ?>
    <div class="failure">
    <?php echo $_SESSION['failure'] ;?>
    </div>
    <?php
    unset($_SESSION['failure']) ;
    }
    ?>
     <h2>STRONA LOGOWANIA</h2>
    <div class="form">
    <form action="loggingin.php" method="post">
    Login: <input type="text" name="user_id"><br>
    Hasło: <input type="password" name="user_passwd"><br>
    <input type="submit" value="login"><br>
    </form>
    </div>
    </center>


<link rel="stylesheet" type="text/css" href="./css/style.css">
    