<?php include("connectdb.php"); ?>

<?php
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $countchar = strlen($password1);

    if($countchar < 6){
        echo "<script>";
        echo "alert(\"ควรมีความยาว password อย่างน้อย 6 ตัวอักร\");"; 
        echo "window.history.back()";
        echo "</script>";   
    }
    else{
        if ($password1 == $password2){
            $sql="SELECT Max(User_ID) As User_ID
            FROM user";
            $query = mysqli_query($mysqli,$sql);
            $result = mysqli_fetch_array($query);
    
            echo $result['User_ID'];
    
            if($result['User_ID']){
                $last = $result['User_ID'] + 1;
                $sql = "INSERT INTO user
                        VALUE ('$last','$username','$password1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                $insert = mysqli_query($mysqli,$sql);       

                $sql = "INSERT INTO deduction
                        VALUE ('$last',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                $insert1 = mysqli_query($mysqli,$sql);
    
                if($insert){
                    echo "<script>";
                    echo "alert(\"Register สำเร็จ\");"; 
                    echo "window.history.back()";
                    echo "</script>";
                }
                else{
                    echo "fail";
                }
                
                header("Location: loginindex.php");
            }
            else{
                echo "Hi";
                $sql = "INSERT INTO user
                        VALUE (1,'$username','$password1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                $insert = mysqli_query($mysqli,$sql);

                $sql = "INSERT INTO deduction
                        VALUE (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                $insert1 = mysqli_query($mysqli,$sql);

                if($insert){
                    echo "<script>";
                    echo "alert(\"Register สำเร็จ\");"; 
                    echo "window.history.back()";
                    echo "</script>";
                }
                else{
                    echo "fail";
                }
                
                header("Location: loginindex.php");
            }
        }
        else{
            echo "<script>";
            echo "alert(\"password ไม่ตรงกัน\");"; 
            echo "window.history.back()";
            echo "</script>";   
        }
    }
    
?>