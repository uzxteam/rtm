<?php $subkategoriya = mysqli_query($conn, "SELECT * FROM kategoriya ORDER BY kategoriya  DESC"); ?>
<?php $kitob = mysqli_query($conn, "SELECT * FROM kitob ORDER BY id DESC"); ?>
<?php $user = mysqli_query($conn, "SELECT * FROM users"); ?>