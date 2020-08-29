

<?php
include("connection.php");
include("menu.php");
error_reporting(0);
$query = "SELECT id FROM CONTACT ORDER BY id DESC LIMIT 1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

?>

<html>
    <head>
       <!-- <link rel="stylesheet" type="text/css" href="mystyle.css">    -->
    </head>


   <body>
<div class="container">
   <div class="wrapper">
            <h1>Add Contacts</h1>
          <form action="" method="GET">
            ID  <input type="text" name ="id" value="<?php echo $result['id']+1?>"/><br><br>
            Name       <input type="text" name ="name" value=""/><br><br>
            Mobile No  <input type="text" name ="mobileno" value=""/><br><br>
            Catagory   <input type="text" name ="catagory" value=""/><br><br>
                       <input  type="submit" name="submit" value="submit"/>
          </form>

<?php

if($_GET['submit'] )

{
     $id =  $_GET['id'];
     $na =  $_GET['name'];
     $mn =  $_GET['mobileno'];
     $cat = $_GET['catagory'];

     if ($id!="" && $na!="" && $mn!="" && $cat!="")
     {
   $Query = "INSERT INTO CONTACT  VALUES ('$id','$na','$mn','$cat')";
   $data =mysqli_query($conn, $Query);

      if($data)
       { 
        echo "Data Insterted in to Data Base";
       }
      
       ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0;http://localhost:80/hindi/Asso%20New/addcontact.php">
       <?php
      

      }
       else
     

      { 
       echo "All fields are required";

    }
       
    }      
     
?>
        



</div>
</div>
</body>
</html>


<style type="text/css">
  
  h1{
    text-align: center;
    font-size: 50px;
    color: steelblue;
    font:2em/1.5 sans-serif;
    margin-top: 5px;
  }
  form{
    margin: 20px auto;
    width: 320px;
    color: steelblue;
    
  }
input[type="text"]{
  font-size: inherit;
  display: inline block;
  margin:2px;
  height: 30px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
}

input[type="submit"] {
  margin-bottom: 5px;
  width: 320px;
  height: 35px;
  border: none;
 background-color: steelblue;
  color: white;
}
input:focus {
  background-color: white
}

input[type="submit"]:focus {
  margin-bottom: 5px;
  width: 320px;
  height: 35px;
  border: 2px solid steelblue;
 background-color: white;
  color: steelblue;
}
</style>







<!-- <?php 
        // <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:9080/hindi/Asso New/addcontact.php">
        ?>
