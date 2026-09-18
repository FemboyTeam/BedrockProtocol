<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\mcpe\protocol\serializer;

use PHPUnit\Framework\TestCase;
use pocketmine\network\mcpe\protocol\PacketDecodeException;
use pocketmine\network\mcpe\protocol\PacketPool;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\protocol\serializer\PacketBatch;
use pocketmine\network\mcpe\protocol\TestPacket;
use pocketmine\utils\BinaryStream;
use function array_fill;

class PacketBatchTest extends TestCase{

	public function testDecodeTooBig() : void{
		$protocol = ProtocolInfo::CURRENT_PROTOCOL;
		$limit = 10;
		$write = new BinaryStream();
		PacketBatch::encodePackets($write, array_fill(0, $limit + 1, new TestPacket()), $protocol);
		$read = new PacketBatch($write->getBuffer());
		$this->expectException(PacketDecodeException::class);
		$readCount = 0;
		foreach($read->getPackets(PacketPool::getInstance(), $protocol, $limit) as $packet){
			$readCount++;
		}
	}

	public function testDecodeAtLimit() : void{
		$protocol = ProtocolInfo::CURRENT_PROTOCOL;
		$limit = 10;
		$write = new BinaryStream();
		PacketBatch::encodePackets($write, array_fill(0, $limit, new TestPacket()), $protocol);
		$read = new PacketBatch($write->getBuffer());
		$readCount = 0;
		foreach($read->getPackets(PacketPool::getInstance(), $protocol, $limit) as $packet){
			$readCount++;
		}
		self::assertSame($limit, $readCount);
	}
}
