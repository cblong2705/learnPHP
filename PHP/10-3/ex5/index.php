<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>exersice 5t</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <form action="<?=$_SERVER["PHP_SELF"]?>" class="form-inline" method="POST">

                    <h5>Search String</h5>
                    <input type="text" name="string" class="form-control" placeholder="ENTER SEARCH STRING">
                    <br>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
        </div>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $lowerString="";
    $stringg=$_POST["string"];
    if (!isset($stringg)){
        echo "value is not  null";
    }else{
        $lowerString=strtolower($stringg);
        for ($i=0;$i<strlen($lowerString);$i++){
            if ($lowerString[$i]=="a"||$lowerString[$i]=="e"||$lowerString[$i]=="i"||$lowerString[$i]=="u"||$lowerString[$i]=="o"){
                echo $lowerString[$i];
            }
        }
    }
}
?>