<?php

require_once 'vendor/autoload.php';

use App\Animal;

echo (new Animal('Sheep'))->name();