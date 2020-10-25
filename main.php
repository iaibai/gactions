<?php
require_once "vendor/autoload.php";

$battle = new App\BattleSimulator();
echo $battle->simulate()->getWinner() . PHP_EOL;
