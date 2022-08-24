<?php
declare(strict_types=1);

use App\Sample;

require_once __DIR__ . '/vendor/autoload.php';

$sample = new Sample();

// should display Hi Rector Team
$sample();
