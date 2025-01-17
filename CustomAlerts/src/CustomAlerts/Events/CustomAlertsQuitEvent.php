<?php

/*
 * CustomAlerts v2.0 by EvolSoft
 * Developer: Flavius12
 * Website: https://www.evolsoft.tk
 * Copyright (C) 2014-2018 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/CustomAlerts/blob/master/LICENSE)
 */

namespace CustomAlerts\Events;

use pocketmine\player\Player;
use pocketmine\plugin\Plugin;

class CustomAlertsQuitEvent extends CustomAlertsEvent {
	
	public static $handlerList = null;
	
	/** @var Player $player */
	private $player;
	
	/**
	 * @param Player $player
	 */
	public function __construct(Plugin $plugin, Player $player){
		parent::__construct($plugin);
		$this->player = $player;
	}
	
	/**
	 * Get quit event player
	 *
	 * @return Player
	 */
	public function getPlayer() : Player {
		return $this->player;
	}
}