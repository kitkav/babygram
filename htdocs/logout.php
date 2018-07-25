<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log Out</title>
</head>

<body>
<?php
  echo "<script>
  alert('You have been logged out!');
  window.location.href='index.php';
  </script>";
  ?>
</body>
</html>
