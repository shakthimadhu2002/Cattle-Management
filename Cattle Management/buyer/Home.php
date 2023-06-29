<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Perfect Cute</title>
    <link rel="icon" href="../images/cow.png" type="image/x-icon" style="opacity:0.5 ;"> 
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <script src="../path/to/jquery.js"></script>
    <script type="text/javascript">
      function Buy(){
        
      }
    </script>
  </head>
  <body>
    <?php
      include "../conn.php";
      include "topbar.php";
      
      $query1="SELECT * FROM Cattle";
      $params1=array();
      $stmt=sqlsrv_query($conn,$query1,$params1);
      while($row=sqlsrv_fetch_array( $stmt)){
        if($row['A_count']>0){ 
    ?>	
    <div id="container">
	  <div class="animal-details">
	      <h1><?php echo $row['AnimalName']; ?></h1>
	      <p class="information"><?php echo $row['Description']; ?></p>		
        <div class="control">
          <form method="post">
	          <button class="btn" id="btn" name="buy">
	            <span class="price"><?php echo $row['Cost']; ?></span>
                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <span class="buy">Buy</span>
            </button>
          </form>
          <?php
            if(isset($_POST['buy'])){
              $aname=$row['AnimalName'];
              $own=$row['Owner'];
              $que="UPDATE Cattle SET A_count=A_count-1 WHERE AnimalName='$aname' AND Owner='$own'";
              $par=array();
              $st=sqlsrv_query($conn,$que,$par);
              header("Location: Home.php");
            }
          ?>
        </div>		
    </div>	
    <div class="product-image">
	    <img src=<?php echo $row['Picture']; ?> alt=<?php echo $row['AnimalName']?>>
        <div class="info">
	        <h2> Description</h2>
	        <ul>
		        <li><strong>Breed : </strong><?php echo $row['breed']; ?> </li>
		        <li><strong>Owner : </strong><?php echo $row['Owner']; ?></li>
		        <li><strong>Count: </strong><?php echo $row['A_count']; ?></li>
	        </ul>
        </div>
    </div>
    </div>
    <?php } } ?>
  </body>
</html>