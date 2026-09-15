<?php

/*
 *     ______               __                _____       ______
 *    / ____/__  ____ ___  / /_  ____  __  __/ ___/____  / __/ /_
 *   / /_  / _ \/ __ `__ \/ __ \/ __ \/ / / /\__ \/ __ \/ /_/ __/
 *  / __/ /  __/ / / / / / /_/ / /_/ / /_/ /___/ / /_/ / __/ /_
 * /_/    \___/_/ /_/ /_/_.___/\____/\__, //____/\____/_/  \__/
 *                                  /____/
 *
 * ⠀⠀⣽⣿⣿⣿⣧⠀⠀⠀⠠⣤⣄⡀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⡆⠀
 * ⠀⢀⣿⣿⣿⣿⣿⣷⡀⠀⠀⢿⣿⣿⣦⡀⠀⣰⣿⣿⣿⣿⣿⣿⡇⠀
 * ⠀⢸⣿⣿⣿⣿⣿⣿⡿⠄⣠⣤⣿⣿⣿⣿⣄⣿⣿⣿⣿⣿⣿⣿⡇⠀
 * ⠀⢸⣿⣿⣿⣿⣿⣿⣤⣬⣭⣬⣬⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀
 * ⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠀
 * ⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠿⠿⠿⣿⣿⡿⠀⠀
 * ⠀⠀⠸⣿⣧⠀⣴⡆⠀⠀⢸⣿⣿⣿⣿⠀⠀⢸⣿⡌⣶⣿⠟⠁⠀⠀
 * ⠀⠀⠀⠹⡿⢸⣿⡇⠀⠀⢸⣿⣿⣿⣿⠀⠀⢈⣿⡇⢸⣯⣤⣤⠀⠀
 * ⠀⠙⣿⣿⣇⢸⣿⣇⠀⢀⣾⡿⢿⣿⣿⣀⣀⣼⣿⡇⣸⣿⡿⠁⠀⠀
 * ⠀⠀⢀⡟⡉⠞⢻⣿⣿⣿⣿⣶⣾⣿⣿⣿⣿⣿⠋⠘⣹⣿⡄⠀⠀⠀
 * ⠀⠀⣼⣿⣧⣶⣿⣿⣿⣟⠻⢋⣍⣉⣋⣼⣿⣿⣿⣶⢿⣿⣿⡄⠀⠀
 * ⠀⠀⠉⠉⠀⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠛⠁⠀⠉⠀⠀⠀⠀
 * ⠀⠀⠀⠀⠀⠀⠀⠠⣬⣭⣽⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀
 * ⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀
 * ⠀⠀⠀⠀⠀⠀⠀⠀⠼⢿⣿⣿⣿⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠀
 * ⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀
 * ⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author FemboyTeam
 * @link http://github.com/FemboyTeam/FemboySoft/
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\utils;

use pocketmine\network\mcpe\protocol\ProtocolInfo;
use function array_keys;
use function array_unique;
use function array_values;
use function rsort;
use const SORT_NUMERIC;

trait FallbackProtocolSingletonTrait{
	use ProtocolSingletonTrait {
		getInstance as private __protocolGetInstance;
	}

	public static function getInstance(int $protocol = ProtocolInfo::CURRENT_PROTOCOL) : self{
		return self::__protocolGetInstance(self::resolveProtocol($protocol));
	}

	/**
	 * Resolves a requested protocol to the closest available protocol.
	 */
	public static function resolveProtocol(int $protocol = ProtocolInfo::CURRENT_PROTOCOL) : int{
		$protocols = self::getAvailableProtocols();
		rsort($protocols, SORT_NUMERIC);

		foreach($protocols as $availableProtocol){
			if($protocol >= $availableProtocol){
				return $availableProtocol;
			}
		}

		throw new \InvalidArgumentException("No supported protocol instance is available for " . $protocol);
	}

	/**
	 * @return list<int>
	 */
	public static function getAvailableProtocols() : array{
		$fallbackProtocols = static::FALLBACK_PROTOCOLS;
		if($fallbackProtocols === []){
			throw new \LogicException("No fallback protocols available for " . static::class);
		}

		return array_values(array_unique([
			...array_keys($fallbackProtocols),
			...array_keys(self::$instance)
		]));
	}
}
