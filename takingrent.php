<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>Taking Rent</title>
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
        .col {
          padding: 30px 10px;
        }
        .cards {
            width: 300px;
          background-color: plum;
          opacity: 0.8;
          color: #000;
          
          padding: 30px 15px;
        }
        .category{
              margin:0 auto;
              
              width: 80%;

            }
            input{
              margin:2rem;
              margin-right: 0;
              color:white;
              padding:0;
            }
            label{
              color:black;
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
            width:10%;
          }
          .btn:hover{
              cursor: pointer;
              background: rgb(230, 320, 120);
              color: #6000F4;
              border: 2px solid #6000F4;
              box-shadow: inset 660px 0 0 0 rgb(130, 220, 238);
          }
          .btn1{
            color:black;
            width:30%;
          }
          h6{
            color:black;
            margin:0 1rem;
            
            padding:0;
          }
          form{
            padding: 0;
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
          <br>
          <div class="category">
          <form class="filters" method="POST" action="">
          <h6>Filter product</h6>
          <label for="all">
              <input id="all" type="radio" name="ptype" value="all">All
            </label>
            
            <label for="sb">
              <input id="sb" type="radio" name="ptype" value="SB"> Subject Books
            </label>
            <label for="mat">
              <input id="mat" type="radio" name="ptype" value="Materials"> Materials
            </label>
            <label for="lab">
              <input id="lab" type="radio" name="ptype" value="Lab"> Lab Materials
            </label>
            <label for="sta">
              <input id="sta" type="radio" name="ptype" value="Stationary"> Stationary Items
            </label>
            <h6>Sort price</h6>
            <label for="cost3">
              <input id="cost3" type="radio" name="price" value="3">None
            </label>
            <label for="cost">
              <input id="cost" type="radio" name="price" value="1"> Less than 300
            </label>
            <label for="cost2">
              <input id="cost2" type="radio" name="price" value="2"> Greater than equal to 300
            </label>
            
            
                    
                    
            <input type="submit" name="submit" class="btn" value="Apply filter">
          </form>
          </div>
    </body>
</html>
<?php
include("conn.php");
error_reporting(E_ERROR | E_PARSE);
$flag="true";
if($flag=="true" && empty(isset($_POST['submit'])))
{
  
      $select="select * from rent where Available='Yes'";
      $res=mysqli_query($conn,$select);
      $data=mysqli_num_rows($res);
      $norow=($data/3)+1;

      if($data){
        ?>
        <div class="container">
          <?php
          for($i =1;$i<=$norow;$i++){
            ?>
            <div class="row">
            <?php
            for($j=1;$j<=3;$j++){
              ?>
              <div class="col">
              <?php
              if($row = mysqli_fetch_array($res)){
                
                ?>
              <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
              </div>
      <?php
              }
              ?>
              </div>
              <?php
            }
            ?>
            </div>
            <?php
          }
          ?>
          </div>
          <?php
          }
            else
            {
              ?>
            <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>No product found!</strong> 
                </div>
            </div>
            <?php
            }
  
  
  
}

if(isset($_POST['submit']))
{
  
    $flag="false";
    $filt=$_POST['ptype'];
    
      $sova=$_POST['price'];
      if($sova==1)
      {
        if($filt=="all" || $filt=="")
       {

      $select="select * from rent where Available='Yes' and price<300";
      $res=mysqli_query($conn,$select);
      $data=mysqli_num_rows($res);
      $norow=($data/3)+1;

      if($data){
        ?>
        <div class="container">
          <?php
          for($i =1;$i<=$norow;$i++){
            ?>
            <div class="row">
            <?php
            for($j=1;$j<=3;$j++){
              ?>
              <div class="col">
              <?php
              if($row = mysqli_fetch_array($res)){
                
                ?>
              <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
              </div>
      <?php
              }
              
              ?>
              </div>
              <?php
            }
            ?>
            </div>
            <?php
          }
          ?>
          </div>
          <?php
            }
          
    }
    else
    {
      if(empty($filt))
      {
        $select="select * from rent where Available='Yes' and price<300";
      }
      else{
      $select="select * from rent where Available='Yes' and ptype='$filt' and price<300";
      }
      $res=mysqli_query($conn,$select);
      $data=mysqli_num_rows($res);
      $norow=($data/3)+1;

      if($data){
        ?>
        <div class="container">
          <?php
          for($i =1;$i<=$norow;$i++){
            ?>
            <div class="row">
            <?php
            for($j=1;$j<=3;$j++){
              ?>
              <div class="col">
              <?php
              if($row = mysqli_fetch_array($res)){
                ?>
              <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
              </div>
      <?php
              }
              ?>
              </div>
              <?php
            }
            ?>
            </div>
            <?php
          }
          ?>
          </div>
          <?php
          }
          else{
            ?>
            <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>No product found!</strong> 
                </div>
            </div>
            <?php
          }
      }
      }
      else if($sova==2)
      {
        if($filt=="all" || $filt=="")
        {
 
       $select="select * from rent where Available='Yes' and price>=300";
       $res=mysqli_query($conn,$select);
       $data=mysqli_num_rows($res);
       $norow=($data/3)+1;
 
       if($data){
         ?>
         <div class="container">
           <?php
           for($i =1;$i<=$norow;$i++){
             ?>
             <div class="row">
             <?php
             for($j=1;$j<=3;$j++){
               ?>
               <div class="col">
               <?php
               if($row = mysqli_fetch_array($res)){
                 ?>
               <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
                </div>
       <?php
               }
               ?>
               </div>
               <?php
             }
             ?>
             </div>
             <?php
           }
           ?>
           </div>
           <?php
             }
           
     }
     else
     {
      if(empty($filt))
      {
        $select="select * from rent where Available='Yes' and price>=300";
      }
      else{
        $select="select * from rent where Available='Yes' and ptype='$filt' and price>=300";
      }
       
       $res=mysqli_query($conn,$select);
       $data=mysqli_num_rows($res);
       $norow=($data/3)+1;
 
       if($data){
         ?>
         <div class="container">
           <?php
           for($i =1;$i<=$norow;$i++){
             ?>
             <div class="row">
             <?php
             for($j=1;$j<=3;$j++){
               ?>
               <div class="col">
               <?php
               if($row = mysqli_fetch_array($res)){
                 ?>
               <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
                </div>
       <?php
               }
               ?>
               </div>
               <?php
             }
             ?>
             </div>
             <?php
           }
           ?>
           </div>
           <?php
           }
           else{
             ?>
             <div class="mess">
                 <div class="alert" style="background-color: #f44336;">
                         <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                         <strong>No product found!</strong> 
                 </div>
             </div>
             <?php
           }
       }
      }
      else{
        if($filt=="all" || $sova==3)
        {
    
          $select="select * from rent where Available='Yes'";
          $res=mysqli_query($conn,$select);
          $data=mysqli_num_rows($res);
          $norow=($data/3)+1;
    
          if($data){
            ?>
            <div class="container">
              <?php
              for($i =1;$i<=$norow;$i++){
                ?>
                <div class="row">
                <?php
                for($j=1;$j<=3;$j++){
                  ?>
                  <div class="col">
                  <?php
                  if($row = mysqli_fetch_array($res)){
                    ?>
                  <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
                  </div>
          <?php
                  }
                  ?>
                  </div>
                  <?php
                }
                ?>
                </div>
                <?php
              }
              ?>
              </div>
              <?php
                }
              
        }
        else
        {
          $select="select * from rent where Available='Yes' and ptype='$filt'";
          $res=mysqli_query($conn,$select);
          $data=mysqli_num_rows($res);
          $norow=($data/3)+1;
    
          if($data){
            ?>
            <div class="container">
              <?php
              for($i =1;$i<=$norow;$i++){
                ?>
                <div class="row">
                <?php
                for($j=1;$j<=3;$j++){
                  ?>
                  <div class="col">
                  <?php
                  if($row = mysqli_fetch_array($res)){
                    ?>
                  <div class="cards">
                  <div class="imag">
                  <img src="images/<?php echo $row['pimg']?>" height="200" class="card-img-top" alt="...">
                  </div>
                  <div class="desc">
                      <h3 style="font-family :serif;"><?php echo $row['pname'] ?></h3>
                      <h4 style="font-family :serif;"><?php echo "Type:".$row['ptype'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Description:".$row['descrip'] ?></h4>
                      <h4 style="font-family :serif;"><?php echo "Due:".$row['due'] ?></h4>
                      <h4 style="font-family :serif; color:blue;"><?php echo "Rs.".$row['price'] ?></h4>
                      <a href="rentform.php?id=<?php echo $row['pid']?>"><input class="btn1" type="button" name="rent" value="Rent"></a>
                      <a href="chat.php?id=<?php echo $row['id']?>"><input class="btn1" type="button" name="chat" value="Chat"></a>
                  </div>
                </div>
          <?php
                  }
                  ?>
                  </div>
                  <?php
                }
                ?>
                </div>
                <?php
              }
              ?>
              </div>
              <?php
                }
              else{
                ?>
                <div class="mess">
                    <div class="alert" style="background-color: #f44336;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <strong>No product found!</strong> 
                    </div>
                </div>
                <?php
              }
        }
      }
    }
        
?>
    
    
    