<?php

namespace driesboy;

use pocketmine\event\level\LevelLoadEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;


class Main extends PluginBase implements Listener{

	public function onEnable() {
	$this->getServer()->getLogger()->info(TextFormat::BLUE . "LoadAllWorlds Has Been Enabled.");
	$this->getServer()->getLogger()->info(TextFormat::BLUE . "By: Driesboy. http://github.com/Driesboy");
	$this->getServer()->loadLevel(Void_Of_death);
	$this->getServer()->loadLevel(world);
	$this->getServer()->loadLevel(plot);
	$this->getServer()->loadLevel(Lobby);
	}
	}
