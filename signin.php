<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $username = $password = " ";
    $usernameerr = $passworderr = " ";

    IF($_SERVER["REQUEST_METHOD"] == "POST" ){
         if(empty($_POST["username"])){
            $usernameerr = "FILL UP THIS FORM !!";
         }
         else{
            $username = $_POST["username"];
         }
         if(empty($_POST["password"])){
            $passworderr = "FILL UP THIS FORM !!";
         }
         else{
            $password = $_POST["password"];
         }
    }
?>
<style>
    section{
        border: 3px solid greenyellow;
        height: 90vh;
        width: 100%%;
    }
    .login{
        float: right;
    }
    .login{
        background-color: darksalmon;
        width: 50%;
        height: 90vh;   
    }
    .signup{
            background-color: rgb(232, 39, 39);
            width: 50%;
            height: 90vh;                              
    }
    .input{    
        width:fit-content;
        position: relative;
        top: 5cm;
        left: 6cm;
    }
    .input2{
       
        width: fit-content;
        position: relative;
        top: 5cm;
        left: 4cm;
    }
    input{
        border: 2px solid black;
    }
    .error{
        color: red;

    }
</style>
<body>
    <section>
        <FORM method = "POST" action = "<?pHp htmlspecialchars("PHP_SELF");?>">
        <div class="container">
                <div class="login">
                    <div class="input">
                     <input type="text" name="username" placeholder="Username" value = "<?php $username; ?>"><br>
                     <span class = "error" ><?php echo$usernameerr; ?> </span><br>
                     <input type="password" name="password" placeholder="password" value = "<?php $passworderr; ?>"><br>
                     <span class = "error"><?php echo$passworderr; ?> </span><br>
                     <button type="submit">Log in</button>
                     </div>
                </div> 
                <div class="signup">
                    <div class="input2">
                     <input type="text" name="fname" placeholder="Firstname">
                      <input type="text" name="lname" placeholder="Lstname"><br>
                     <input type="text" name="age" placeholder="age">
                        <input type="text" name="bdate" placeholder="Birthdate"><br>
                     <input type="text" name="gender" placeholder="Gender"><br>
                     <input type="text" name="username" placeholder="Username"><br>
                     <input type="password" name="password2" placeholder="password"><br>
                     <button type="submit">Creat Account</button>
                    </div>
                </div>           
        </div>
    </section>
</body>
</html>