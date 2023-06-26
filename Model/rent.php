<?php
         include 'insrent.php';
?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>Rent</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            margin:0.2rem;
            
            
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
        .Rent{
                margin-top: 25rem;
                width:50%;
                background: #fff;
                color: #6000F4;
                opacity: 0.8;
                top:37%;
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
            outline: none;
            height: 40px;
            background: #FFE3FB;
            color: #FA45A3;
            font-size: 18px;
            border: 2px solid #FA45A3;
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
      textarea{
        width: 100%;
        height: 100px;
        padding: 5px 10px;
        box-sizing: border-box;
        border: 2px solid #FFE3FB;
        border-radius: 4px;
        background-color: #fff;
        color: #FA45A3;
        font-size: 16px;
        resize: none;
      }
      .Rent select:hover{
        cursor: pointer;
        background: rgb(130, 220, 238);
        color: #6000F4;
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
          <div class="Rent">
            <h2>Rent</h2>
            <form action="" method="POST" enctype="multipart/form-data">
              <label>Product Name</label> 
              <input type="text" class="form2" name="pn" placeholder="Enter Product Name" ><br>
              <label>Product Type</label>
              <select name="ptype" class="btn" id="ptype">
                  <option value="" disabled selected>Select Product Type</option>
                  <option value="SB">Subject Books</option>
                  <option value="Materials">Materials</option>
                  <option value="Lab">Lab Related Materials</option>
                  <option value="Stationary">Stationary Items</option>
              </select>
              <p> </p>
              <label>Description</label>
              <textarea name="descr"></textarea>
              <p></p>
              <label>Due Date</label>
              <input type="date" class="form2" name="due" placeholder="Enter Due Date">
              <label>Price per Day</label>
              <input type="text" class="form2" name="price" placeholder="Enter Price"><br>
              <label>Upload Product Image</label>
              <input type="file" name="propic" required><br>
              <p></p>
              <input type="submit" name="insertbtn" class="btn" >
            </form>
        </div>
        
    </body>
</html>