<?php
    session_start() ;
    if(!isset($_SESSION['auth']))
    {
    header("Location:login.php") ;
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

    <a href="index.php">HOME</a> |  
    
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

</center>