<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top:30px;">
        <div class="row">  
            <div class="col-md-6">
                <h1>Employee Information</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="ដាក់ email" name="email">
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="បញ្ចូល​ password" name="pwd">
                        </div>
                        <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>                     
                    </form>     

                <hr>
                <?php 
                    if(!empty($_POST['email'])) {    
                        //echo "Greetings, {$_POST['name']}, and welcome.";  
                        $email=$_POST['email'];     //  $email;        
                        echo " Your email <strong>{$email}</strong>";
                    } 
                    if(!empty($_POST['pwd'])){
                        $pwd=$_POST['pwd']; // string pwd;   
                        
                        echo "Your password <strong>{$pwd}</strong>. ";
                    }

                   // echo " Your email <strong>{$email}</strong>, and your password <strong>{$pwd}</strong>. ";

                ?>       
            </div>
            <div class="col-md-6">
                <img style="width:100%;" src="image/php_file.png" alt="">            
            </div>
        </div>
    
    </div>
</body>
</html>