<?php
    include 'header.php';
    include 'nav.php';
    include 'head.php';
?>
<html>
<body>
  <main>
  <?php
    
function getPostDetailsFromDatabase() {
  // Get the post title
  $postTitle = rawurldecode($_GET["title"]);

  // Get the post that matches the postTitle
  include_once 'db_connect.php';
  $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
  $result = mysqli_query($conn, $sql);

  // Get the first row from the result as an associative array
  $postDetails = mysqli_fetch_assoc($result);
  return $postDetails;
  }
  ?>
  </main>
  <?php
    include 'footer.php';
  ?>
  </body>
  </html>