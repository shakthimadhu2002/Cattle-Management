<?php
    include "../conn.php";
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    if(!empty($_POST['sub'])){
        if (!(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file))) {
            echo "Sorry, there was an error uploading your file.";
        }
        $name=$_POST['name'];
        $breed=$_POST['breed'];
        $desc=$_POST['desc'];
        $owner=$_POST['owner'];
        $cost=(int)$_POST['cost'];
        $count=(float)$_POST['count'];
        $query1="SELECT Name FROM Farmer where Name='$owner'";
        $params1=array();
        $res=sqlsrv_query($conn,$query1,$params1,array( "Scrollable" => 'static' ));
        $ct=sqlsrv_num_rows($res);
        if($ct > 0){
            $query="INSERT INTO Cattle VALUES (?,?,?,?,?,?,?)";
            $params=array($name,$breed,$count,$desc,$cost,$owner,$target_file);
            $result=sqlsrv_query($conn,$query,$params);
            if ($result === false)
            {
                echo "Couldn't add Animal.\n";
                die( print_r( sqlsrv_errors(), true));
            }
            else
            {
                header("Location: ViewAnimals.php");
                exit();
            }
        }
        else
        {
            echo "Owner does not exist!";
            die( print_r( sqlsrv_errors(), true));
        }
    }
    else
    {
        echo '<script>alert("Couldn\'t add Animal");</script>';
    }
?>