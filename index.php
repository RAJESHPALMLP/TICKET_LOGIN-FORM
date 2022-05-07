<?php
include("insert.php");
error_reporting(0);
?>

<html>
        <head>
            <title>INSERT OPERATION ON PHP</title>
        
        </head>
        <body  bgcolor="">
            <p style="margin-left: 1050;"></p>
            <font SIZE=35 color=red><CENTER >RESERVATION SYSTEM</CENTER></font>  
             <font SIZE =4><center>WELCOME TO </center></font>
             <font SIZE=4><center><ul C>ONLINE TICKET RESERVATION SYSTEM</ul></center></font>
         <FORM   action=" " method=" GET"  align="center" >  <BR>
           <P ><B>ADMIN LOGIN</B></P>
       
        <B> USER NAME:</B><input  type="email" name="username" value=" " ><BR><br>
        <B> PASSWORD:-</B> <input  type="password" name="password" value=" " ><BR><br>
       
              <input  type="Submit" name="Submit" value="SUBMIT" >
    
        </FORM> <br>
       
            </body>
        <?php
         $sn=$_GET['username'];
         $rn=$_GET['password'];
    
        $quary="INSERT INTO data VALUES ('$sn','$rn')";
        $data=mysqli_query($con,$quary);
        if($data)
        {
            
            echo "";
        }
        ?>
      </html>