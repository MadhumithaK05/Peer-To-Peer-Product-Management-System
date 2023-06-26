<?php
    session_start();
?>
<?php
include("conn.php");
$ogid=$_SESSION["ID"];
$icid=$_GET['id'];

$select="select * from Msg where (oid='$ogid' or iid='$ogid') and (oid='$icid' or iid='$icid') order by mid";
$res=mysqli_query($conn,$select);
$data=mysqli_num_rows($res);

$oname=$_SESSION["Username"];
$sql="select Name from Users where Roll_No='$icid'";
$ress=mysqli_query($conn, $sql);
$acc=mysqli_fetch_array($ress);
$iname=$acc['Name'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="chatstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
                <div class="details">
                    <span><?php echo $iname?></span>
                </div>
            </header>
            <div class="chat-box">
            <?php
    if($data){
        while($row= mysqli_fetch_array($res)){
            if($row['iid']==$icid){
                ?>
                <div class="chat outgoing">
                    <div class="details">
                        <p><?php echo $row['msg'];?></p>
                    </div>
                </div>
                <?php
            }
            else{
                ?>
                <div class="chat incoming">
                    <div class="details">
                        <p><?php echo $row['msg'];?></p>
                    </div>
                </div>
                <?php
            }
        }
    }
    ?>
            </div>
            <form action="chat.php?id=<?php echo $icid?>" method="POST" class="typing-area" autocomplete="off">
                <input type="text" name="income" value="<?php echo $icid ?>" hidden>
                <input type="text" name="outgo" value="<?php echo $ogid ?>" hidden>
                <input type="text" class="input-field" name="mesg" placeholder="Type a Message here...">
                <button type="submit" name="submitmsg"><i class="fa fa-paper-plane"></i></button>
            </form>
            <?php
            if(isset($_POST['submitmsg'])){
                $ic=$_POST['income'];
                $og=$_POST['outgo'];
                $text=$_POST['mesg'];
                if(!empty($text)){
                    $insert="insert into Msg (mid,iid, oid, msg) values(NULL,'$ic','$og','$text')";
                    mysqli_query($conn, $insert);
                }
            }?>
        </section>
    </div>
</body>
</html>