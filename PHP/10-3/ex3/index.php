<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha184-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ex 1</title>
</head>
<body>
    <?php 
        $nameErr=$emailErr=$phoneErr=$websiteErr=$messageErr= "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Không được để trống";
            }else if(empty($_POST["email"])){
                $emailErr="Không được để trống";
            }else if(empty($_POST["phone"])){
                $phoneErr="Không được để trống";
            }else if(empty($_POST["website"])){
                $websiteErr="Không được để trống";
            }else if(empty($_POST["message"])){
                $messageErr="Không được để trống";
            }else{
                echo "Name:".$_POST["name"]."<br/>";
                echo "Phone:".$_POST["phone"]."<br/>";
                echo "Email:".$_POST["email"]."<br/>";
                echo "Website:".$_POST["website"]."<br/>";
                echo "Message:".$_POST["message"];
            }
        }
    ?>
    <form class="form-group" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="row">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 bg-light text-center">
                <span class="error text-danger"><?php echo $nameErr;?></span>
                <input type="text" class="form-control my-3" name="name" placeholder="Your name">
                <span class="error text-danger"><?php echo $emailErr;?></span>
                <input type="email" class="form-control my-3" name="email" placeholder="Your Email Address">
                <span class="error text-danger"><?php echo $phoneErr;?></span>
                <input type="number" class="form-control my-3" name="phone" placeholder="Your Phone Number">
                <span class="error text-danger"><?php echo $websiteErr;?></span>
                <input type="text" class="form-control my-3" name="website" placeholder="Your Web Site stars with http://">
                <span class="error text-danger"><?php echo $messageErr;?></span>
                <input type="text" class="form-control my-3" name="message" style="height: 100px" placeholder="Type your Message Here..."><br/>
                <button type="submit" class="form-control my-3 bg-danger" name="submit">SUBMIT</button>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </form>
    <?php
    ?>
</body>
</html>