

<?php
include("connection.php" ); 
$id =$_GET['id'];
$query ="DELETE FROM CONTACT WHERE ID = '$id'";
$data =mysqli_query($conn,$query);

if($data)
{
       //echo "<script>alert('Record Deleted from the Table')</script>";
       echo "<font color ='Green'>Record Deleted from Table";
       ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0;http://localhost:9080/hindi/Asso%20New/displaycon.php">
       <?php      
 }
 else
 {
      echo "<font color ='Red'>Sorry Delete  Failed";
 }     
?>