<?php

namespace driesboy;

use pocketmine\event\level\LevelLoadEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;


class Main extends PluginBase{

	public function onEnable() {
	$this->getServer()->getLogger()->info(TextFormat::BLUE . "LoadAllWorlds Has Been Enabled.");
	$this->getServer()->getLogger()->info(TextFormat::BLUE . "By: Driesboy. http://github.com/Driesboy");
	$this->getServer()->loadLevel(Void_Of_death);
	$this->getServer()->loadLevel(world);
	$this->getServer()->loadLevel(plot);
	$this->getServer()->loadLevel(Lobby);
	}
	          public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
                 switch($cmd->getName()) {
                         case "loadworlds":
                           // tellraw command
                          if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /loadworld <world>");
                            return true;
                           } else {
                            if($sender->hasPermission("loadallwords.command.allworlds")){
                                 } else {
                              }
                            }
                           }
                 }
	}
