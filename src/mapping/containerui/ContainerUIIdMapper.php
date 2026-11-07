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

namespace pocketmine\network\mcpe\protocol\mapping\containerui;

use pocketmine\network\mcpe\protocol\mapping\containerui\constants\ContainerUIIds419;
use pocketmine\network\mcpe\protocol\mapping\containerui\constants\ContainerUIIds560;
use pocketmine\network\mcpe\protocol\mapping\containerui\constants\ContainerUIIds582;
use pocketmine\network\mcpe\protocol\mapping\containerui\constants\ContainerUIIds630;
use pocketmine\network\mcpe\protocol\mapping\ProtocolMappingTable;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\protocol\types\inventory\ContainerUIIds;
use pocketmine\network\mcpe\protocol\utils\FallbackProtocolSingletonTrait;

class ContainerUIIdMapper extends ProtocolMappingTable{
	use FallbackProtocolSingletonTrait {
		FallbackProtocolSingletonTrait::__construct as private __protocolConstruct;
	}

	public const FALLBACK_PROTOCOLS = [
		ProtocolInfo::CURRENT_PROTOCOL => ContainerUIIds630::class,
		ProtocolInfo::PROTOCOL_V1_19_80 => ContainerUIIds582::class,
		ProtocolInfo::PROTOCOL_V1_19_50 => ContainerUIIds560::class,
		ProtocolInfo::PROTOCOL_V1_16_100_60 => ContainerUIIds419::class
	];

	public const CORE_CONSTANTS = ContainerUIIds::class;

	public function __construct(int $protocol){
		$this->__protocolConstruct($protocol);

		parent::__construct($protocol);
	}
}
