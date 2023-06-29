<html>
    <head>
        <title>User Details</title>
        <link rel="icon" href="images/cow.png" type="image/x-icon" style="opacity:0.5 ;"> 
        <link rel="stylesheet" type="text/css" href="ViewUsers.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/path/to/jquery.js"></script>
        <script> 
            $(function(){
                $("#sidebar").load("../navbar/sidebar.php"); 
            });
        </script> 
    </head>
    <body>
    <div class="container">
        <div class="top_bar">
            <h3 class="browns">Users</h3>
            <a href="AddUser.html">
                <button type="Submit">+Add User</button>
            <a>
        </div>
        <h4 class="mint">Buyers</h4>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Name</div>
                <div class="col col-2">User Name</div>
                <div class="col col-3">Address</div>
                <div class="col col-4">Location</div>
                <div class="col col-5">Phone Number</div>
            </li>
            <?php
                include "../conn.php";
                $query1="SELECT * FROM Buyer";
                $params1=array();
                $stmt=sqlsrv_query($conn,$query1,$params1);
                while($row=sqlsrv_fetch_array( $stmt)){ ?>
            <li class="table-row">
                <div class="col col-1" data-label="Name"><?php echo   $row['Name'];  ?></div>
                <div class="col col-2" data-label="User Name"><?php echo $row['UName']; ?></div>
                <div class="col col-3" data-label="Address"><?php echo $row['Address']; ?></div>
                <div class="col col-4" data-label="Location"><?php echo $row['Location']; ?></div>
                <div class="col col-4" data-label="Phone Number"><?php echo $row['PhoneNo']; }?></div>
            </li>
        </ul>
    </div>
    <div class="container">
        <h4 class="mint">Farmers</h4>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Name</div>
                <div class="col col-2">User Name</div>
                <div class="col col-3">Address</div>
                <div class="col col-4">Location</div>
                <div class="col col-5">Phone Number</div>
            </li>
            <?php
                $query1="SELECT * FROM Farmer";
                $params1=array();
                $stmt=sqlsrv_query($conn,$query1,$params1);
                while($row=sqlsrv_fetch_array( $stmt)){ ?>
            <li class="table-row">
                <div class="col col-1" data-label="Name"><?php echo   $row['Name'];  ?></div>
                <div class="col col-2" data-label="User Name"><?php echo $row['UName']; ?></div>
                <div class="col col-3" data-label="Address"><?php echo $row['Address']; ?></div>
                <div class="col col-4" data-label="Location"><?php echo $row['Location']; ?></div>
                <div class="col col-4" data-label="Phone Number"><?php echo $row['PhoneNo']; }?></div>
            </li>
        </ul>
    </div>
    <div id="sidebar"></div>
    </body>
</html>