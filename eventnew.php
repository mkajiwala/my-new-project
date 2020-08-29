
<?php
include("connection.php");
//error_reporting(0);
?>

<html>
<head>
        
</head>


    
    <body>
          
         <form action="" method="GET">
            	Title   <input type="text" name ="title" value=""/><br><br>
                Date    <input type="text" name ="date" value=""/><br><br>
                Time    <input type="text" name ="time" value=""/><br><br>
                Venue   <input type="text" name ="venue" value=""/><br><br>
                Speakers <input type="text" name ="speaker" value=""/><br><br>
                         <input  type="submit" name="submit" value="submit"/>
         </form>
      
   
   
    

<?php

  if($_GET['submit'] )
   {
         $tt = $_GET['title'];
         $dt = e$_GET['date'];
         $tm = $_GET['time'];
         $vn = $_GET['venue'];
         $sp = $_GET['speaker'];


     if ($tt!="" && $dt!="" && $tm!="" && $vn!=""&& $sp!="")
      {
	       $Query = "INSERT INTO EVENT  VALUES ('$tt','$dt','$tm','$vn','$sp')";
	       $data =mysqli_query($conn, $Query);

	      if($data)
          { 
          echo "Data Insterted in to Data Base";
          }
       
          
          }
          else
          { 
	     

       echo "All fields are required";

       }
	     
    }     
     
?>

</body>
</Html>

<style type="text/css">
  body {
   background-color: #e8f3f8; 
  }

</style>