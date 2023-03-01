<?php
 $conn=mysqli_connect("localhost","root","","book_db");
 if(!$conn)
 {
    die("connection failed" .mysqli_connect_error());
 }

  $id=$_GET['id'];

  $query="DELETE from customer where id='$id'";
  $sql=mysqli_query($conn,$query);

  if($sql==true)
  {
      header("location:customer.php");
  }
  else{
      echo"<script>alert('sorry server not repsonding')</script>";
  }
?>