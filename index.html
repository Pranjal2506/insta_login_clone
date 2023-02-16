<html>
    <head>
        <style>
body{background-color:rgb(239, 239, 239);}
.box{margin-top:10px; 
    padding:20px; 
    background-color:white; 
    height:400px; 
    width:300px; 
    text-align:center; 
    border: 1px solid rgb(161, 161, 161);}
#inp{width:250px; 
    height:30px; 
    border: 0.5px solid rgb(190, 189, 189); 
    padding:10px; 
    background-color: rgb(235, 235, 235);
    margin:10px;}
#sub{width:250px; 
    height:25px; 
    border-radius:9px; 
    background-color:rgb(27, 151, 213); 
    color:white; font-size: 15px;
    border:0px;
    margin:7px;}
.box2{height:60;
    width:343px;
    background-color:white;
    border:1px solid rgb(161, 161, 161);
    margin:10px;
    }
a:visited,a:link{color:rgba(0, 94, 255, 0.912);
                text-decoration:none;
                font-size:16px;}
        </style></head>
        <body><center>
            <form method="get">
            <h3 id="top" align=left></h3>
            <div class="box">
                <img src="logo.png" height="95px" weidth="px">
                <input id="inp" type="text" name="username" placeholder="username, email or phone number" required/>
                <input id="inp" type="password" name="password" placeholder="password" required>
                <input id="sub" type="submit" name="submit" value="Login">
                <p style="font-size:18px;">____________   <sub>OR</sub>   ____________</sub></p>
                <h4 style="float:left; font-size:15px; color:lightblue;"><a href="https://www.facebook.com/login/">
                    Login with facebok</a></h4><br><br><br>
                <h5 style="font-size:13px; cursor:pointer; color:lightblue;"><a href="password.php">
                    Forgot password ?</a></h5>
            </div>
            <div class="box2">
                <p style="font-size:15px;">Don't have an account?
                <a href="register.php" style="text-decoration:none;">
                    Signin</a></p>
            </div>
            <p style="text-align:center; font-size:15ox">Get the app</p>
            <img style="cursor:pointer;" src="img1.png" height="53px" width="130px">
            <img style="cursor:pointer;"src="img2.png" height="50px" width="130px">
            </form>
        </body>
</html>
<?php
    session_start();
    $user=$_GET['username'];
    $pass=$_GET['password'];
    $a=false;
    if($_SESSION['a']=='done'){
        echo"<script>document.getElementById('top').innerHTML='Registered successfull login to continue'</script>";
    }
    if($_SESSION['b']=='hello'){
        echo"<script>document.getElementById('top').innerHTML='pass changed sucessfully login to continue'</script>";
    }
    $conn=mysqli_connect('localhost','root','Y1012Jqkhkp','pranjal');
    $q1='select * from insta';
    $q2="delete from insta where username=''";
    $sq1=mysqli_query($conn,$q1);
    $rows=mysqli_fetch_all($sq1);
    foreach($rows as $i){
        if($i[1]=="" && isset($user)){
            $conn->query($q2);
        }
        if($i[1]==$user && $i[2]==$pass && isset($user)){
            echo"<script>location.replace('insta_home.php');</script>";
            $a=true;
        }
    }
    if($a==false && isset($user)){
        echo"<script>alert('wrong username or password');</script>";
    }
  session_destroy();  
?>
