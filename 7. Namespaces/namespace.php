<?php

require 'Eggroll/Recipe.php';
require 'Buns/Recipe.php';

use Eggroll\Recipe as Eggroll;
use Buns\Recipe as Buns;

$eggroll = new Eggroll();
$buns = new Buns();

echo $eggroll->getName();
echo "<br>";
echo $buns->getName();