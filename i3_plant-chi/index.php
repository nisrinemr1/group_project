<?php 

  session_start();
  ob_start();
  // print_r($_SESSION);
  include("views/html/head.php");  
  
  // Add log out link only if the user is logged in
  /* if (isset($_SESSION['email'])) {
    echo "<div><a href=\"?section=logout\" class=\"pushed-right\">Log out</a></div>";
  } */
  
  include("controller/router.php");
  include("views/html/footer.php");
?>