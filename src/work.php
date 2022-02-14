<?php
$marks = 10;
if ($marks > "60") {
  echo "First Division";
} elseif ($marks > "45" && $marks <"59") {
  echo "Second Division";
} elseif ($marks > "33" && $marks <"44") {
    echo "Third Division";
} else {
  echo "Fail";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="work.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="work.js"></script>
</body>
</html>