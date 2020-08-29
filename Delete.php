<?php
include("connection.php" ); 
$memno =$_GET['rn'];
$query ="DELETE FROM MEMBER WHERE MNO = '$memno'";
$data =mysqli_query($conn,$query);
if($data)
{
       echo "<script>alert('Record Deleted from the Table')</script>";
       //echo "<font color ='Green'>Record Deleted from Table";
          ?>php
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/hindi/Asso/addcontact.php">
       <?      
 }
 else
 {
      echo "<font color ='Red'>Sorry Delete  Failed";
 }     


?>