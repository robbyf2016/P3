<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP OOP Test</title>
<?php include ("name_lib.php"); ?>
</head>

<body>

<?php

$test_oop = new name("Robby Fussell");

echo "The name created is " .$test_oop->get_name();

echo "Pinn Number is " .$test_oop->get_pinn();

?>
</body>
</html>