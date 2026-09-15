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

trait ProtocolSingletonTrait{
	/** @var self[] */
	private static $instance = [];

	/** @var (\Closure(self): void)[] */
	private static array $creationListeners = [];

	private static function make(int $protocol) : self{
		return new static($protocol);
	}

	private function __construct(protected readonly int $protocol){

	}

	public static function getInstance(int $protocol = ProtocolInfo::CURRENT_PROTOCOL) : self{
		if(!isset(self::$instance[$protocol])){
			$instance = self::make($protocol);

			foreach(self::$creationListeners as $listener){
				$listener($instance);
			}

			self::$instance[$protocol] = $instance;
		}

		return self::$instance[$protocol];
	}

	public function getProtocol() : int{
		return $this->protocol;
	}

	/**
	 * @param \Closure(self): void $listener
	 */
	public static function addCreationListener(\Closure $listener) : void{
		self::$creationListeners[] = $listener;
	}

	/**
	 * @return array<int, self>
	 */
	public static function getAll() : array{
		return self::$instance;
	}

	public static function setInstance(self $instance, int $protocol) : void{
		self::$instance[$protocol] = $instance;
	}

	public static function reset() : void{
		self::$instance = [];
	}
}
