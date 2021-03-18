<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>exercise 1</title>
    </head>
    <body>
        <?php 
        $usernameErr = $passwordErr ="";
        $username = $password="";
        if($_SERVER["REQUEST_METHOD"] =="POST"){
            if (empty($_POST["userName"])){
                $usernameErr="không được để trống";
            }else{
                $username = test_input($_POST["userName"]);
            }
            if (empty($_POST["passWord"])){
                $passwordErr= "không được để trống";
            }else{
                 $password= test_input($_POST["passWord"]);
            }   
        }
        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="container my-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2 class="bg-success text-center py-3">Sign in</h2>
                <span class="text-danger"><?php echo $usernameErr; ?></span>
                <input class="form-control mb-2" type="text" name="userName" placeholder="username"><br>
                <span class="text-danger"><?php echo $passwordErr;?></span>
                <input class="form-control mb-2" type ="password" name="passWord" placeholder="password">
                <button type="submit" class="btn btn-success col-12">Login</button>
            </form>
        </div>
        <?php
            if($username=="admin" && $password=="admin"){
                echo "Tên người dùng là: ".$username;
            }else{
                echo "Sai thông tin ! ";
            }
        ?>
    </body>
</html>