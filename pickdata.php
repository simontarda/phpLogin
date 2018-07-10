<?php include 'case.php';?>

    <label>Date:</label>
    <div>
        <table>
            <tr>
                <td><input type="date" min="2000-01-01" ><br></td>
                <td><input type="date" min="2000-01-01" ><br></td>
            </tr>
        </table>
    </div>
    
    <div>
        <input type="submit" />
    </div>
    <div>    
        <form action="locked.html">
            <input type="submit" value="POWROT" />
        </form>
    </div>

           

        
    
    <?php  
    
    /* Specify the server and connection string attributes. */  
        $serverName = "SQL\SQLEXPRESS";  
        $connectionInfo = array( "Database"=>"kanc");  
    
    /* Connect using Windows Authentication. */  
        $conn = sqlsrv_connect( $serverName, $connectionInfo);  
        if( $conn === false )  
            {  
                echo "Unable to connect.</br>";  
                die( print_r( sqlsrv_errors(), true));  
            }  
    
    /* Query to show all tables */  
        $tsql = "SELECT first_name, last_name, email from dbo.LLLLL";  
    
    
        $stmt = sqlsrv_query( $conn, $tsql); 
            if( $stmt === false )  
            {  
                echo "Error in executing query.</br>";  
                die( print_r( sqlsrv_errors(), true));  
            }  
    
    
            $rows = array();
    /* Retrieve and display the results of the query. */  
    //$row = sqlsrv_fetch_array($stmt); 
    
            echo"<table border='1'>";
            echo"<tr><td>First_Name</td><td>Second_Name</td><td>Email</td><tr>";
            while($row = sqlsrv_fetch_array($stmt)) {
                echo"<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email']}</td></tr>";
            }
            echo"</table>";
        //print json_encode($rows);
        //file_put_contents('filename.txt', print_r($rows, true));
        /* Free statement and connection resources. */  
        sqlsrv_free_stmt( $stmt);  
        sqlsrv_close( $conn);  
        ?>
    




