m<!DOCTYPE html>
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
$query = "SELECT * FROM EVENT";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if ($total != 0)
{

?>
     <TABLE id="mrk" width="500px">
      <caption>Event List</caption>
     <colgroup>
         <col span="1" style="width: 20%;">
         <col span="1" style="width: 35%;">
         <col span="1" style="width: 20%;">
         <col span="1" style="width: 20%;">
         <col span="1" style="width: 10%;">
         
      </colgroup>

      <tr>
         <th>Date</th>
         <th>Subject</th>
         <th>Venue</th>
         <th>Speaker</th>
         <th colspan="1">Operation</th>
      </tr>

    <?php  

 While($result = mysqli_fetch_assoc($data))
  {
    Echo "
         <tr>
         <td>".date("d-m-Y",strtotime($result['date']))."</td>
         <td>" .$result['title']."</td>
         <td>" .$result['venue']."</td>
         <td>" .$result['speaker']."</td>

         
         <td><a href='displaynewgallery.php?date=$result[date]&title=$result[title]'>List</a></td>

                        
        </tr>";
   }
   }
   else
   {
   Echo "No Record Found";
   }


?>

</table>




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


