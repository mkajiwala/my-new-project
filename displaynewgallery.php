<!DOCTYPE html>
<html>
<head>

  <title>New Gallery TAble</title>

</head>
<body>
</body>
</html>

<?php
include("connection.php");
include("menu.php");
error_reporting(0);
$_GET['date'];
$_GET['title'];

$date =  $_GET['date'];
$title =  $_GET['title'];
//echo "$id";

$query = "SELECT * FROM  EVENT where date ='$date' ";
//$query = "SELECT * FROM  EVENT  ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

?>



<h2 align="center">Picture Gallery : <?php  echo  $title ."  ".  date('d-m-Y',strtotime($date)) ;?>  </h2>
<TABLE id="mrk" >

<caption ></caption>
<?php  
$i = 0;
 While($result = mysqli_fetch_assoc($data)) {
    
     if ($i%3 ==0) {
         echo "<tr>";
     
     }
     echo"<td><img src='{$result['source']}' height =250 width =300 alt =' {$result['title']}' ></td>";
     if ($i%3 ==2) {
     
         echo "</tr>";
     }
     $i++;
   
 }
?>



</table>

<script>
      function checkdelete()
  {
        return confirm('You want to Delete data ???');

  }
</script>

<!-- <td>".date("d-m-Y",strtotime($result['idate']))."</td> -->

<style >

#mrk tr:nth-child(even) {
 background-color: #f2f2f2;
}
h2{
    margin-top: 20px;
}



#mrk {
     border-collapse:collapse; 
     margin-top: 20px;
     margin-left: 20%;
     font:1em/1.5 sans-serif;
     }

#mrk th {
    background-color: #4caf50;
    color: white;
}
#mrk th, td {
    height: 25px;
    width: 25px;
    padding:15px;

}

#mrk th, td,tr {
    border: 3px solid grey;
}


</style>


