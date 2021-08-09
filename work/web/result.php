<?php

require('../app/functions.php');  // 処理をとめる

$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';

include('../app/_parts/_header.php');   // 処理を止めない

?>

<p><?= h($message);?> </p>
<p><a href="index.php">back</a></p>

<?php
include('../app/_parts/_footer.php');