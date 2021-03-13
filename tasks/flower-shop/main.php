<?php

require_once 'vendor/autoload.php';

use App\Shop;
use App\Suppliers\AmazingGardenSupplier;
use App\Suppliers\CoolGardenSupplier;
use App\Suppliers\HeheSupplier;
use App\Suppliers\NBSSupplier;
use App\Suppliers\WoopWoopSupplier;

use Ramsey\Uuid\Uuid;

$shop = new Shop();
$shop->addSupplier(new AmazingGardenSupplier);
$shop->addSupplier(new CoolGardenSupplier);
$shop->addSupplier(new WoopWoopSupplier);
$shop->addSupplier(new HeheSupplier);

$age = 21;

if ($age >= 18)
{
    $shop->addSupplier(new NBSSupplier);
}

echo Uuid::uuid4() . PHP_EOL;

foreach ($shop->products()->all() as ['product' => $product, 'amount' => $amount])
{
    echo $product->sellable()->name() . ' ' . $product->price() . ' ( ' . $amount . ' )' . PHP_EOL;
}