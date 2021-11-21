<?php
    session_start();
    include "conn.php";
    $firstName = mysqli_real_escape_string($con,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($con,$_POST['lastName']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $ConfimPassword = mysqli_real_escape_string($con,$_POST['confirmPassword']);
    if($password == $ConfimPassword) {
        if(!empty($firstName) && !empty($lastName) && !empty($email)&& !empty($password)) {
            if(filter_var($email,FILTER_VALIDATE_EMAIL) ) {
                $sql = "SELECT email from users where email = '{$email}'";
                $result = mysqli_query($con,$sql) or die('email checking query error');
                if(mysqli_num_rows($result)>0){
                    echo "Email already in use please select another Email";
                }
                else {
                    if($_FILES['image']['name'] !='') {
                        $fileName = $_FILES['image']['name'];
                        $tmpName = $_FILES['image']['tmp_name'];
                        $extension = pathinfo($fileName,PATHINFO_EXTENSION);
                        $valid_ext = array("jpg","png","jpeg");
                        if(in_array($extension,$valid_ext)) {
                            $time = time();
                            $newImageName =$time.$fileName;
                            $path = "fileUploaded/".$newImageName;
                            if(move_uploaded_file($tmpName,$path)) {
                                $status = "active";
                                $randomId = rand(time(),10000000);
                                $sql2 = "insert into users(uniqueId,firstName,lastName,email,password,imageName,status) values($randomId,'$firstName','$lastName','$email','$password','$newImageName','$status')";
                                $result2 = mysqli_query($con,$sql2) or die("Inserting data query error");
                                if($result2) {
                                    $sql3 = "SELECT *from users where email = '$email'";
                                    $result3 = mysqli_query($con,$sql3) or die("fetching user id error");
                                    if(mysqli_num_rows($result3) > 0) {
                                        $row = mysqli_fetch_assoc($result3);
                                        $_SESSION['uniqueId'] = $row['uniqueId'];
                                        echo 1;
                                    }
                                }
                            }
                            
                        }
                        else {
                            echo "Please select an Image File formate of - jpeg, jpg, png";
                        }
                    }
                    else {
                        echo "Please select the file";
                    }
                }
            }
        }
        else {
            echo "All feild are required";
        }
    }
    else {
        echo "Your password does not match";
    }

    
?>