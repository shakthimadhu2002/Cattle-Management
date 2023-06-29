<html>
  <?php include "../conn.php"; ?>
  <style><?php include "sidebar.css";?></style>
  <head>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/sidebar.css">
  </head>
  <body>
    <header class="header" role="banner">
      <h1 class="logo">
      <a href="Home.php">Welcome <span><?php echo $_SESSION['name'] ; ?></span></a>
      </h1>
      <div class="nav-wrap">
        <nav class="main-nav" role="navigation">
          <ul class="unstyled list-hover-slide">
            <li><a href="../admin/ViewAnimals.php">Animals</a></li>
            <li><a href="../admin/ViewUsers.php">Users</a></li>
            <li><a href="../logout.php"> Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </body>
</html>