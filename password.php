<html>
    <head>
        <script>
            a='';
            function otp(){
                a='';
                for(let i=0; i<4; i++){
                    a+= (Math.floor(Math.random()*10));}
                document.getElementById("otp").innerHTML=a;
            }
            function chq(){
                var b= document.getElementById("otpinp").value;
                if(a!=b){
                    alert('wrong OTP');
                    document.getElementById('form').reset()
                }
            }
        </script>
        <style>
body{background-color:rgb(239, 239, 239);}
.box{margin-top:10px; 
    padding:20px; 
    background-color:white; 
    height:460px; 
    width:300px; 
    text-align:center; 
    border: 1px solid rgb(161, 161, 161);}
#inp{width:250px; 
    height:30px; 
    border: 0.5px solid rgb(190, 189, 189); 
    padding:10px; 
    background-color: rgb(235, 235, 235);
    margin:10px;}
#otpinp{height:30px;
    width:150px;
    border: 0.5px solid rgb(190, 189, 189);
    margin-top:10px;
    background-color: rgb(235, 235, 235);}
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
        </style></head>
        <body><center>
            <form method="get" id=form>
            <div class="box">
                <img src="logo.png" height="95px" weidth="px">
                <input id="inp" type="text" name="username" placeholder="username, email or phone number" required/>
                <input id="inp" type="text" name="mobile" placeholder="mobile.No" required>
                <input id="inp" type="password" name='newpass' placeholder="enter new password" required>
                <input id="inp" type="password" name='confpass' placeholder="confirm password" required>
                <p id=otp name="temp" style="float:left; margin-left:70px;"></p>
                <input type="text" id="otpinp" placeholder="enter the otp" required onclick=otp() style="float:right; margin-right:26px;">
                <input id="sub" type="submit" name="submit" value="change" onclick=chq()>
            </div>
            <div class="box2">
                <p style="font-size:15px;">Don't have an account?
                <span><a href="register.php">
                    Signin</a></span></p>
            </div>
            <p style="text-align:center; font-size:15ox">Get the app</p>
            <img style="cursor:pointer;" src="img1.png" height="53px" width="130px">
            <img style="cursor:pointer;"src="img2.png" height="50px" width="130px">
            </form>
        </body>
</html>
<?php
session_start();
$a=$_REQUEST['username'];
$b=$_REQUEST['mobile'];
$c=$_REQUEST['newpass'];
$d=$_REQUEST['confpass'];
$conn=mysqli_connect('localhost','root','Y1012Jqkhkp','pranjal');
$q1='select * from insta';
$q2="update insta set password='$c' where username='$a'";
$sq1=mysqli_query($conn,$q1);
$rows=mysqli_fetch_all($sq1);
if($c==$d && isset($c)){
    echo"<h1>helloooo</h1>";
    foreach($rows as $i){
        if($a==$i[1] && $b==$i[3] && isset($a)){
            $sq2=mysqli_query($conn,$q2);
            $_SESSION['b']='hello';
            if($_SESSION['b']=='hello' && isset($a)){
                echo"<script>location.replace('insta_login.php')</script>";
            }
        }
        
    }
    if($_SESSION['b']!='hello'){
        echo"<script>alert('wrong details entered');</script>";    
    }
}
else{
    echo"<script>alert('passwords do not match!!');</script>";
}