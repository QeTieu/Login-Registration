<?php 
    include("connect.php");
    
    if(isset($_POST['submit'])) {
        $query = mysqli_query($conn,
        "INSERT INTO REGISTER SET fullname ='"
        . $_POST["fullname"] . "',username ='"
        . $_POST["username"] . "'    ,email     ='"
        . $_POST["email"] . "'        ,address ='"
        . $_POST["address"] . "',mobile     ='"
        . $_POST["mob"] . "'        ,password ='"
        . $_POST["pwd"] . "'        ");
      
?>
<script>
    alert('You Registered Successfully, Login now');
</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <a href="login.php">
        Login
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <form class="row md-6" method="post" action="index.php" name="frm1">
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="fullname" name="fullname" required />
                        <label class="form-label">Full name</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend2" required />
                        <label class="form-label">Username</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="password" class="form-control" id="pwd" name="pwd" aria-describedby="inputGroupPrepend2" required />
                        <label class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="email" name="email" required />
                        <label class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="adddress" name="address" required />
                        <label class="form-label">Address</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="tel" class="form-control" id="mob" name="mob" required />
                        <label class="form-label">Mobile Nombor</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                        <label class="form-check-label">Agree to terms and conditions</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
        </div>
        </form>
</body>

</html>