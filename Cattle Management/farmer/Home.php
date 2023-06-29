<html>
    <head>
        <title>View Animals</title>
        <link rel="icon" href="../images/cow.png" type="image/x-icon" style="opacity:0.5 ;"> 
        <link rel="stylesheet" type="text/css" href="Home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
    <a href="../logout.php" ><button class="fill" type="submit" name="sub" style="margin-left: 80%; margin-bottom: 5%;">Logout</button></a>
    <div class="container">
            <h3>Animals</h3>
            </div>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">Name</div>
                    <div class="col col-2">Description</div>
                    <div class="col col-3">Breed</div>
                    <div class="col col-4">Count</div>
                    <div class="col col-5">Cost</div>
                </li>
                <?php
                    include "../conn.php";
                    $query1="SELECT * FROM Cattle where Owner=(?)";
                    $params1=array($_SESSION['name']);
                    $stmt=sqlsrv_query($conn,$query1,$params1);
                    while($row=sqlsrv_fetch_array( $stmt)){ ?>
                <li class="table-row">
                    <div class="col col-1" data-label="Name"><?php echo   $row['AnimalName'];  ?></div>
                    <div class="col col-2" data-label="Description"><?php echo $row['Description']; ?></div>
                    <div class="col col-3" data-label="Breed"><?php echo $row['breed']; ?></div>
                    <div class="col col-4" data-label="Count"><?php echo $row['A_count']; ?></div>
                    <div class="col col-5" data-label="Cost"><?php echo $row['Cost']; }?></div>
                </li>
            </ul>
        </div>
    </body>
</html>