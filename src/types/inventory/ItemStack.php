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

use pocketmine\nbt\TreeRoot;
use pocketmine\network\mcpe\protocol\serializer\NetworkNbtSerializer;
use function base64_encode;
use function count;

final class ItemStack implements \JsonSerializable{
	public function __construct(
		private int $id,
		private int $meta,
		private int $count,
		private int $blockRuntimeId,
		private ItemStackExtraData $extraData
	){}

	public static function null() : self{
		return new self(0, 0, 0, 0, new ItemStackExtraData(null, [], []));
	}

	public function isNull() : bool{
		return $this->id === 0;
	}

	public function getId() : int{
		return $this->id;
	}

	public function getMeta() : int{
		return $this->meta;
	}

	public function getCount() : int{
		return $this->count;
	}

	public function getBlockRuntimeId() : int{ return $this->blockRuntimeId; }

	public function getExtraData() : ItemStackExtraData{ return $this->extraData; }

	public function equals(ItemStack $itemStack) : bool{
		return $this->equalsWithoutCount($itemStack) && $this->count === $itemStack->count;
	}

	public function equalsWithoutCount(ItemStack $itemStack) : bool{
		return
			$this->id === $itemStack->id &&
			$this->meta === $itemStack->meta &&
			$this->blockRuntimeId === $itemStack->blockRuntimeId &&
			$this->extraData->equals($itemStack->extraData);
	}

	/** @return mixed[] */
	public function jsonSerialize() : array{
		$result = [
			"id" => $this->id,
			"meta" => $this->meta,
			"count" => $this->count,
			"blockRuntimeId" => $this->blockRuntimeId
		];
		if(count($this->extraData->getCanPlaceOn()) > 0){
			$result["canPlaceOn"] = $this->extraData->getCanPlaceOn();
		}
		if(count($this->extraData->getCanDestroy()) > 0){
			$result["canDestroy"] = $this->extraData->getCanDestroy();
		}
		if($this->extraData instanceof ItemStackExtraDataShield){
			$result["shieldBlockingTick"] = $this->extraData->getBlockingTick();
		}
		if($this->extraData->getNbt() !== null){
			$result["nbt"] = base64_encode((new NetworkNbtSerializer())->write(new TreeRoot($this->extraData->getNbt())));
		}
		return $result;
	}
}
