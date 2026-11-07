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

namespace pocketmine\network\mcpe\protocol\types\inventory;

use pocketmine\nbt\LittleEndianNbtSerializer;
use pocketmine\nbt\NbtDataException;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\TreeRoot;
use pocketmine\network\mcpe\protocol\PacketDecodeException;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\protocol\serializer\NetworkNbtSerializer;
use pocketmine\network\mcpe\protocol\serializer\PacketSerializer;
use function count;
use function strlen;

/**
 * Wrapper class for extra data on ItemStacks.
 * The data is normally provided as a raw string (not automatically decoded).
 * This class is just a DTO for PacketSerializer to use when encoding/decoding ItemStacks.
 */
class ItemStackExtraData{
	/**
	 * @param string[] $canPlaceOn
	 * @param string[] $canDestroy
	 */
	public function __construct(
		private ?CompoundTag $nbt,
		private array $canPlaceOn,
		private array $canDestroy
	){}

	/**
	 * @return string[]
	 */
	public function getCanPlaceOn() : array{
		return $this->canPlaceOn;
	}

	/**
	 * @return string[]
	 */
	public function getCanDestroy() : array{
		return $this->canDestroy;
	}

	public function getNbt() : ?CompoundTag{
		return $this->nbt;
	}

	public static function read(PacketSerializer $in) : self{
		$nbtLen = $in->getLShort();

		/** @var CompoundTag|null $compound */
		$compound = null;
		if($nbtLen === 0xffff){
			$nbtDataVersion = $in->getByte();
			if($nbtDataVersion !== 1){
				throw new PacketDecodeException("Unexpected NBT data version $nbtDataVersion");
			}
			$offset = $in->getOffset();
			try{
				if($in->getProtocol() >= ProtocolInfo::PROTOCOL_V1_16_220_50){
					$reader = new LittleEndianNbtSerializer();
				}else{
					$reader = new NetworkNbtSerializer();
				}
				$compound = $reader->read($in->getBuffer(), $offset, 512)->mustGetCompoundTag();
			}catch(NbtDataException $e){
				throw PacketDecodeException::wrap($e, "Failed decoding NBT root");
			}finally{
				$in->setOffset($offset);
			}
		}elseif($nbtLen !== 0){
			throw new PacketDecodeException("Unexpected fake NBT length $nbtLen");
		}

		if($in->getProtocol() >= ProtocolInfo::PROTOCOL_V1_16_220_50){
			$getCount = \Closure::fromCallable([$in, "getLInt"]);
			$getString = \Closure::fromCallable(function() use ($in) : string{
				return $in->get($in->getLShort());
			});
		}else{
			$getCount = \Closure::fromCallable([$in, "getVarInt"]);
			$getString = \Closure::fromCallable([$in, "getString"]);
		}

		$canPlaceOn = [];
		for($i = 0, $canPlaceOnCount = $getCount(); $i < $canPlaceOnCount; ++$i){
			$canPlaceOn[] = $getString();
		}

		$canDestroy = [];
		for($i = 0, $canDestroyCount = $getCount(); $i < $canDestroyCount; ++$i){
			$canDestroy[] = $getString();
		}

		return new self($compound, $canPlaceOn, $canDestroy);
	}

	public function write(PacketSerializer $out) : void{
		if($this->nbt !== null){
			$out->putLShort(0xffff);
			$out->putByte(1); //TODO: NBT data version (?)
			if($out->getProtocol() >= ProtocolInfo::PROTOCOL_V1_16_220_50){
				$writer = new LittleEndianNbtSerializer();
			}else{
				$writer = new NetworkNbtSerializer();
			}
			$out->put($writer->write(new TreeRoot($this->nbt)));
		}else{
			$out->putLShort(0);
		}

		if($out->getProtocol() >= ProtocolInfo::PROTOCOL_V1_16_220_50){
			$putCount = \Closure::fromCallable([$out, "putLInt"]);
			$putString = \Closure::fromCallable(function(string $str) use ($out) : void{
				$out->putLShort(strlen($str));
				$out->put($str);
			});
		}else{
			$putCount = \Closure::fromCallable([$out, "putVarInt"]);
			$putString = \Closure::fromCallable([$out, "putString"]);
		}

		$putCount(count($this->canPlaceOn));
		foreach($this->canPlaceOn as $entry){
			$putString($entry);
		}
		$putCount(count($this->canDestroy));
		foreach($this->canDestroy as $entry){
			$putString($entry);
		}
	}

	public function equals(ItemStackExtraData $extraData) : bool{
		return
			$this->canPlaceOn === $extraData->canPlaceOn &&
			$this->canDestroy === $extraData->canDestroy &&
			(
				$this->nbt === $extraData->nbt || //this covers null === null and fast object identity
				($this->nbt !== null && $extraData->nbt !== null && $this->nbt->equals($extraData->nbt))
			);
	}
}
