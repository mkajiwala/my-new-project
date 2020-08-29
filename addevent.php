
<?php
include("connection.php");
include("menu.php");
error_reporting(0);
$query = "SELECT id FROM EVENT ORDER BY id DESC LIMIT 1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

 //$Query="SELECT count(mno) FROM  member";
 //data=mysql_query($conn,$Query);
 // $result = mysqli_fetch_array($data);
  //$result = mysqli_num_rows($data);
 // echo $data['mno'];
 // echo $data['mno']; 
?>


<html>
<head>
       <link rel="stylesheet" type="text/css" href="mystyle.css">   
</head>

<body>

<div class="container">
       <h1>Add New Events</h1>
       <form action="" method="GET">
            ID No    <input type="text" name ="id" value="<?php echo $result['id']+1?>"/><br><br>
            Title    <input type="text" name ="title" value=""/><br><br>
            Date     <input type="date" name ="date" value=""/><br><br>
            Time     <input type="time" name ="time" value=""/><br><br>
            Venue    <input type="text" name ="venue" value=""/><br><br>
            Speakers <input type="text" name ="speaker" value=""/><br><br>
            Cataory  <input type="text" name ="catagory" value=""/><br><br>
                     <input  type="submit" name="submit" value="Submit"/>
       </form>
</div>


<?php
if($_GET['submit'] )

   {   $id = $_GET['id'];
       $tt = $_GET['title'];
       $dt = $_GET['date'];
       $tm = $_GET['time'];
       $vn = $_GET['venue'];
       $sp = $_GET['speaker'];
       $cat= $_GET['catagory'];

       if ($id!="" &&$tt!="" && $dt!="" && $tm!="" && $vn!=""&& $sp!=""&&$cat!="")
   {
          $Query = "INSERT INTO EVENT  VALUES ('$id','$tt','$dt','$tm','$vn','$sp','$cat')";
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
    color: steelblue;
    font:2em/1.5 sans-serif;
    margin-top: 5px;
  }
  form{
    margin: 10px auto;
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
input[type="date"]{
  font-size: inherit;
  display: inline block;
  height: 30px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
}
input[type="time"]{
  font-size: inherit;
  display: inline block;
  height: 30px;
  width: 100%;
  border: 2px solid steelblue;
  background-color: #faf6d9;
}
</style>



