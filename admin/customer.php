<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <section>
      <?php
       $conn=mysqli_connect("localhost","root","","book_db");
       if(!$conn)
       {
          die("connection failed" .mysqli_connect_error());
       }  
      
      $query="SELECT * from customer";
      $result=mysqli_query($conn,$query);
      $total=mysqli_num_rows($result);
      if($total != 0)
      {        
      ?>
       <div class="content1">

           <h2 align=center>CUSTOMERS DETAILS</h2>
           <table cellspacing=7 align=center class="table1">
               <tr>
                   <th width="10%">Name</th>
                   <th width="10%">Email</th>
                   <th width="10%">Phone</th>
                   <th width="10%">address</th>
                   <th width="10%">location</th>
                   <th width="5%">guest</th>
                   <th width="12%">arrivals</th>
                   <th width="13%">leaving</th>
                   <th width="10%">operation</th>
                </tr>
            </div>
                
      <?php
     while($data=mysqli_fetch_assoc($result))
     {
        echo "<tr>
                 <td>".$data["name"]."</td>
                 <td>".$data["email"]."</td>
                 <td>".$data["phone"]."</td>
                 <td>".$data["address"]."</td>
                 <td>".$data["location"]."</td>
                 <td>".$data["guest"]."</td>
                 <td>".$data["arrivals"]."</td>
                 <td>".$data["leaving"]."</td>
                 <td><a href='delete_customer.php?id=$data[id]'>delete</a></td>

            </tr>";
 
     }
 }
 
 else
 {
     echo "no records found";
 }
 ?>
</table>
</section>
</body>
</html>