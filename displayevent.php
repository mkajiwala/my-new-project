<!DOCTYPE html>
<html>
<head>
  <title>Member List</title>
 <!-- <link rel="stylesheet" type="text/css" href="mystyle1.css"> -->
</head>
<body>
</body>
</html>

<?php
include("connection.php");
include("menu.php");
error_reporting(0);
?>

<?php
$query = "SELECT * FROM CONTACT";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if ($total != 0)
{

?>
     <TABLE id="mrk" width="500px">
      <caption>Contact List</caption>
      <tr>
         <th>No</th>
         <th>Name</th>
         <th>Mobile No</th>
         <th>Catagory</th>
         <th colspan="2">Operation</th>
      </tr>

    <?php  

 While($result = mysqli_fetch_assoc($data))
  {
    Echo "
         <tr>
         <td> ".$result['id']." </td>
         <td>" .$result['name']."</td>
         <td>" .$result['mobileno']."</td>
         <td>" .$result['catagory']."</td>

         <td><a href='updatecon.php?id=$result[id]&na=$result[name]&mb=$result[mobileno]&cat=$result[catagory]'>Edit</a></td>
          
          <td><a href='Delecon.php?id=$result[id]' onclick =' return  checkdelete()'>delete</a></td> 
             
        </tr>";
   }
   }
   else
   {
   Echo "No Record Found";
   }


?>

</table>

<script>
      function checkdelete()
  {
        return confirm('You want to Delete data ???');

  }
</script>



<style >

#mrk tr:nth-child(even) {
 background-color: #f2f2f2;
}

#mrk th{
 color: black;
    
}

#mrk {
     border-collapse:collapse; 
     margin-top: 20px;
     margin-left: 30%;
     font:1em/1.5 sans-serif;
}

#mrk th {
    background-color: #4caf50;
    color: white;
}
#mrk th, td {
    height: 25px;
    width: 25px;
}

#mrk th, td,tr {
    border: 1px solid black;
}

</style>


