    <?php
    session_start() ;
    if(!isset($_SESSION['auth']))
    {
    header("Location:login.php") ;
    }
    ?>

    <title>SYSTEM</title>
    <center>
    <h3>SYSTEM</h3>
    
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

<br><label >WYBIERZ DANE DO WYSWIETLENIA:</label>
<form action="pickdata.php">
    <input type="submit" value="CEPIK" />
   
</form>

<form action="test.php">
    <input type="submit" value="ZALEGLE_SPRAWY" />
   
</form>
<form action="pickdata.php">
    <input type="submit" value="INNE" />
   
</form>
<form action="pickdata.php">
    <input type="submit" value="TEST" />
   
</form>

<link rel="stylesheet" type="text/css" href="./css/style.css">
</center>