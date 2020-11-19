<?php
namespace mindpowered\englishauction;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \englishauction\EnglishAuction as EnglishAuction_Library;
use \persistence\Persistence;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * An Auction Library
 * Timed auction starting at a low price and increasing until no more bids are made.
 * Also supports reserve price and automatic bidding.
 */
class EnglishAuction
{
	/**
	 * EnglishAuction
	 */
	function __construct() {
		$bus = MagLev::getInstance('englishauction');
		$lib = new EnglishAuction_Library($bus);
		$persistence = new Persistence($bus);
	}

	/**
	 * Create a new auction
	 * @param float $start start time of auction
	 * @param float $end end time of auction
	 * @param float $startingPrice starting price of auction
	 * @param float $reservePrice reserve price for the auction (0 = none)
	 * @param float $priceIncrement price increments for bids in the auction
	 * @return string auctionId
	 */
	public function Create($start, $end, $startingPrice, $reservePrice, $priceIncrement)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$start, $end, $startingPrice, $reservePrice, $priceIncrement];
		$ret = null;
		$phpbus->call('EnglishAuction.Create', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the start of an auction
	 * Will return a timestamp in milliseconds
	 * @param string $auctionId auction id
	 * @return float start of auction
	 */
	public function GetStart($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetStart', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Check if auction has ended
	 * @param string $auctionId auction id
	 * @return bool true if auction has ended, false otherwise
	 */
	public function GetEnd($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetEnd', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Check if an auction has started yet
	 * @param string $auctionId auction id
	 * @return bool true if auction has started, false otherwise
	 */
	public function HasStarted($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.HasStarted', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Check if an auction has ended yet
	 * @param string $auctionId auction id
	 * @return bool true if auction has ended, false otherwise
	 */
	public function HasEnded($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.HasEnded', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Create a bid in an auction
	 * @param string $auctionId auction id
	 * @param string $userId user id
	 * @param float $price price bud
	 * @return void
	 */
	public function Bid($auctionId, $userId, $price)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $userId, $price];
		$phpbus->call('EnglishAuction.Bid', $args, function($async_ret){});
	}

	/**
	 * Get the highest bidder in an auction
	 * @param string $auctionId auction id
	 * @return mixed 
	 */
	public function GetHighestBidder($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetHighestBidder', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the highest bids in an auction
	 * @param string $auctionId auction id
	 * @param float $numBids max number of highest bids to return
	 * @return array Highest bids for the specified auction
	 */
	public function GetHighestBids($auctionId, $numBids)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $numBids];
		$ret = null;
		$phpbus->call('EnglishAuction.GetHighestBids', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the number of bids in an auction
	 * @param string $auctionId auction id
	 * @return float Number of bids placed in the specified auction
	 */
	public function GetNumberOfBids($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetNumberOfBids', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the price increment for the specified auction
	 * @param string $auctionId auction id
	 * @return float Price increment
	 */
	public function GetPriceIncrement($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetPriceIncrement', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the reserve price for the specified auction
	 * @param string $auctionId auction id
	 * @return float Reserve price
	 */
	public function GetReservePrice($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetReservePrice', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the starting price for the specified auction
	 * @param string $auctionId auction id
	 * @return float Starting price
	 */
	public function GetStartingPrice($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.GetStartingPrice', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the time remaining for the specified auction
	 * @param string $auctionId auction id
	 * @param float $now current unix timestamp
	 * @return float Time remaining in seconds
	 */
	public function CalcTimeRemaining($auctionId, $now)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $now];
		$ret = null;
		$phpbus->call('EnglishAuction.CalcTimeRemaining', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get the minimum next bid for the specified auction
	 * @param string $auctionId auction id
	 * @return float Minimum bid price
	 */
	public function CalcMinimumBid($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = null;
		$phpbus->call('EnglishAuction.CalcMinimumBid', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get a list of auctions based on their end time
	 * @param float $endfrom end from
	 * @param float $endto end to
	 * @param float $page 
	 * @param float $perpage number of auctions per page
	 * @param string $sort field to sort by
	 * @param bool $asc ascending (true) or descending (false)
	 * @return array List of auctions ending in the specified period
	 */
	public function GetAuctionsEnding($endfrom, $endto, $page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$endfrom, $endto, $page, $perpage, $sort, $asc];
		$ret = null;
		$phpbus->call('EnglishAuction.GetAuctionsEnding', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get a list of auctions based on their start time
	 * @param float $startfrom start from
	 * @param float $startto start to
	 * @param float $page 
	 * @param float $perpage number of auctions per page
	 * @param string $sort field to sort by
	 * @param bool $asc ascending (true) or descending (false)
	 * @return array List of auctions starting in the specified period
	 */
	public function GetAuctionsStarting($startfrom, $startto, $page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$startfrom, $startto, $page, $perpage, $sort, $asc];
		$ret = null;
		$phpbus->call('EnglishAuction.GetAuctionsStarting', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Get a list of currently running auctions
	 * @param float $page 
	 * @param float $perpage number of auctions per page
	 * @param string $sort field to sort by
	 * @param bool $asc ascending (true) or descending (false)
	 * @return array List of open auctions
	 */
	public function GetOpenAuctions($page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$page, $perpage, $sort, $asc];
		$ret = null;
		$phpbus->call('EnglishAuction.GetOpenAuctions', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to store new auctions (eg. in a database) and return the ID of the new auction.
	 * @param callable $strategyMethod 
	 * @return string new auction id
	 */
	public function SetupNewAuctionQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction";
		$operationName = "CreateNew";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddMutator', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by ID
	 * @param callable $strategyMethod 
	 * @return object The auction or null
	 */
	public function SetupFindAuctionByIdQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction";
		$operationName = "FindById";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by their start date/time
	 * @param callable $strategyMethod 
	 * @return array A list of auctions
	 */
	public function SetupFindAuctionsStartingQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction";
		$operationName = "FindStarting";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by their end data/time
	 * @param callable $strategyMethod 
	 * @return array A list of auctions
	 */
	public function SetupFindAuctionsEndingQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction";
		$operationName = "FindEnding";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve open auctions (eg. from a database)
	 * @param callable $strategyMethod 
	 * @return array A list of auctions
	 */
	public function SetupFindOpenAuctionsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction";
		$operationName = "FindOpen";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to count the number of bids for an auction (eg. in a database)
	 * @param callable $strategyMethod 
	 * @return float Number of bids
	 */
	public function SetupCountBidsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid";
		$operationName = "CountForAuction";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve (eg. from a database) the highest bids for an auction
	 * @param callable $strategyMethod 
	 * @return array A list of highest bids
	 */
	public function SetupHighestBidsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid";
		$operationName = "FindByHighestPriceForAuction";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Provide a callback used to store new bids (eg. in a database) and return the ID of the new bid.
	 * @param callable $strategyMethod 
	 * @return string New bid id
	 */
	public function SetupNewBidQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid";
		$operationName = "New";
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = null;
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret) use (&$ret){ $ret = $async_ret; });
		return $ret;
	}

}
