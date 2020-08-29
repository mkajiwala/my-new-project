<?php
include("connection.php");
include("menu.php");
error_reporting(0);
?>


<html>
<head>
 <link rel="stylesheet" type="text/css" href="mystyle.css">
 <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
 <script src= "js/lightbox.plus.jquery.min "></script>
  <!-- <link rel="stylesheet" type="text/css" href="mystyle.css">    -->
   
<title> Large Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width,initial-scale=1.0"> 
</head>
<body>

  <div class=gallery>
<h1 align="center">Event Picture Gallery</h1>
    <a href="gallery/jt.jpg" data-lightbox = "mygallery"data-title="Dr J.T"><img src="gallery/jt-small.jpg"></a>
    <a href="gallery/lanka.jpg" data-lightbox= "mygallery" data-title ="colombo"><img src="gallery/lanka-small.jpg"></a> <a href="gallery/harb.jpg" data-lightbox= "mygallery" data-title ="hars"><img src="gallery/hars.jpg"></a>  
  
    

  </div>
  
</body>
</html>
   

<style >

#mrk tr:nth-child(even)
{
    background-color: #f2f2f2;

}

#mrk th
{
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


