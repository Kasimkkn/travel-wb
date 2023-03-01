<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<link rel="stylesheet" href="adminstyle.css">
<body>
<section>
<?php
     $conn=mysqli_connect("localhost","root","","book_db");
     if(!$conn)
     {
        die("connection failed" .mysqli_connect_error());
     }
    
     $query = "SELECT * FROM admin";
     $result=mysqli_query($conn,$query);

     $total=mysqli_num_rows($result);

     if($total != 0)
     {
      ?>
       <div class="content">

           <h2 align=center>TOTAL ADMINS HERE</h2>
           <table cellspacing=7 align=center color=white class="table">
               <tr>
                   <th width="10%">ID</th>
                   <th width="20%">Email</th>
                   <th width="10%">Username</th>
                   <th width="10%">Password</th>
                   <th width="10%">Confirm Password</th>
                   <th width="30%">operation</th>
                   
                </tr>
            </div>
           
     <?php
     while($data=mysqli_fetch_assoc($result))
     {
        echo "<tr>
                 <td>".$data["id"]."</td>
                 <td>".$data["email"]."</td>
                 <td>".$data["username"]."</td>
                 <td>".$data["password"]."</td>
                 <td>".$data["confirm_password"]."</td>
                 <td><a href='update.php?id=$data[id]'>update</a></td>
            </tr>";
 
     }
 }
 else
 {
     echo "no records found";
 }
 ?>
 </table>

 <div class="usertable">
     <button class="btn"><a href="customer.php">CLICK HERE TO SEE YOUR CUSTOMER'S DETAILS</a></button>
 </div>
</section>
</body>
</html>

 