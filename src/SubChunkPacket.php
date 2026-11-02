<?php

/*
 * This file is part of forked BedrockProtocol by FemboyTeam.
 * Link: https://github.com/FemboyTeam/BedrockProtocol/
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 *  ⠀⠀⣽⣿⣿⣿⣧⠀⠀⠀⠠⣤⣄⡀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⡆⠀
 *  ⠀⢀⣿⣿⣿⣿⣿⣷⡀⠀⠀⢿⣿⣿⣦⡀⠀⣰⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⡿⠄⣠⣤⣿⣿⣿⣿⣄⣿⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⣤⣬⣭⣬⣬⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀
 *  ⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠀
 *  ⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠿⠿⠿⣿⣿⡿⠀⠀
 *  ⠀⠀⠸⣿⣧⠀⣴⡆⠀⠀⢸⣿⣿⣿⣿⠀⠀⢸⣿⡌⣶⣿⠟⠁⠀⠀
 *  ⠀⠀⠀⠹⡿⢸⣿⡇⠀⠀⢸⣿⣿⣿⣿⠀⠀⢈⣿⡇⢸⣯⣤⣤⠀⠀
 *  ⠀⠙⣿⣿⣇⢸⣿⣇⠀⢀⣾⡿⢿⣿⣿⣀⣀⣼⣿⡇⣸⣿⡿⠁⠀⠀
 *  ⠀⠀⢀⡟⡉⠞⢻⣿⣿⣿⣿⣶⣾⣿⣿⣿⣿⣿⠋⠘⣹⣿⡄⠀⠀⠀
 *  ⠀⠀⣼⣿⣧⣶⣿⣿⣿⣟⠻⢋⣍⣉⣋⣼⣿⣿⣿⣶⢿⣿⣿⡄⠀⠀
 *  ⠀⠀⠉⠉⠀⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠛⠁⠀⠉⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠠⣬⣭⣽⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠼⢿⣿⣿⣿⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀
 *  ⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol;

use pocketmine\network\mcpe\protocol\serializer\PacketSerializer;
use pocketmine\network\mcpe\protocol\types\LegacySubChunkPacketEntryCommon;
use pocketmine\network\mcpe\protocol\types\SubChunkPacketEntryWithCache as EntryWithBlobHash;
use pocketmine\network\mcpe\protocol\types\SubChunkPacketEntryWithCacheList as ListWithBlobHashes;
use pocketmine\network\mcpe\protocol\types\SubChunkPacketEntryWithoutCache as EntryWithoutBlobHash;
use pocketmine\network\mcpe\protocol\types\SubChunkPacketEntryWithoutCacheList as ListWithoutBlobHashes;
use pocketmine\network\mcpe\protocol\types\SubChunkPosition;
use function count;

class SubChunkPacket extends DataPacket implements ClientboundPacket{
	public const NETWORK_ID = ProtocolInfo::SUB_CHUNK_PACKET;

	private int $dimension;
	private SubChunkPosition $baseSubChunkPosition;
	private ListWithBlobHashes|ListWithoutBlobHashes $entries;
	private LegacySubChunkPacketEntryCommon $legacyEntry;

	/**
	 * @generate-create-func
	 */
	public static function create(int $dimension, SubChunkPosition $baseSubChunkPosition, ListWithBlobHashes|ListWithoutBlobHashes $entries, LegacySubChunkPacketEntryCommon $legacyEntry) : self{
		$result = new self;
		$result->dimension = $dimension;
		$result->baseSubChunkPosition = $baseSubChunkPosition;
		$result->entries = $entries;
		$result->legacyEntry = $legacyEntry;
		return $result;
	}

	public function isCacheEnabled() : bool{ return $this->entries instanceof ListWithBlobHashes; }

	public function getDimension() : int{ return $this->dimension; }

	public function getBaseSubChunkPosition() : SubChunkPosition{ return $this->baseSubChunkPosition; }

	public function getEntries() : ListWithBlobHashes|ListWithoutBlobHashes{ return $this->entries; }

	public function getLegacyEntry() : LegacySubChunkPacketEntryCommon{ return $this->legacyEntry; }

	protected function decodePayload(PacketSerializer $in) : void{
		if($in->getProtocol() >= ProtocolInfo::PROTOCOL_V1_18_10){
			$cacheEnabled = $in->getBool();
		}
		$this->dimension = $in->getVarInt();
		$this->baseSubChunkPosition = SubChunkPosition::read($in);

		if($in->getProtocol() >= ProtocolInfo::PROTOCOL_V1_18_10){
			$count = $in->getLInt();
			if($cacheEnabled ?? false){ // phpstan cries :)
				$entries = [];
				for($i = 0; $i < $count; $i++){
					$entries[] = EntryWithBlobHash::read($in);
				}
				$this->entries = new ListWithBlobHashes($entries);
			}else{
				$entries = [];
				for($i = 0; $i < $count; $i++){
					$entries[] = EntryWithoutBlobHash::read($in);
				}
				$this->entries = new ListWithoutBlobHashes($entries);
			}
		}else{
			$this->legacyEntry = LegacySubChunkPacketEntryCommon::read($in);
		}
	}

	protected function encodePayload(PacketSerializer $out) : void{
		if($out->getProtocol() >= ProtocolInfo::PROTOCOL_V1_18_10){
			$out->putBool($this->entries instanceof ListWithBlobHashes);
		}
		$out->putVarInt($this->dimension);
		$this->baseSubChunkPosition->write($out);

		if($out->getProtocol() >= ProtocolInfo::PROTOCOL_V1_18_10){
			$out->putLInt(count($this->entries->getEntries()));

			foreach($this->entries->getEntries() as $entry){
				$entry->write($out);
			}
		}else{
			$this->legacyEntry->write($out);
		}
	}

	public function handle(PacketHandlerInterface $handler) : bool{
		return $handler->handleSubChunk($this);
	}

	public function translate(PacketTranslatorInterface $translator) : ?self{
		return $translator->translateSubChunk($this);
	}
}
