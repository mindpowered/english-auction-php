<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace englishauction;

use \maglev\MagLevNumber;
use \maglev\MagLevString;
use \maglev\MagLevNull;
use \php\Boot;
use \haxe\Exception;
use \maglev\MagLev;
use \maglev\MagLevArray;
use \maglev\MagLevObject;

class AuctionRepository {
	/**
	 * @var MagLev
	 */
	public $bus;

	/**
	 * @param MagLev $bus
	 * 
	 * @return void
	 */
	public function __construct ($bus) {
		#/src/englishauction/AuctionRepository.hx:10: characters 9-23
		$this->bus = $bus;
	}

	/**
	 * @param AuctionModel $auction
	 * 
	 * @return void
	 */
	public function Add ($auction) {
	}

	/**
	 * @param AuctionModel $auction
	 * 
	 * @return void
	 */
	public function Edit ($auction) {
	}

	/**
	 * @param string $auctionId
	 * 
	 * @return AuctionModel
	 */
	public function FindById ($auctionId) {
		#/src/englishauction/AuctionRepository.hx:26: characters 9-55
		$myargs = MagLevArray::create();
		#/src/englishauction/AuctionRepository.hx:27: characters 9-71
		$myargs->push(MagLevString::fromString("EnglishAuction.Auction"));
		#/src/englishauction/AuctionRepository.hx:28: characters 9-57
		$myargs->push(MagLevString::fromString("FindById"));
		#/src/englishauction/AuctionRepository.hx:29: characters 9-56
		$myargs->push(MagLevString::fromString($auctionId));
		#/src/englishauction/AuctionRepository.hx:30: characters 9-68
		$res = $this->bus->call("Persistence.Get", $myargs);
		#/src/englishauction/AuctionRepository.hx:31: lines 31-33
		if ($res->isError()) {
			#/src/englishauction/AuctionRepository.hx:32: characters 13-18
			throw Exception::thrown($res->getError()->getMessage());
		}
		#/src/englishauction/AuctionRepository.hx:34: lines 34-36
		if (($res->getResult() instanceof MagLevNull)) {
			#/src/englishauction/AuctionRepository.hx:35: characters 13-24
			return null;
		}
		#/src/englishauction/AuctionRepository.hx:37: characters 9-71
		$resobj = Boot::typedCast(Boot::getClass(MagLevObject::class), $res->getResult());
		#/src/englishauction/AuctionRepository.hx:38: characters 9-54
		$model = new AuctionModel();
		#/src/englishauction/AuctionRepository.hx:39: characters 9-75
		$model->id = (Boot::typedCast(Boot::getClass(MagLevString::class), $resobj->get("auctionId")))->getString();
		#/src/englishauction/AuctionRepository.hx:40: characters 9-71
		$model->start = (Boot::typedCast(Boot::getClass(MagLevNumber::class), $resobj->get("start")))->getInt();
		#/src/englishauction/AuctionRepository.hx:41: characters 9-67
		$model->end = (Boot::typedCast(Boot::getClass(MagLevNumber::class), $resobj->get("end")))->getInt();
		#/src/englishauction/AuctionRepository.hx:42: characters 9-89
		$model->startingPrice = (Boot::typedCast(Boot::getClass(MagLevNumber::class), $resobj->get("startingPrice")))->getFloat();
		#/src/englishauction/AuctionRepository.hx:43: characters 9-87
		$model->reservePrice = (Boot::typedCast(Boot::getClass(MagLevNumber::class), $resobj->get("reservePrice")))->getFloat();
		#/src/englishauction/AuctionRepository.hx:44: characters 9-91
		$model->priceIncrement = (Boot::typedCast(Boot::getClass(MagLevNumber::class), $resobj->get("priceIncrement")))->getFloat();
		#/src/englishauction/AuctionRepository.hx:45: characters 9-21
		return $model;
	}

	/**
	 * @param string $auctionId
	 * 
	 * @return void
	 */
	public function Remove ($auctionId) {
	}
}

Boot::registerClass(AuctionRepository::class, 'englishauction.AuctionRepository');