<?php
  $request = http_build_query($_POST);
  $size = strlen($request);
  echo "Size=" . ($size);
?>
