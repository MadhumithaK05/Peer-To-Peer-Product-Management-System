<?php
    session_start();
?><?php
include 'conn.php';
$id=$_GET['id'];


?>
<html>
    <head>
    <title>Edit Details</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
        .container{
                margin-top: 20rem;
                width:50%;
                background: #fff;
                color: #6000F4;
                opacity: 0.8;
                top:30%;
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
          width:100%;
            outline: none;
            height: 40px;
            background: #FFE3FB;
            color: #FA45A3;
            font-size: 18px;
            border: 2px solid #FA45A3;
            border-radius: 20px;
            transition: .1s;
            box-shadow: inset 0 0 0 0 rgb(230, 320, 120);
            
        }
        .btn:hover{
            cursor: pointer;
            background: rgb(230, 320, 120);
            color: #6000F4;
            border: 2px solid #6000F4;
            box-shadow: inset 660px 0 0 0 rgb(130, 220, 238);
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
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome <?php echo $_SESSION["Username"];?></a>
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
       
         <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Buy Product</h1>
                <div class="content">
                    <div>
                        <label for="name">Name</label>
                        <input class="form2" type="text" name="name" placeholder="name">
                    </div>
                    <div>
                        <label for="year">Year</label>
                        <input class="form2" type="text" name="year" placeholder="year">
                    </div>
                    <div>
                        <label for="descr">Department</label>
                        <input class="form2" type="text" name="dept" placeholder="department">
                    </div>
                    <div>
                        <label for="price">Product Name</label>
                        <input class="form2" type="text" name="pro" placeholder="product name">
                    </div>
                   
                   
                </div>
                
                    <input class="btn" type="submit" name="insertbtn" value="Submit">
                
            </form>
            
          </div>
          
        
    </body>


</html>
<?php
    error_reporting(E_ERROR | E_PARSE); 
    include 'conn.php';
    if(isset($_POST['insertbtn']))
    {   
        $na=$_POST['name'];
        $yr=$_POST['year'];
        $dp=$_POST['dept'];
       
        $pn=$_POST['pro'];
        

        $name=$_SESSION["Username"];
        $mail=$_SESSION["Email"];

        if(empty($na) || empty($yr) || empty($dp) || empty($pn)){
            ?>
            <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>All Feilds should be filled</strong> 
                </div>
            </div>
            <?php
        }
        else{
        $insert="insert into buydet(pid,name,year,dept,pname) values('$id','$na','$yr','$dp','$pn')";
        $insert_q=mysqli_query($conn,$insert);
        if($insert_q)
        {
            $status="No";
            $update="update sell set Available='$status' where pid='$id'";
            $update_q=mysqli_query($conn,$update);
?>
            <div class="mess">
                <div class="alert" style="background-color: lime;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Product bought!</strong> 
                </div>
            </div>
 <?php          
        }
        
        else{
           
?>
             <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Data is not inserted successfully!</strong> 
                </div>
            </div>
<?php

        }
    }
    }
?>