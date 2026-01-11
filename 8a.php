<!DOCTYPE html>
<html>
<head>
<title>Visitor Counter</title>
<style>
body{font-family:Arial;text-align:center;background:#f4f4f4;padding:40px}
div{background:#fff;max-width:400px;margin:auto;padding:20px;border-radius:6px;box-shadow:0 0 8px #0002}
</style>
</head>
<body>
<div>
<h2>Visitor Count</h2>
<?php
    $f='counter.txt';
    $c=file_exists($f)?(int)file_get_contents($f):0;
    file_put_contents($f,++$c);
    echo "You are visitor number: $c";
?>
</div>
</body>
</html>