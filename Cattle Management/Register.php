<?php
    include "conn.php";
    if(!empty($_POST['submit'])){
        if($_POST['pass'] === $_POST['password'])
        {
        $name=$_POST['name'];
        $uname=$_POST['uname'];
        $user=$_POST['User'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $strNumber=$_POST['strNumber'];
        $zCode=$_POST['zCode'];
        $phone=$_POST['phone'];
        $password=$_POST['pass'];
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
            header("Location: index.html");
        }
    }
    }   
    else
    {
      print_r(error_get_last());
    }
?>