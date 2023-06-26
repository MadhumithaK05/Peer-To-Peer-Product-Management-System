<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Forgot</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
       
<style>
    body{
            background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?q=10&h=200");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        header{
            padding: 1rem;
            padding-bottom: 0;
            text-align:center;
            margin:0.5rem;
            
            
        }
        h1,h2{
            font-family: 'Gill Sans';
            text-align:center;
        }
        h2{
            color:#FF08E5;
            padding: 0.5rem;
        }
        p{
            font-weight: bold;
            font-size: 14px;
            
            
        }
        .mess{
            position: fixed;
            margin:0 auto;
            top: 160px;
            left: 620px;
            width: 200px;
            border-radius: 0.5px;
            justify-content: center;
            }
            .alert {
                padding: 20px;
                margin: 0 auto;
                
                color: black;
            }
            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            .closebtn:hover {
            color: black;
            }
        .form1{
                
                width:400px;
                background: #fff;
                color: #6000F4;
                opacity: 0.8;
                top:60%;
                left:50%;
                position: absolute;
                box-sizing:border-box;
                transform :translate(-50%,-50%);
                border-radius: 15px;
                padding: 20px 30px;
        }
        
        .form2{
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #FFE3FB;
            background: transparent;
            outline: none;
            height: 40px;
            color: #FA45A3;;
            font-size: 18px;
        }
        .btn{
            border: none;
            outline: none;
            height: 40px;
            background: #FFE3FB;
            color: #FA45A3;
            font-size: 18px;
            border-radius: 20px;
            transition: .2s;
            box-shadow: inset 0 0 0 0 rgb(230, 320, 120);
            width:100%;
        }
        .btn:hover{
            cursor: pointer;
            background: rgb(230, 320, 120);
            color: #6000F4;
            box-shadow: inset 340px 0 0 0 rgb(130, 220, 238);
        }
        a{
            text-decoration: wavy;
            font-size: 14px;
            line-height: 20px;
            color: #6000F4;
        }
        a:hover{
            color: #FA45A3;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Peer To Peer</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<header>
        <h1>Peer to Peer</h1>
        <p>Buy, sell and rent easily!</p>
    </header>
    <div class="form1">
        
            <h2>Reset Password</h2>
            <form action="forgot.php" method="post">
                <div class="form-group">
                    <label for="email1">Email ID</label>
                    <input type="email" class="form2" name="email1" placeholder="Enter Email ID">
                </div>
                <div class="form-group">
                    <label for="pass">New Password</label>
                    <input type="password" class="form2" name="pass" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="pass">Confirm Password</label>
                    <input type="password" class="form2" name="conpass" placeholder="Enter Password">
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
                <p><br></p>
                <a href="signup.php">Don't Have an Account ?</a><br><br>
                <a href="signin.php">Login ?</a>
            </form>
        
    </div>
</body>
</html>

<?php
    include("connection.php");

    if(isset($_POST["submit"])){
    $logemail=$_POST["email1"];
    $logpwd=$_POST["pass"];
    $conpwd=$_POST["conpass"];
    if(empty($logemail) || empty($logpwd) || empty($conpwd)){
        ?>
                   <div class="mess">
                        <div class="alert" style="background-color: #f44336;">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>All Fields should be Filled</strong> 
                        </div>
                    </div>
        <?php
                }
                else{
    $sql= "select Password from Users where Email_Id='$logemail'";
    $res=mysqli_query($conn, $sql);
    $acc=mysqli_fetch_assoc($res);

    if($logpwd != $conpwd && $logpwd!=null && $conpwd!=null){
?>

            <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Password and Confirm Password should be equal</strong> 
                </div>
            </div>
<?php
    }
    elseif($acc["Password"] == null){

        ?>
        <div class="mess">
           <div class="alert" style="background-color: #f44336;">
                   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                   <strong>Not Registered!</strong> 
           </div>
       </div>
<?php

    }
    else{
        $change="update Users set Password='$logpwd' where Email_Id='$logemail'";
        $exe_query=mysqli_query($conn, $change);
        ?>
        <div class="mess">
           <div class="alert" style="background-color: lime;">
                   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                   <strong>Password Changed Successfully!</strong> 
           </div>
       </div>
<?php

    }
    }
}
    mysqli_close($conn);
?>