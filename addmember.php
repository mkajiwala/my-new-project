

<?php
include("connection.php");
include("menu.php");
error_reporting(0);
$query = "SELECT memberno FROM MEMBER ORDER BY memberno DESC LIMIT 1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

?>

<html>
<head>
</head>

<body>

<div class="profile">
    <?php
           $filename =$_FILES["uploadfile"]["name"];
           $tempname =$_FILES["uploadfile"]["tmp_name"];
           $folder = "member/".$filename;
           move_uploaded_file($tempname,$folder);
           echo "<img src = '$folder' height ='100' width='100'/>";
     ?>
</div>  


<div class="container">
   <div class="wrapper">
            <h1>Add New Members</h1>
            <form action="" method="post" enctype="multipart/form-data">
          <!-- <form action="" method="GET"> -->
            Member No  <input type="text" name ="mno" value=" <?php echo $result['memberno']+1?> "/><br><br>
            Name       <input type="text" name ="name" value=""/><br><br>
            Mobile No  <input type="text" name ="mobile" value=""/><br><br>
            Industry   <input type="text" name ="indu" value=""/><br><br>
            Catagory   <input type="text" name ="catagory" value=""/><br><br>
            Picture    <input type="file" name="uploadfile" value=""/><br><br> 

                       <input  type="submit" name="submit" value="submit"/>
          </form>
    </div>
</div>

   
   <?php

   if($_POST['submit'] )
   
   {
     $mn = $_POST['mno'];
     $na = $_POST['name'];
     $mb = $_POST['mobile'];
     $ind = $_POST['indu'];
     $cat = $_POST['catagory'];

     // $filename =$_FILES["uploadfile"]["name"];
     // $tempname =$_FILES["uploadfile"]["tmp_name"];
     // $folder = "member/".$filename;
     // move_uploaded_file($tempname,$folder);
     // echo "<img src = '$folder' height ='100' width='100'/>";
   

      if ($mn!="" && $na!="" && $mb!="" && $ind!=""&& $cat!=""&& $filename!="")
    {

    $Query = "INSERT INTO MEMBER  VALUES ('$mn','$na','$mb','$ind','$cat','$folder')";
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

input[type="file"]{
  font-size: inherit;
  display: inline block;
  margin:2px;
  height: 30px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
}

.profile{
   margin-top: 20px;
    margin-left: 515px;
    border: 1px solid red;
    height: 100px;
    width: 100px;
  }
</style>







