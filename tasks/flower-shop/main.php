<?php

interface Animal {}

class Ape implements Animal {}

$ape = new Ape;

if ($ape instanceof Animal)
{
    echo 'HELLO?';
}

