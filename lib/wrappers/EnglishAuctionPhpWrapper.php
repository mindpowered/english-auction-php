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
 * @return ...
 */
public function Create($start, $end, $startingPrice, $reservePrice)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$start, $end, $startingPrice, $reservePrice];
	$ret = $bus->call('EnglishAuction.Create', $args);
	return $ret;
}

/**
 * Bid in an auction
 * @param unknown_type $auctionId auction id to bid in
 * @param unknown_type $userId user id that's bidding
 * @param unknown_type $price bid price
 * @return ...
 */
public function Bid($auctionId, $userId, $price)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $userId, $price];
	$ret = $bus->call('EnglishAuction.Bid', $args);
	return $ret;
}

/**
 * Automatically bid against others in an auction (up to the specified amount)
 * @param unknown_type $auctionId auction id to bid in
 * @param unknown_type $userId user id that's bidding
 * @param unknown_type $price bid price
 * @return ...
 */
public function AutoBid($auctionId, $userId, $price)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $userId, $price];
	$ret = $bus->call('EnglishAuction.AutoBid', $args);
	return $ret;
}

/**
 * Force an auction to close and specify the winning bid.
 * @param unknown_type $auctionId auction id to bid in
 * @param unknown_type $userId user id that's bidding
 * @param unknown_type $price bid price
 * @return ...
 */
public function ForceClose($auctionId, $userId, $price)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$auctionId, $userId, $price];
	$ret = $bus->call('EnglishAuction.ForceClose', $args);
	return $ret;
}

/**
 * TBD
 * @return void
 */
public function Status()
{
	$bus = MagLevPhp::getInstance('default');
	$args = [];
	$ret = $bus->call('EnglishAuction.Status', $args);
	return $ret;
}

}
