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

namespace pocketmine\network\mcpe\protocol\mapping\packet;

use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds419;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds422;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds428;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds440;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds448;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds465;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds471;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds486;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds503;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds527;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds534;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds544;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds554;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds560;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds567;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds575;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds582;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds594;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds618;
use pocketmine\network\mcpe\protocol\mapping\packet\constants\PacketIds630;
use pocketmine\network\mcpe\protocol\mapping\ProtocolMappingTable;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\protocol\types\PacketIds;
use pocketmine\network\mcpe\protocol\utils\FallbackProtocolSingletonTrait;

class PacketIdMapper extends ProtocolMappingTable{
	use FallbackProtocolSingletonTrait {
		FallbackProtocolSingletonTrait::__construct as private __protocolConstruct;
	}

	public const FALLBACK_PROTOCOLS = [
		ProtocolInfo::CURRENT_PROTOCOL => PacketIds630::class,
		ProtocolInfo::PROTOCOL_V1_20_30 => PacketIds618::class,
		ProtocolInfo::PROTOCOL_V1_20_10 => PacketIds594::class,
		ProtocolInfo::PROTOCOL_V1_19_80 => PacketIds582::class,
		ProtocolInfo::PROTOCOL_V1_19_70 => PacketIds575::class,
		ProtocolInfo::PROTOCOL_V1_19_60 => PacketIds567::class,
		ProtocolInfo::PROTOCOL_V1_19_50 => PacketIds560::class,
		ProtocolInfo::PROTOCOL_V1_19_30 => PacketIds554::class,
		ProtocolInfo::PROTOCOL_V1_19_20 => PacketIds544::class,
		ProtocolInfo::PROTOCOL_V1_19_10 => PacketIds534::class,
		ProtocolInfo::PROTOCOL_V1_19_0 => PacketIds527::class,
		ProtocolInfo::PROTOCOL_V1_18_30 => PacketIds503::class,
		ProtocolInfo::PROTOCOL_V1_18_10 => PacketIds486::class,
		ProtocolInfo::PROTOCOL_V1_17_40 => PacketIds471::class,
		ProtocolInfo::PROTOCOL_V1_17_30 => PacketIds465::class,
		ProtocolInfo::PROTOCOL_V1_17_10 => PacketIds448::class,
		ProtocolInfo::PROTOCOL_V1_17_0 => PacketIds440::class,
		ProtocolInfo::PROTOCOL_V1_16_210_58 => PacketIds428::class,
		ProtocolInfo::PROTOCOL_V1_16_200_56 => PacketIds422::class,
		ProtocolInfo::PROTOCOL_V1_16_100_60 => PacketIds419::class
	];

	public const CORE_CONSTANTS = PacketIds::class;

	public function __construct(int $protocol){
		$this->__protocolConstruct($protocol);

		parent::__construct($protocol);
	}
}
