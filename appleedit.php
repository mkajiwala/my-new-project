

<?php
include("connection.php");
include("menu.php");
error_reporting(0);

 $_GET['mn'];
 $_GET['nm'];
 $_GET['mb'];
 $_GET['indu'];
 $_GET['cat'];
 $_GET['sour']
 
?>
<head>         
</head>
<html>

<div class="container">
<h1>Apple Edit Experiment File (updatepicture.php)</h1>
<div class="profile">
   
<?php

     $filename =$_FILES["uploadfile"]["name"];
     $tempname =$_FILES["uploadfile"]["tmp_name"];
     $folder = "member/".$filename;
     move_uploaded_file($tempname,$folder);
if($_POST['submit'] )
   {
  
   echo "<img src = '$folder' height ='100' width='100'/>";
   }
   else
   {
   $pic =    $_GET['sour'];
   echo "<img src = '$pic' height ='100' width='100'/>";
   }
 ?>


</div>
</div>



<body>
<div class="container">
<div class="wrapper">
           
  
 <form action="" method="POST" enctype="multipart/form-data">
    Mem No <input type="text"  name ="memno" value="<?php echo $_GET['mn']; ?>"/><br><br>
    Name   <input type="text"  name ="name" value="<?php echo $_GET['nm']; ?>"/><br><br>
    Mobile No<input type="text"  name ="mobile" value="<?php echo $_GET['mb']; ?>"/><br><br>
    Indutry<input type="text"  name ="indu" value="<?php echo $_GET['indu']; ?>"/><br><br>
    Catagory<input type="text"  name ="cata" value="<?php echo $_GET['cat']; ?>"/><br><br>
    Edit Pic <input type="file" name="uploadfile" value=""/><br><br>
    
         <input id="button"  type="submit" name="submit" value="Update"/>
 </form>
 
<?php

if($_POST['submit'] )

{
   $memno =  $_POST['memno'];
   $name =   $_POST['name'];
   $mobile = $_POST['mobile'];
   $indu =   $_POST['indu'];
   $cata =   $_POST['cata'];
   $sour =   $_POST['sour'];
   
   
            
    $query ="UPDATE MEMBER SET NAME= '$name', MOBILE ='$mobile', INDUSTRY = '$indu', CATAGORY ='$cata',SOURCE ='$folder' WHERE MEMBERNO =$memno";

   $data =mysqli_query($conn, $Query);

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
</div>


</body>
</html>


<style type="text/css">
  
  .profile{
    margin-top: 20px;
    margin-left: 515px;
    border: 1px solid red;
    height: 100px;
    width: 100px;
  }
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

input[type="file"]{
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







