<?php

/*
 *
 * ___  ___               _ _____            __ _         
 * |  \/  |              (_)  __ \          / _| |        
 * | .  . | __ _ ______ _ _| /  \/_ __ __ _| |_| |_ _   _ 
 * | |\/| |/ _` |_  / _` | | |   | '__/ _` |  _| __| | | |
 * | |  | | (_| |/ / (_| | | \__/\ | | (_| | | | |_| |_| |
 * \_|  |_/\__,_/___\__,_|_|\____/_|  \__,_|_|  \__|\__, |
 *                                                   __/ |
 *                                                  |___/
 * Copyright (C) 2017 @MazaiCrafty (https://twitter.com/MazaiCrafty)
 *
 * This program is free software
 * Plugin for Pocketmine-MP
 *
 * Description:
 * It's a plugin with a make the designated player connectable even when full.
 *
 *
 */

namespace MazaiCrafty;

# Plugin
use pocketmine\plugin\PluginBase;

# Player
use pocketmine\Player;

# Server
use pocketmine\Server;

# Event
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;

class MainClass extends PluginBase implements Listener
{

	public function onEnable()
	{
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	/**
    * noKick
    *
    * @param $event PlayerKickEvent
    */

	public function noKick(PlayerKickEvent $event)
	{
		if($event->getReason() !== "disconnectionScreen.serverFull")
		return true;
		switch ($event->getPlayer()->getName())
		{
			case "MazaiCrafty":
			case "sleep0502":
			case "nakazawa6887":
			case "sindj2000":
			case "TAI12100":
			case "itotono":
			case "Reuriru":
			case "pEanut516":

			$event->setCancelled(true);
			return true;
		}
	}
}
