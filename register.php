<html>
    <head>
        <style>
body{background-color:rgb(239, 239, 239);}
.box{margin-top:10px; 
    padding:20px; 
    background-color:white; 
    height:450px; 
    width:300px; 
    text-align:center; 
    border: 1px solid rgb(161, 161, 161);}
#inp{width:250px; 
    height:30px; 
    border: 0.5px solid rgb(190, 189, 189); 
    padding:10px; 
    background-color: rgb(235, 235, 235);
    margin:5px;}
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
a:visited{color:rgba(0, 94, 255, 0.912);}
        </style>
        </head>
        <body><center>
            <form method="get">
            <div class="box">
                <h4 style="margin:1px;">Developed by Pranjal</h4>
                <img src="logo.png" height="95px" weidth="px">
                <input id="inp" type="text" name="mobile" placeholder="mobile number or email" required/>
                <input id="inp" type="text" name="name" placeholder="fullname" required>
                <input id="inp" type="text" name="user" placeholder="username" required>
                <input id="inp" type="password" name="pass" placeholder="password" required>
                <p style="font-size:13px;color:rgb(130, 130, 130);; font-weight:300;">By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .</p>
                <input id="sub" type="submit" name="submit" value="sign up"/>
                <p style="font-size:18px;">____________   <sub>OR</sub>   ____________</sub></p>
                <h5 style="font-size:13px; cursor:pointer; color:lightblue;"><a href="password.php">
                    Forgot password ?</a></h5>
            </div>
            <div class="box2">
                <p style="font-size:15px;">Have an account?
                <span><a href="insta_login.php">
                    login</a></span></p>
            </div>
            <p style="text-align:center; font-size:15ox">Get the app</p>
            <img style="cursor:pointer;" src="img1.png" height="53px" width="130px">
            <img style="cursor:pointer;"src="img2.png" height="50px" width="130px">
            </form>
        </body>
</html>
<?php
$mobile=$_REQUEST['mobile'];
$name=$_REQUEST['name'];
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$conn=mysqli_connect('localhost','root','Y1012Jqkhkp','pranjal');
$q1='select * from insta';
$q2="insert into insta values('$name','$user','$pass','$mobile')";
$sq1=mysqli_query($conn,$q1);
$rows=mysqli_fetch_all($sq1);
session_start();
$a=false;
$_SESSION['a']=='';
foreach($rows as $i){
    if($user==$i[1] && isset($user)){
        $a=true;
        echo $a;
        break;
    }
}
if($a==false && isset($user)){
    $sq2=mysqli_query($conn,$q2);
    $_SESSION['a']='done';
    if($_SESSION['a']=='done' && isset($user)){
        echo "account created successfully";
        echo "<a href='insta.php'>go back to login.</a>";
        echo"<script>location.replace('insta_login.php');</script>";
    }
}
    if($a==true && isset($user)){
        echo"<script>alert('sorry username already taken!');</script>";
        echo"click here to go back";
}
?>

