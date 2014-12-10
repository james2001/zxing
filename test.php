<?php
require 'Zxing.php';

$zxing = new james2001\Zxing('test;');

var_dump($zxing->findFirst(getcwd().DIRECTORY_SEPARATOR.'test.jpg'));