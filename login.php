<?php
     session_start();
     include "conn.php";
     $email = mysqli_real_escape_string($con,$_POST['email']);
     $password = mysqli_real_escape_string($con,$_POST['password']);
     if(!empty($email) && !empty($password)) {
         $sql = "SELECT * FROM users where email = '{$email}' And password = '{$password}'";
         $result = mysqli_query($con,$sql);
         if(mysqli_num_rows($result)>0){
             $row = mysqli_fetch_assoc($result);
             $_SESSION['uniqueId'] = $row['uniqueId'];
             $sql2 = "UPDATE users SET status = 'online' where uniqueId = {$row['uniqueId']}";
             $result2 = mysqli_query($con,$sql2);
             if($result) {
                 echo 1;
                 mysqli_close($con);
             }
            }
            else {
                echo "Email or Password are incorrect!";
                mysqli_close($con);
            }
        }
        else {
         echo "All Feild are required";
        }
?>