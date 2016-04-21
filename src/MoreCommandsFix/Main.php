<?php

namespace MoreCommandsFix;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

use MoreCommandsFix\Commands\Spawn;
use MoreCommandsFix\Commands\Hub;
use MoreCommandsFix\Commands\Lobby;

class Main extends PluginBase {
    
  public function onLoad() {
        $this->getLogger()->info(TextFormat::YELLOW . "Loading MoreCommandsFix v2.7 By NesQuik....");
    }
    
    public function onEnable() {
        if(!file_exists($this->getDataFolder() . "config.yml")) {
            @mkdir($this->getDataFolder());
             file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml"));
        }
        $this->getCommand("spawn")->setExecutor(new Commands\Spawn($this));
        $this->getCommand("hub")->setExecutor(new Commands\Hub($this));
        $this->getCommand("lobby")->setExecutor(new Commands\Lobby($this));
        $this->getLogger()->info(TextFormat::GREEN . "MoreCommandsFix v2.7 By NesQuik Enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "MoreCommandsFix v2.7 By NesQuik Disabled!");
    }
}
