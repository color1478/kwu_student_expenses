<?php 
    include("connection.php");
    include("login.php")
    ?>
    
<html>
    <head>
        <title>자율적학생경비 확인</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>학생 정보 기입</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>학번 : </label>
                <input type="text" id="user" name="user"></br></br>
                <label>이름 : </label>
                <input type="text" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>