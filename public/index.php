
<?php
require '../vendor/autoload.php';

use app\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->getTalk().  '</br>';

echo SayHello::world();