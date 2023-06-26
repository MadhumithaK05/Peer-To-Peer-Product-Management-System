<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Signup</title>
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
            color: black;
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
                margin-top: 12rem;
                width:50%;
                background: #fff;
                color: #6000F4;
                opacity: 0.8;
                top:55%;
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
            color: #FA45A3;
            font-size: 16px;
        }
        .btn{
            border: 2px solid #FA45A3;
            outline: none;
            height: 40px;
            background: #FFE3FB;
            color: #FA45A3;
            font-size: 18px;
            border-radius: 20px;
            transition: .1s;
            box-shadow: inset 0 0 0 0 rgb(230, 320, 120);
            width:100%;
        }
        .btn:hover{
            cursor: pointer;
            background: rgb(230, 320, 120);
            color: #6000F4;
            border: 2px solid #6000F4;
            box-shadow: inset 660px 0 0 0 rgb(130, 220, 238);
        }
        a{
            color: #FA45A3;
            text-decoration: none;
        }
        a:hover{
            color:rgb(130, 220, 238);
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
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Login</a>
                    </li>
                    </ul>
                </form>
              </div>
            </div>
          </nav>
<header>
        <h1>Peer to Peer</h1>
        <p>Buy, sell and rent easily!</p>
    </header>
    <div class="form1">
        
            <h2>Signup Form</h2>
            <form action="signup.php" method="post">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form2" name="name" aria-describedby="name" placeholder="Enter name">
                
                </div>
                <div class="form-group">
                <label for="roll">Roll Number</label>
                <input type="text" class="form2" name="roll" placeholder="Enter Roll number">
                </div>
                <div class="form-group">
                <label for="dept">Department</label>
                <input type="text" class="form2" name="dept" placeholder="Enter Department">
        
                </div>
                <div class="form-group">
                    <label for="year">Year of Studying</label>
                    <input type="text" class="form2" name="year" placeholder="Enter Year of Studying">
        
                </div>
                <div class="form-group">
                    <label for="email1">Email ID</label>
                    <input type="email" class="form2" name="email1" placeholder="Enter Email ID">
                    
        
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form2" name="pass" placeholder="Enter Password">
                    
        
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" class="form2" name="confirm" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                <label>Upload Your Profile Image</label>
            <input type="file"  name="profile" class="profile-pic"><br>
            <p> </p>
                </div>
        
                <button type="submit" name="submit" class="btn">Submit</button>
                <p>Already have an account? <a href="signin.php">Login</a></p>
            </form>
       
    </div>
</body>
</html>
<?php
    include("conn.php");
    if(isset($_POST["submit"])){
        $username=$_POST["name"];
        $rno=$_POST["roll"];
        $dept=$_POST["dept"];
        $year=$_POST["year"];
        $emailid=$_POST["email1"];
        $pwd=$_POST["pass"];
        $conpwd=$_POST["confirm"];

        $image=$_FILES['profile']['name'];
        $tmp_name=$_FILES['profile']['tmp_name'];
        $destination="pic/".$image;
        move_uploaded_file($tmp_name,$destination);

        if(empty($username) || empty($rno) || empty($dept) || empty($year) || empty($emailid) || empty($pwd) || empty($conpwd)){
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
            $chk="select Password from Users where Email_Id='$emailid'";
            $res=mysqli_query($conn, $chk);
            $acc=mysqli_fetch_assoc($res);
            if($acc["Password"] != null){
                ?>
                <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Already Registered!</strong> 
                </div>
            </div>
            <?php
            }
        elseif($pwd == $conpwd){
        $sql="insert into users(Name, Roll_No,propic, Department, Year, Email_Id, Password)
        values ('$username', '$rno','$image', '$dept', '$year', '$emailid', '$pwd')";

        mysqli_query($conn, $sql);
        ?>
        <div class="mess">
                <div class="alert" style="background-color: lime;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Successfully Registered!</strong> 
                </div>
            </div>
            <?php
        }
        else{
?>
            <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Password and Confirm Password should be equal!</strong> 
                </div>
            </div>
<?php
        }
    }
    }

    mysqli_close($conn)
?>
