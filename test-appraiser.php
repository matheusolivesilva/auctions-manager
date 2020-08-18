<?php
use Alura\Auction\Model\Auction;
use  Alura\Auction\Model\User;
use  Alura\Auction\Model\Bid;
use  Alura\Auction\Model\Service\Appraiser;

require 'vendor/autoload.php';

$auction = new Auction('Ferrari');

$marie = new User('Marie');
$john = new User('John');

$auction->receivesBids(new Bid($john, 2000));
$auction->receivesBids(new Bid($marie, 2500));
$auctioneer = new Appraiser();
$auctioneer->toEvaluate($auction);

$biggestValue = $auctioneer->getBiggestValue();

echo $biggestValue . "\n";
?>
