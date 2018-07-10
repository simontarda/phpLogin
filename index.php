<?php
    session_start() ;
?>
   
    <title>SYSTEM</title>
    <center>
    <h3>SYSTEM</h3>
    <b><a href="index.php">HOME</a></b> |<b><a href="locked.php"> SYSTEM</a></b> |  
    
    <?php
    if(!isset($_SESSION['auth']))
    {
    ?>

    <a href="login.php">Login</a> 

    <?php
    }
    else
    {
    ?>

    <a href="logout.php">Logout</a>
    
    <?php
    }
    ?>



    <?php
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
    </center>
    <link rel="stylesheet" type="text/css" href="./css/style.css">