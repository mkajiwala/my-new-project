<?php
include("connection.php");
include("menu.php");
error_reporting(0); 
  

 $_GET['id'];
 $_GET['na'];
 $_GET['mb'];
 $_GET['cat'];
?>


<html>
<head>
 <!-- <link rel="stylesheet" type="text/css" href="mystyle1.css"> -->
</head>

   
<html>
<head>
</head>
<body>
<div class="centerdiv">
<form  action="" method="GET">
 ID <input type="text"  name ="id" value="<?php echo $_GET['id']; ?>"/><br><br>
 Name   <input type="text"  name ="na" value="<?php echo $_GET['na']; ?>"/><br><br>
 Email  <input type="text"  name ="mb" value="<?php echo $_GET['mb']; ?>"/><br><br>
 Indutry<input type="text"  name ="cat" value="<?php echo $_GET['cat']; ?>"/><br><br>
         <input id="button"  type="submit" name="submit" value="Update"/>
</form>


<?php
if($_GET['submit'])
{
   $id = $_GET['id'];
   $na = $_GET['na'];
   $mb = $_GET['mb'];
   $cat = $_GET['cat'];

   $query ="UPDATE CONTACT SET ID ='$id', NAME ='$na', MOBILENO ='$mb',  CATAGORY='$cat' WHERE ID = $id";
   //mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
   $data = mysqli_query($conn,$query);
   if($data)
        {
           echo "Record Updated";
        }     
           else
        {
           echo "Record Not UPDATED";
        }
        }
?> 
</div>

<style type="text/css">
  
  body {
   background-color: #e8f3f8; 
  }

  h1{
    text-align: center;
    color: red;
    font:2em/1.5 sans-serif;
    margin-top: 2px;
  }
  
  form{
    margin: 20px auto;
    width: 320px;
    color: steelblue;
   }
input[type="text"]{
  font-size: inherit;
  display: inline block;
  /*margin:0px;*/
  height: 30px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
}
input[type="date"]{
  font-size: inherit;
  display: inline block;
  /*margin:0px;*/
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
#master{
  font-size: inherit;
  display: inline block;
  margin:2px;
  height: 35px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
  margin-bottom: 5px;
}

</style>







