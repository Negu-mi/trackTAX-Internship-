<?php 
session_start();
        if(isset($_POST['username'])){
                  include("connectdb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM user 
                  WHERE  User_Name = '".$username."' 
                  AND  User_Password = '".$password."' ";
                  $result = mysqli_query($mysqli,$sql);
				
                  if(mysqli_num_rows($result)==1){
                    echo "login success";
                    $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["User_ID"];
                      $_SESSION["name"] = $row["User_Name"];

                      Header("Location: memberhome.php");
                      
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>