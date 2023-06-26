
<html>
    <head>
        
        <style>
            
             .mess{
            position: fixed;
            top: 25px;
            left: 600px;
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
        </style>
    </head>
</html>

<?php
    error_reporting(E_ERROR | E_PARSE); 
    include 'conn.php';
    if(isset($_POST['insertbtn']))
    {   
        $pn=$_POST['pn'];
        $ptype=$_POST['ptype'];
        $descr=$_POST['descr'];
       
        $price=$_POST['price'];
        $image=$_FILES['propic']['name'];
        $tmp_name=$_FILES['propic']['tmp_name'];
        $destination="sell/".$image;
        move_uploaded_file($tmp_name,$destination);

        $id=$_SESSION["ID"];
        $name=$_SESSION["Username"];
        $mail=$_SESSION["Email"];

        if(empty($pn) || empty($ptype) || empty($descr) || empty($price)){
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
        $insert="insert into sell(pname,ptype,descrip,price,pimg,id,name,email) values('$pn','$ptype','$descr','$price','$image','$id','$name','$mail')";
        $insert_q=mysqli_query($conn,$insert);
        if($insert_q)
        {
            
           
?>
            <div class="mess">
                <div class="alert" style="background-color: lime;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Data inserted successfully!</strong> 
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