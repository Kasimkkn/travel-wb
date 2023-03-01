<?php
    
    $conn=mysqli_connect("localhost","root","","book_db");
    if(!$conn)
    {
       die("connection failed" .mysqli_connect_error());
    }

    $id=$_GET['id'];
    $query="SELECT * FROM admin where id='$id'";
    $sql=mysqli_query($conn,$query);
     $total=mysqli_num_rows($sql);
     $result=mysqli_fetch_assoc($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signupstyle.css">
</head>
<body>
<section>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      
    
      <div class="signin">
         <div class="content">
            <h2>update here</h2>

                <form method="post" action="#" class="form">
                    <div class="inputbox">
                        <input type="email" required name="email" value="<?php echo $result['email']?>">
                  <i>Email</i>
                   </div>
               <div class="inputbox">
                  <input type="text" required name="username" value="<?php echo $result['username']?>">
                  <i>username</i>
                </div>
               <div class="inputbox">
                   <input type="text" required name="password" value="<?php echo $result['password']?>">
                   <i>password</i>
                </div>
                <div class="inputbox">
                    <input type="password" required name="cpassword" value="<?php echo $result['confirm_password']?>">
                    <i> confirm password</i>
                </div>
                <div class="inputbox">
                    <a href="#"></a><input type="submit" value="update" name="update">
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php
    if(isset($_POST['update']))
    {
        $email=$_POST['email'];
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];

        $query="UPDATE admin SET email='$email',username='$user',password='$pass',confirm_password='$cpass' where id=$id";
        $sql=mysqli_query($conn,$query);
        
    }

?>

