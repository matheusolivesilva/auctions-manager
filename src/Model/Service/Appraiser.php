<?php
namespace Alura\Auction\Model\Service;
use Alura\Auction\Model\Auction;
use Alura\Auction\Model\Bid;

class Appraiser 
{
    private $biggestValue;

    public function toEvaluate(Auction $auction): void
    {
        $bids = $auction->getBids();
        $lastBid = $bids[count($bids) - 1];
        $this->biggestValue = $lastBid->getValue();
    }

    public function getBiggestValue(): float
    {
        return $this->biggestValue;            
    }
}
