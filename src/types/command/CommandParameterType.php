<?php

/*
 * This file is part of BedrockProtocol.
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types\command;

interface CommandParameterType{

	/**
	 * Basic parameter types. These must be combined with the ARG_FLAG_VALID constant.
	 * ARG_FLAG_VALID | (type const)
	 */
	public const ARG_TYPE_INT = 1;
	public const ARG_TYPE_FLOAT = 3;
	public const ARG_TYPE_VALUE = 4;
	public const ARG_TYPE_WILDCARD_INT = 5;
	public const ARG_TYPE_OPERATOR = 6;
	public const ARG_TYPE_COMPARE_OPERATOR = 7;
	public const ARG_TYPE_TARGET = 8;

	public const ARG_TYPE_WILDCARD_TARGET = 10;

	public const ARG_TYPE_FILEPATH = 17;

	public const ARG_TYPE_FULL_INTEGER_RANGE = 23;

	public const ARG_TYPE_EQUIPMENT_SLOT = 43;
	public const ARG_TYPE_STRING = 44;

	public const ARG_TYPE_INT_POSITION = 52;
	public const ARG_TYPE_POSITION = 53;

	public const ARG_TYPE_MESSAGE = 55;

	public const ARG_TYPE_RAWTEXT = 58;

	public const ARG_TYPE_JSON = 62;

	public const ARG_TYPE_BLOCK_STATES = 71;

	public const ARG_TYPE_COMMAND = 74;
}
