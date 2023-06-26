<?php
    session_start();
?>
<?php
include("conn.php");
$ogid=$_SESSION["ID"];

$select="select DISTINCT oid, iid from Msg where oid='$ogid' or iid='$ogid'";
$res=mysqli_query($conn,$select);
$data=mysqli_num_rows($res);
$pep=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Users List</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="chatstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <div class="content">
            <div class="details">
                <span>Chat</span>
            </div>
            </div>
<a href="home.php" class="logout">Back</a>
            </header><br>
            <div class="users-list">
                <?php
                if($data){
                    while($row= mysqli_fetch_array($res)){
                        if($row['iid']==$ogid){
                            $icid=$row['oid'];
                        }
                        else{
                            $icid=$row['iid'];
                        }
                        $sql="select Name, propic from Users where Roll_No='$icid'";
                        $ress=mysqli_query($conn, $sql);
                        $acc=mysqli_fetch_array($ress);
                        $iname=$acc['Name'];
                        $img=$acc['propic'];
                        $pri="No";
                        if(isset($pep)){
                        foreach($pep as $i){
                            if($i===$iname){
                                $pri="Yes";
                            }
                        }
                    }
                        array_push($pep,$iname);
                        if($pri==="No"){
                            
                        ?>
                <a href="chat.php?id=<?php echo $icid?>">
                <div class="content">
                    <img src="pic/<?php echo $img;?>" alt="">
                    <div class="details">
                        <span><?php echo $iname?></span>
                        <p>Click to chat</p>
                    </div>
                </div>
                </a>
                <?php
                        }
            }
                }
                ?>
            </div>
        </section>
    </div>
</body>
</html>