<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANCEL BOOKING</title>
</head>
<body>
<style>
    .form{
        align-content: center;
        margin-left: 350px;
        margin-top: 150px;
    }
    .hai{
        width: 200px;
    height: 40px;
   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    margin-left: 90px;
    }
    .no{
        width: 200px;
    height: 40px;
   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    margin-left: 100px;
    }

    .no a{
        text-decoration: none;
        color: white;
    }

</style>
<?php
	
    require_once('connection.php');
    session_start();
    $bid = $_SESSION['bid'];
    if(isset($_POST['cancelnow'])){
        $del = mysqli_query($con,"delete from booking where BOOK_ID = '$bid' order by BOOK_ID DESC limit 1");
        echo "<script>window.location.href='cardetails.php';</script>";
        
    }


?>
 <form class="form"  method="POST" >
        <h1>ARE YOU SURE YOU WANT TO CANCEL YOUR BOOKING?</h1>
        <input  type="submit" class="hai" value="CANCEL NOW" name="cancelnow">
        <button class="no"><a href="payment.php" >GO TO PAYMENT</a></button>
    </form>
<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6434070a9e460000079a04a1";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->





</body>


</html>
