<?php
    include "../conn.php";
    if(!empty($_POST['sub'])){
        if($_POST['pass'] === $_POST['passw'])
        {
          $name=$_POST['name'];
          $uname=$_POST['Uname'];
          $user=$_POST['User'];
          $address=$_POST['address'];
          $location=$_POST['location'];
          $strNumber=$_POST['AccNo'];
          $zCode=$_POST['zCode'];
          $phone=$_POST['PhNo'];
          $password=$_POST['pass'];
          $passw=$_POST['passw'];
          $query1="SELECT Name FROM $user where UName='$uname'";
          $params1=array();
          $res=sqlsrv_query($conn,$query1,$params1,array( "Scrollable" => 'static' ));
          $ct=sqlsrv_num_rows($res);
          if($ct > 0)
          {
            header("Location: AddUser.html");
            echo "<script>alert('Username already exists!')</script>"; 
          }
          else
          {
            if(strcmp($user, "Buyer") == 0)
            {
                $query="INSERT INTO Buyer VALUES ('$name','$uname','$password','$address','$location','$phone','$strNumber')";
            }
            else{
                $query="INSERT INTO Farmer VALUES ('$name','$uname','$password','$address','$location','$phone','$strNumber')";
            }
            $result=sqlsrv_query($conn,$query);
            if ($result === false)
            {
                echo "Couldn't add User.\n";
                echo $user;
                die( print_r( sqlsrv_errors(), true));
            }
            else
            {
                header("Location: ViewUsers.php");
            }
          }
        }
        else
        {
            echo "<script>alert('Passwords do not match!')</script>";
            print_r(error_get_last());
        }
    }   
    else{
        echo "<script>alert('Submission Error!')</script>";
    }
?>