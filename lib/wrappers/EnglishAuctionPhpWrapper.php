<?php
namespace mindpowered\englishauction;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \englishauction\EnglishAuction;
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
		$lib = new EnglishAuction($bus);
		$persistence = new Persistence($bus);
	}

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
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$start, $end, $startingPrice, $reservePrice, $priceIncrement];
		$ret = $phpbus->call('EnglishAuction.Create', $args);
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
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetStart', $args);
		return $ret;
	}

	/**
	 * Check if auction has ended
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetEnd($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetEnd', $args);
		return $ret;
	}

	/**
	 * Check if an auction has started yet
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function HasStarted($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.HasStarted', $args);
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
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $userId, $price];
		$phpbus->call('EnglishAuction.Bid', $args);
	}

	/**
	 * Get the highest bidder in an auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetHighestBidder($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetHighestBidder', $args);
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
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $numBids];
		$ret = $phpbus->call('EnglishAuction.GetHighestBids', $args);
		return $ret;
	}

	/**
	 * Get the number of bids in an auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetNumberOfBids($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetNumberOfBids', $args);
		return $ret;
	}

	/**
	 * Get the price increment for the specified auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetPriceIncrement($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetPriceIncrement', $args);
		return $ret;
	}

	/**
	 * Get the reserve price for the specified auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetReservePrice($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetReservePrice', $args);
		return $ret;
	}

	/**
	 * Get the starting price for the specified auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function GetStartingPrice($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.GetStartingPrice', $args);
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
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId, $now];
		$ret = $phpbus->call('EnglishAuction.CalcTimeRemaining', $args);
		return $ret;
	}

	/**
	 * Get the minimum next bid for the specified auction
	 * @param unknown_type $auctionId auction id
	 * @return ...
	 */
	public function CalcMinimumBid($auctionId)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$auctionId];
		$ret = $phpbus->call('EnglishAuction.CalcMinimumBid', $args);
		return $ret;
	}

	/**
	 * Get a list of auctions based on their end time
	 * @param unknown_type $endfrom end from
	 * @param unknown_type $endto end to
	 * @param unknown_type $page 
	 * @param unknown_type $perpage number of auctions per page
	 * @param unknown_type $sort field to sort by
	 * @param unknown_type $asc ascending (true) or descending (false)
	 * @return ...
	 */
	public function GetAuctionsEnding($endfrom, $endto, $page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$endfrom, $endto, $page, $perpage, $sort, $asc];
		$ret = $phpbus->call('EnglishAuction.GetAuctionsEnding', $args);
		return $ret;
	}

	/**
	 * Get a list of auctions based on their start time
	 * @param unknown_type $startfrom start from
	 * @param unknown_type $startto start to
	 * @param unknown_type $page 
	 * @param unknown_type $perpage number of auctions per page
	 * @param unknown_type $sort field to sort by
	 * @param unknown_type $asc ascending (true) or descending (false)
	 * @return ...
	 */
	public function GetAuctionsStarting($startfrom, $startto, $page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$startfrom, $startto, $page, $perpage, $sort, $asc];
		$ret = $phpbus->call('EnglishAuction.GetAuctionsStarting', $args);
		return $ret;
	}

	/**
	 * Get a list of currently running auctions
	 * @param unknown_type $page 
	 * @param unknown_type $perpage number of auctions per page
	 * @param unknown_type $sort field to sort by
	 * @param unknown_type $asc ascending (true) or descending (false)
	 * @return ...
	 */
	public function GetOpenAuctions($page, $perpage, $sort, $asc)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$args = [$page, $perpage, $sort, $asc];
		$ret = $phpbus->call('EnglishAuction.GetOpenAuctions', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to store new auctions (eg. in a database) and return the ID of the new auction.
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupNewAuctionQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction"
		$operationName = "CreateNew"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupNewAuctionQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by ID
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupFindAuctionByIdQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction"
		$operationName = "FindById"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupFindAuctionByIdQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by their start date/time
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupFindAuctionsStartingQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction"
		$operationName = "FindStarting"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupFindAuctionsStartingQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve auctions (eg. from a database) by their end data/time
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupFindAuctionsEndingQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction"
		$operationName = "FindEnding"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupFindAuctionsEndingQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve open auctions (eg. from a database)
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupFindOpenAuctionsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Auction"
		$operationName = "FindOpen"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupFindOpenAuctionsQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to count the number of bids for an auction (eg. in a database)
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupCountBidsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid"
		$operationName = "CountForAuction"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupCountBidsQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to retrieve (eg. from a database) the highest bids for an auction
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupHighestBidsQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid"
		$operationName = "FindByHighestPriceForAuction"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupHighestBidsQueryCallback', $args);
		return $ret;
	}

	/**
	 * Provide a callback used to store new bids (eg. in a database) and return the ID of the new bid.
	 * @param unknown_type $strategyMethod 
	 * @return ...
	 */
	public function SetupNewBidQueryCallback($strategyMethod)
	{
		$phpbus = MagLevPhp::getInstance('englishauction');
		$recordType = "EnglishAuction.Bid"
		$operationName = "New"
		$args = [$recordType, $operationName, $strategyMethod];
		$ret = $phpbus->call('EnglishAuction.SetupNewBidQueryCallback', $args);
		return $ret;
	}

}
