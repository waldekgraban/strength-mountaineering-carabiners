<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\Carabiners;

require_once "../vendor/autoload.php";

use Waldekgraban\Carabiners\Calculator\Calculator;
use Waldekgraban\Carabiners\Carabiner\Carabiner;

$carabiner_type = "B";   // supported types: B, D, H, X, K, Q
$load           = 80;    //kg

$carabiner = new Carabiner($carabiner_type, $load);

$weakness = new Calculator();
$weakness->getCarabinerWeakness($carabiner->property());
