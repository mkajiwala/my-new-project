
<?php
include("connection.php");
include("menu.php");
error_reporting(0);
?>


<html>
<head>
 <link rel="stylesheet" type="text/css" href="mystyle1.css">   

   

<?php

$query = "SELECT * FROM MEMBER";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if ($total != 0)
{
    ?>

    <TABLE id="mrk" width="500px">
      <caption>Members List</caption>
      <tr>
        
         <th>Mem No</th>
         <th>Name</th>
         <th>Mobile No</th>
         <th>industry</th>
         <th>Catagory</th>
         <th colspan="2">Operation</th>
      </tr>

    <?php  

 While($result = mysqli_fetch_assoc($data))
  {
    Echo "
         <tr>
         
         <td> ".$result['memberno']." </td>
         <td>" .$result['name']."</td>
         <td>" .$result['mobile']."</td>
         <td>" .$result['industry']."</td>
         <td>" .$result['catagory']."</td>

         <td><a href='update.php?mn=$result[memberno]&nm=$result[name]&mb=$result[mobile]&indu=$result[industry]&cat=$result[catagory]'>Edit</a></td>
          
          <td><a href='Delete.php?mn=$result[memberno]' onclick =' return  checkdelete()'>delete</a></td> 
             
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


