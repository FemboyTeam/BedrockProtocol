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

namespace pocketmine\network\mcpe\protocol;

use PHPUnit\Framework\TestCase;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\protocol\serializer\PacketSerializer;
use pocketmine\network\mcpe\protocol\mapping\packet\PacketIdMapper;
use function strlen;

class LoginPacketTest extends TestCase{

	public function testInvalidChainDataJsonHandling() : void{
		$protocol = ProtocolInfo::CURRENT_PROTOCOL;
		$corePid = ProtocolInfo::LOGIN_PACKET;
		$pid = PacketIdMapper::getInstance($protocol)->coreToNetwork($corePid) ?? $corePid;

		$stream = PacketSerializer::encoder()->setProtocol($protocol);
		$stream->putUnsignedVarInt($pid);
		$payload = '{"chain":[]'; //intentionally malformed
		$stream->putInt($protocol);

		$stream2 = PacketSerializer::encoder()->setProtocol($protocol);
		$stream2->putLInt(strlen($payload));
		$stream2->put($payload);
		$stream->putString($stream2->getBuffer());

		$pk = PacketPool::getInstance()->getPacket($stream->getBuffer(), $protocol);
		self::assertInstanceOf(LoginPacket::class, $pk);

		$this->expectException(PacketDecodeException::class);
		$pk->decode(PacketSerializer::decoder($stream->getBuffer(), 0)->setProtocol($protocol)); //bang
	}
}
