<?php

   include_once('function.php');

   $updatedata = new DB_con();
   

    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
     
        $sql = $updatedata -> Update($fname, $lname,$email ,$phonenumber,$address,$userid );

        if ($sql) {
            echo "<script>alert('Insert success')</script>";
            echo"<script>window.location.href='index.php'</script>";
        
        }else{
            echo "<script>alert('update failed please try again')</script>";
            echo"<script>window.update.href='insert.php'</script>";
        
}
 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
    
<div class="container">
    <h1 class="my-5">Update Page</h1>
    <div class="container button" style="text-align: right;">
        <a href="index.php" class="btn btn-secondary">back</a>
        </div>
    <hr>
    <?php
        $userid = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchinerecord($userid);
        while($row = mysqli_fetch_array($sql)) {
    ?>
      <form action="" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" 
                value="<?php echo $row['firstname'] ;?>" required>
                </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname"
                value="<?php echo $row['lastname'] ;?>" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"
                value="<?php echo $row['email'] ;?>" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" 
                value="<?php echo $row['phonenumber'] ;?>"required>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea type="address" cols="30" row="10" class="form-control" name="address"
              required><?php echo $row['address'] ;?></textarea>
            </div>
        <?php 
                } 
        ?>
                <button type="submit" name="update"  class="btn btn-success">Update</button>
        </form>
       
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>