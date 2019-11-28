<?php include("connectdb.php"); ?>

<?php
    session_start();
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $ID = $_SESSION['ID'];
    $countchar = strlen($password1);

    $sql="SELECT User_Name
            FROM user
            WHERE User_ID = '$ID'";
    $query = mysqli_query($mysqli,$sql);
    $result = mysqli_fetch_array($query);

    if($countchar < 6){
        echo "<script>";
        echo "alert(\"ควรมีความยาว password อย่างน้อย 6 ตัวอักษร\");"; 
        echo "window.history.back()";
        echo "</script>";   
    }
    else{
        if ($password1 == $password2){
            $sql = "UPDATE user u
                    SET u.User_Password = '$password1'
                    WHERE User_ID = '$ID'";
            $insert = mysqli_query($mysqli,$sql);
    
            if($insert){
                echo "<script>";
                echo "alert(\"เปลี่ยนรหัสผ่านสำเร็จ\");"; 
                echo "window.history.back()";
                echo "</script>";
            }
            else{
                echo "fail";
            }
                
            // header("Location: loginindex.php");
        }
        else{
            echo "<script>";
            echo "alert(\"password ไม่ตรงกัน\");"; 
            echo "window.history.back()";
            echo "</script>";   
        }
    }
    
?>