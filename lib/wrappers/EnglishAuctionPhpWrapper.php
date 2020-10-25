<?php
namespace mindpowered\wrappers;

use \maglev\MagLevPhp;

/**
 * EnglishAuctionPhpWrapper
 *
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * EnglishAuctionPhpWrapper
 *
 * An Auction Library
 * Timed auction starting at a low price and increasing until no more bids are made.
 * Also supports reserve price and automatic bidding.
 */
class EnglishAuctionPhpWrapper
{
/**
 * Create a new auction
 * @param unknown_type $start start time of auction
 * @param unknown_type $end end time of auction
 * @param unknown_type $startingPrice starting price of auction
 * @param unknown_type $reservePrice reserve price for the auction (0 = none)
 * @param unknown_type $priceIncrement price increments for bids in the auction
 * @return ...
 */
public function Create($start, $end, $startingPrice, $reservePrice, $priceIncrement)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$start, $end, $startingPrice, $reservePrice, $priceIncrement];
	$ret = $bus->call('EnglishAuction.Create', $args);
	return $ret;
}

/**
 * Get the start of an auction
 * Will return a timestamp in milliseconds
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetStart($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetStart', $args);
	return $ret;
}

/**
 * Check if auction has ended
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetEnd($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetEnd', $args);
	return $ret;
}

/**
 * Check if an auction has started yet
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function HasStarted($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.HasStarted', $args);
	return $ret;
}

/**
 * Create a bid in an auction
 * @param unknown_type $auctionId auction id
 * @param unknown_type $userId user id
 * @param unknown_type $price price bud
 * @return void
 */
public function Bid($auctionId, $userId, $price)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $userId, $price];
	$ret = $bus->call('EnglishAuction.Bid', $args);
	return $ret;
}

/**
 * Get the highest bidder in an auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetHighestBidder($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetHighestBidder', $args);
	return $ret;
}

/**
 * Get the highest bids in an auction
 * @param unknown_type $auctionId auction id
 * @param unknown_type $numBids max number of highest bids to return
 * @return ...
 */
public function GetHighestBids($auctionId, $numBids)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $numBids];
	$ret = $bus->call('EnglishAuction.GetHighestBids', $args);
	return $ret;
}

/**
 * Get the number of bids in an auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetNumberOfBids($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetNumberOfBids', $args);
	return $ret;
}

/**
 * Get the price increment for the specified auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetPriceIncrement($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetPriceIncrement', $args);
	return $ret;
}

/**
 * Get the reserve price for the specified auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetReservePrice($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetReservePrice', $args);
	return $ret;
}

/**
 * Get the starting price for the specified auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function GetStartingPrice($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.GetStartingPrice', $args);
	return $ret;
}

/**
 * Get the time remaining for the specified auction
 * @param unknown_type $auctionId auction id
 * @param unknown_type $now current unix timestamp
 * @return ...
 */
public function CalcTimeRemaining($auctionId, $now)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $now];
	$ret = $bus->call('EnglishAuction.CalcTimeRemaining', $args);
	return $ret;
}

/**
 * Get the minimum next bid for the specified auction
 * @param unknown_type $auctionId auction id
 * @return ...
 */
public function CalcMinimumBid($auctionId)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId];
	$ret = $bus->call('EnglishAuction.CalcMinimumBid', $args);
	return $ret;
}

}
