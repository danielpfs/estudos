<?php
require '../bootstrap.php';

add('Bridge', 'h1');

$map = new \BridgesAndAdapters\GoogleMaps();
add($map->getMap());

add('Adapter', 'h1');

$date = new \BridgesAndAdapters\ProceduralDate();

add($date->getDay());
add($date->getMonth());

build();