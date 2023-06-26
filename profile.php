<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
          body{
            background-image: linear-gradient(#FFE3FB,rgb(66, 184, 207));
            background-repeat: no-repeat;
            background-size: contain;
          }
          .content{
            margin:2rem 5rem;
            
            
          }
          table{
            background-color: plum;
            text-align: center;
          }
          .intro{
            margin:2rem 5rem;
            
            padding:2rem;
            text-align: center;
            background-color: plum;
            width: 40%;
            border:plum solid 1px;
            border-radius: 5px;
            font-size: 18px;
          }
          a{
            color:black;
            text-decoration: none;
          }
          a:hover{
            color:white;
          }
          h2{
            margin:1rem;
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                    </ul>
                </form>
              </div>
            </div>
          </nav>
          <h2>Your Product Summary</h2>
          <div class="intro">
          <?php
           include 'conn.php';
           $mail=$_SESSION["Email"];
           $sql="select * from sell where email='$mail' ";
           if ($result=mysqli_query($conn,$sql))
           {
  
              $rowcount=mysqli_num_rows($result);
              
           }
           $sql1="select * from rent where email='$mail'";
           if ($result1=mysqli_query($conn,$sql1))
           {
  
              $rowcount1=mysqli_num_rows($result1);
              
           }
           $sql2="select * from request where email='$mail'";
           if ($result2=mysqli_query($conn,$sql2))
           {
  
              $rowcount2=mysqli_num_rows($result2);
              
           }
          ?>
          <p id="sale">Number of products for sale: 
          <?php echo $rowcount; ?>
          </p>
          <p id="rent">Number of products for rent:
            <?php echo $rowcount1; ?></p>
          <p id="request">Number of products for request:
            <?php echo $rowcount2; ?></p>
          </div>
            <?php
        include 'conn.php';
        
        $select="select * from sell where email='$mail'";
        $select_q=mysqli_query($conn,$select);
        $data=mysqli_num_rows($select_q);
        ?>
        <div class="content">
        <h5>Your Products for Sale </h5>
        <?php
        if($data)
        {
          ?>
          <table border="1px" cellspacing="0" cellpadding="10px">
          <tr>
              <th>Product Name</th>
              <th>Product Type</th>
              <th>Description</th>
              <th>Price</th>
              <th>Product Image</th>
              <th colspan="2">operations</th>
              <th>Sold?</th>
          </tr>
          <?php
            while($row=mysqli_fetch_array($select_q))
            {
                ?>
                <tr>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['ptype']?></td>
                    <td><?php echo $row['descrip']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><img src="sell/<?php echo $row['pimg']?>" width="80px"></td>
                    <td><a href="editsell.php?id=<?php echo $row['pid']?>">Edit</a></td>
                    <td><a href="delsell.php?id=<?php echo $row['pid']?>">Delete</a></td>
                    <td><?php if($row['Available']=="No"){
                      echo "Yes";}
                      else{
                        echo "No";}?></td>
                </tr>
        <?php
            }
        }
        else
        {
            ?>
            <div class="mess">
                        <div class="alert" style="background-color: green;">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>No record found in Sell</strong> 
                        </div>
            </div>
            <?php
        }
        ?>
        </table>
        </div>    
        <?php
        include 'conn.php';
        $select="select * from rent where email='$mail'";
        $select_q=mysqli_query($conn,$select);
        $data=mysqli_num_rows($select_q);
        ?>
        <div class="content">
        <h5>Your Products for Rent </h5>
        <?php
        if($data)
        {
          ?>
          <table border="1px" cellspacing="0" cellpadding="10px">
            <tr>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Price</th>
                <th>Product Image</th>
                <th colspan="2">operations</th>
                <th>Rented?</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($select_q))
            {
                ?>
                <tr>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['ptype']?></td>
                    <td><?php echo $row['descrip']?></td>
                    <td><?php echo $row['due']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><img src="images/<?php echo $row['pimg']?>" width="80px"></td>
                    <td><a href="editrent.php?id=<?php echo $row['pid']?>">Edit</a></td>
                    <td><a href="delrent.php?id=<?php echo $row['pid']?>">Delete</a></td>
                    <td><?php if($row['Available']=="No"){
                      echo "Yes";}
                      else{
                        echo "No";}?></td>
                </tr>
        <?php
            }
        }
        else
        {
            ?>
            <div class="mess">
                        <div class="alert" style="background-color: green;">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>No record found</strong> 
                        </div>
            </div>
            <?php
        }
        ?>
        </table>
        </div> 
        <?php
        include 'conn.php';
        $select="select * from request where email='$mail'";
        $select_q=mysqli_query($conn,$select);
        $data=mysqli_num_rows($select_q);
        ?>
        <div class="content">
        <h5>Products you Requested</h5>
        <?php
        if($data)
        {
          ?><table border="1px" cellspacing="0" cellpadding="10px">
          <tr>
              <th>Product Name</th>
              <th>Product Type</th>
              
              <th>Due Date</th>
              
              <th>Ownership Duration</th>
              <th colspan="2">operations</th>
              <th>Fullfilled?</th>
          </tr>
          <?php
            while($row=mysqli_fetch_array($select_q))
            {
                ?>
                <tr>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['ptype']?></td>
                    
                    <td><?php echo $row['due']?></td>
                    <td><?php echo $row['own']?></td>
                    
                    <td><a href="editreq.php?id=<?php echo $row['pid']?>">Edit</a></td>
                    <td><a href="delreq.php?id=<?php echo $row['pid']?>">Delete</a></td>
                    <td><?php echo $row['Fulfilled']?></td>
                </tr>
        <?php
            }
        }
        else
        {
            ?>
            <div class="mess">
                        <div class="alert" style="background-color: green;">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>No record found</strong> 
                        </div>
            </div>
            <?php
        }
        ?>
        </table>
        </div> 
    </body>