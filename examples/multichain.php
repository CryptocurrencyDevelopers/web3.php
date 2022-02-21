<?php

require('../vendor/autoload.php');

use Web3\Web3;

$web3_eth = new Web3('http://192.168.99.100:8545/');
$web3_bsc = new Web3('http://192.168.99.100:8546/');
$web3_polygon = new Web3('http://192.168.99.100:8547/');
$web3_avalanche = new Web3('http://192.168.99.100:8548/');
$web3_cryptocurrency = new Web3('http://192.168.99.100:8549/');
