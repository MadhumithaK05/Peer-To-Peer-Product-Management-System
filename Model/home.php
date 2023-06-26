<?php
    session_start();
?>
<?php
include("conn.php");
$email=$_SESSION["Email"];
$sql="select propic from Users where Email_Id='$email'";
$ress=mysqli_query($conn, $sql);
$acc=mysqli_fetch_array($ress);
$img=$acc['propic'];
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
        body{
          font-family: sans-serif;
          margin: 0;
          padding:0;
        }
        #intro{
            background-image: url("https://img.freepik.com/free-vector/watercolor-back-school-background-with-white-space_52683-41450.jpg?w=740&t=st=1686985513~exp=1686986113~hmac=94ab64d57a85b57aec05492a23a6d1bc613293016e6b48dd5ad8214e909b54a7");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            text-align: center;
            padding:18rem;
        }
        .navbar{
          position:sticky;
        }
        .content{
          z-index: 10; 
          position: absolute; 
          border:solid 1px #FFE3FB;
          border-radius: 50%;
          top:60%;
          left:50%;
          transform :translate(-50%,-50%);
          width: 40%;
          background-color: #FFE3FB;
          padding: 2rem;
          
        }
        
        #about{
          padding:3rem;
          font-size: 22px;
          background-image: linear-gradient(rgb(255, 255, 255),#FFE3FB);
        }
        #bsr{
          padding:3rem;
          background-image: linear-gradient(#FFE3FB,rgb(66, 184, 207));
        }
        #view{
          padding: 3rem;
          padding-bottom: 17rem;
          background-image: linear-gradient(rgb(66, 184, 207),#FFE3FB 60%);
        }
        img{
          object-fit: cover;
    border-radius: 50%;
    width: 40px;
    height: 40px;
        }
        h2,p{
          font-family: cursive;
        }
        .col {
          padding: 30px 10px;
        }
        .card {
          background-color: #fff;
          opacity: 0.8;
          color: #fff;
        }
        .btn{
          background-color: #fff;
          text-align: center;
          width: 50%;
        }
        footer{
    
          padding:1rem ;
          background-color: black;
          
       }
       .col2{
        position: absolute;
        left:115px;
        margin-top: 2rem;
       }
       li{
        margin: 2rem;
        list-style-type: none;
        
       }
       a{
        text-decoration: none;
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
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="users.php">Chat</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><img src="pic/<?php echo $img;?>" alt="">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                    </ul>
                </form>
              </div>
            </div>
          </nav>
    <section id="intro">
          <div class="content">
            <h2>Peer to Peer</h1>
            <p>Buy,sell and rent easily!</p>
          </div>
          
        </section>
        <section id="about">
          <h2>About</h2>
          <div class="con2">
            <p>
              Peer To Peer is a web application where you can sell,rent and request products to your peers.It is a user friendly application which is easy to use and understand.
              You can also buy the product,fulfill other's demand and purchase the rental product.The products are well distinguished for convinient usage of the application.
              
            </p>
            
          </div>


        </section>
        <section id="bsr">
          <h2>Sell,Request and Rent Products</h2>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                    <p style="text-align:center;font-size:18px;" >SELL PRODUCTS</p>
                    <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                      
                      <p class="card-text" style="color:white;font-size:18px;">Sell Products to your peers by filling a form about the product details.The details of the product include name,type,price and image.</p><br>
                      
                    </div>
                    <div class="card-body">
                        <a href="sell.php"><input type="submit" value="Sell" class="btn"></a>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                  <p style="text-align:center;font-size:18px;" >RENT PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">Rent Products to your peers by filling a form about the product details.The details of the product include name,type,price per day,due date and image.</p><br>
                    
                  </div>
                  <div class="card-body">
                    <a href="rent.php"><input type="submit" value="Rent" class="btn"></a>
                  </div>
                </div>
                
              </div>
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                  <p style="text-align:center;font-size:18px;" >REQUEST PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">Request Products by filling a form about the product details.The details include product name and image.The demand will be fulfilled by your peers.</p>

                  </div>
                  <div class="card-body">
                    <a href="request.php"><input type="submit" value="Request" class="btn"></a>
                  </div>
                
                </div>
              
          
            </div>
            <div class="col1">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                  <p style="text-align:center;font-size:18px;" >DONATE PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">Donate Products by filling a form about the product details.The details include product name and image.</p>

                  </div>
                  <div class="card-body">
                    <a href="donate.php"><input type="submit" value="Donate" class="btn"></a>
                  </div>
                
                </div>
              </div>

          </div>
        </section>
        <section id="view">
          <h2>Buy,Fulfill demand and Purchase Rental Products</h2>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                    <p style="text-align:center;font-size:18px;" >BUY PRODUCTS</p>
                    <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                      
                      <p class="card-text" style="color:white;font-size:18px;">Buy Products from your peers.</p><br>
                      
                    </div>
                    <div class="card-body">
                        <a href="buy.php"><input type="submit" value="Buy Product" class="btn"></a>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4;">
                  <p style="text-align:center;font-size:18px;" >VIEW RENTAL PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">View and buy rental products that have a due date.</p><br>
                    
                  </div>
                  <div class="card-body">
                    <a href="takingrent.php"><input type="submit" value="Rent Product" class="btn"></a>
                  </div>
                </div>
                
              </div>
              <div class="col">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                  <p style="text-align:center;font-size:18px;" >REQUESTED PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">Fulfill Products that were reqested by your peers.</p>
                  </div>
                  <div class="card-body">
                    <a href="demand.php"><input type="submit" value="Fulfill Product" class="btn"></a>
                  </div>
                
              </div>
              <div class="col2">
                <div class="card" style="width: 19rem;background-color:#9971d4">
                  <p style="text-align:center;font-size:18px;" >DONATED PRODUCTS</p>
                  <div class="card-body" style="border-top: solid 3px rgb(233, 224, 224);">
                    
                    <p class="card-text" style="color:white;font-size:18px;">Take offers that were given by your peers.</p>
                  </div>
                  <div class="card-body">
                    <a href="viewdon.php"><input type="submit" value="Donated Product" class="btn"></a>
                  </div>
                
              </div>
              
          
            </div>
              
          
            </div>

          </div>


        </section>
        <footer>
          <p style="color:white;font-size:20px;font-family:Arial;">Peer To Peer</p>
          <ul>
            <a href="#intro"><li href="#intro" style="color:white;">Home</li></a>
            <a href="#about"><li href="#about" style="color:white;">About</li></a>
          </ul>

  
        </footer>
        
    </body>
</html>
<?php

?>