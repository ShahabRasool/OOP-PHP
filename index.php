<?php
require "src/Css.php";
require "src/Utility.php";
require "src/ContaineredClass.php";
 $css = new Css("This bilo");
$css->prepareMarkup();
$css->render();
$container= new ContaineredClass("This class is from Container class");
$container->prepareMarkup();
$container->wrapperout();
$container->render();
// print Css::$count;
// $css->test();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
</body>
</html>