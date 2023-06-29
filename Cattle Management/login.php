<?php
    
    include "conn.php";
    if(!empty($_POST['sub']))
    {
        $user=$_POST['User'];
        $username=$_POST['Uname'];
        $password=$_POST['password'];
        $query="SELECT * FROM $user WHERE UName='$username' AND Password='$password'";
        $result=sqlsrv_query($conn,$query,array(), array( "Scrollable" => 'static' ));
        $count=sqlsrv_num_rows($result);
        $row=sqlsrv_fetch_array( $result);
        if ($count === 1 ) {

            $_SESSION['name'] = $row['Name'];
            $_SESSION['user'] = $username;

            if (strcmp($user,"Admin") == 0)
            {
                header('location: admin/Home.php');
            }
            elseif (strcmp($user,"Farmer") == 0)
            {
                header('location: farmer/Home.php');
            }
            elseif (strcmp($user,"Buyer") == 0)
            {
                header('location: buyer/Home.php');
            }
            else 
            {
                echo "<script> alert('User does not exist!') </script>";
            }
        }
        else{
            echo "<script> alert('Incorrect Username/Password') </script>";
            header("Location: index.html");
        }
    }
    elseif(!empty($_POST['reg']))
    {
        header("Location: Register.html");
    }
    else{
        echo "Submission error";
        exit();
    }
?>