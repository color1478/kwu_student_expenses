<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from student where student_ID = '$username' and student_name = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1)
        {  
            echo '정보가 있습니다';
            //header("Location: welcom.php");
        }  
        else{  
            echo '정보가 없습니다';
        }     
    }
    ?>