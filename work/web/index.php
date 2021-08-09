<?php

require('../app/functions.php');  // 処理をとめる
include('../app/_parts/_header.php');   // 処理を止めない

?>

<form action = "result.php" method="get">
  <input type = "text" name = "message">
  <button>Send</button>
</form>


<?php
include('../app/_parts/_footer.php');



