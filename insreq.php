<html>
    <head>
        <style>
             .mess{
            position: fixed;
            top:30px;
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
       
        $due=$_POST['due'];
        $own=$_POST['own'];

        $id=$_SESSION["ID"];
        $name=$_SESSION["Username"];
        $mail=$_SESSION["Email"];
        if(empty($pn) || empty($ptype) || empty($due) || empty($own)){
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
        $insert="insert into request(pname,ptype,due,own,id,name,email) values('$pn','$ptype','$due','$own','$id','$name','$mail')";
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