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

use pocketmine\network\mcpe\protocol\types\PacketIds;

/**
 * Version numbers for the current Minecraft PE protocol
 */
final class ProtocolInfo extends PacketIds{

	/**
	 * NOTE TO DEVELOPERS
	 * Do not waste your time or ours submitting pull requests changing game and/or protocol version numbers.
	 * Pull requests changing game and/or protocol version numbers will be closed.
	 *
	 * This file is generated automatically, do not edit it manually.
	 */

	/** Actual Minecraft: PE protocol version */
	public const CURRENT_PROTOCOL = self::PROTOCOL_V1_20_50;

	/** Actual supported protocols */
	public const SUPPORTED_PROTOCOLS = [
		self::CURRENT_PROTOCOL,
		self::PROTOCOL_V1_20_40,
		self::PROTOCOL_V1_20_30,
		self::PROTOCOL_V1_20_10,
		self::PROTOCOL_V1_20_0,
		self::PROTOCOL_V1_19_80,
		self::PROTOCOL_V1_19_70,
		self::PROTOCOL_V1_19_63,
		self::PROTOCOL_V1_19_60,
		self::PROTOCOL_V1_19_50,
		self::PROTOCOL_V1_19_40,
		self::PROTOCOL_V1_19_30,
		self::PROTOCOL_V1_19_21,
		self::PROTOCOL_V1_19_20,
		self::PROTOCOL_V1_19_10,
		self::PROTOCOL_V1_19_0,
		self::PROTOCOL_V1_18_30,
		self::PROTOCOL_V1_18_10,
		self::PROTOCOL_V1_18_0,
		self::PROTOCOL_V1_17_40,
		self::PROTOCOL_V1_17_30,
		self::PROTOCOL_V1_17_10,
		self::PROTOCOL_V1_17_0,
		self::PROTOCOL_V1_16_220_52,
		self::PROTOCOL_V1_16_220_51,
		self::PROTOCOL_V1_16_220_50,
		self::PROTOCOL_V1_16_210_58
	];

	// 1.20
	public const PROTOCOL_V1_20_50 = 630;
	public const PROTOCOL_V1_20_40 = 622;
	public const PROTOCOL_V1_20_30 = 618;
	public const PROTOCOL_V1_20_10 = 594;
	public const PROTOCOL_V1_20_0 = 589;

	// 1.19
	public const PROTOCOL_V1_19_80 = 582;
	public const PROTOCOL_V1_19_70 = 575;
	public const PROTOCOL_V1_19_63 = 568;
	public const PROTOCOL_V1_19_60 = 567;
	public const PROTOCOL_V1_19_50 = 560;
	public const PROTOCOL_V1_19_40 = 557;
	public const PROTOCOL_V1_19_30 = 554;
	public const PROTOCOL_V1_19_21 = 545;
	public const PROTOCOL_V1_19_20 = 544;
	public const PROTOCOL_V1_19_10 = 534;
	public const PROTOCOL_V1_19_0 = 527;

	// 1.18
	public const PROTOCOL_V1_18_30 = 503;
	public const PROTOCOL_V1_18_10 = 486;
	public const PROTOCOL_V1_18_0 = 475;

	// 1.17
	public const PROTOCOL_V1_17_40 = 471;
	public const PROTOCOL_V1_17_30 = 465;
	public const PROTOCOL_V1_17_10 = 448;
	public const PROTOCOL_V1_17_0 = 440;

	// 1.16
	public const PROTOCOL_V1_16_220_52 = 431;
	public const PROTOCOL_V1_16_220_51 = 430;
	public const PROTOCOL_V1_16_220_50 = 429;
	public const PROTOCOL_V1_16_210_58 = 428;

	/** Current Minecraft PE version reported by the server. This is usually the earliest currently supported version. */
	public const MINECRAFT_VERSION = '1.16.210.58 - 1.20.50';
	/** Version number sent to clients in ping responses. */
	public const MINECRAFT_VERSION_NETWORK = '1.20.50';
}
