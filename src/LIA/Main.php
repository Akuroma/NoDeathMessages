<?php

namespace LIA;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "NoDM by LookItsAku was activated!");
		$this->getLogger()->info(C::AQUA . "You shouldn't see any death messages from now on if someone dies.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDisable(){
        $this->getLogger()->info(C::RED . "NoDM was deactivated!");
    }
    
    public function onPlayerDeath(PlayerDeathEvent $e){
        $e->setDeathMessage("");
    }
}
