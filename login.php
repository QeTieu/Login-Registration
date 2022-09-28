<?php
    
include("connect.php");
 
if(isset($_POST['login'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM REGISTER WHERE username='"
    . $_POST["username"] . "' AND
    password='" . $_POST["pwd"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:check.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>
<html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
            <div class="row justify-content-center">
                <form class="row md-6" method="post" action="login.php" name="frm1">
                    <div class="col-md-12">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="username" name="username" required />
                            <label class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="password" name="password" aria-describedby="inputGroupPrepend2" required />
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" name="login"">Login</button>
                    </div>
            </div>
    </div>
</body>
 
</html>