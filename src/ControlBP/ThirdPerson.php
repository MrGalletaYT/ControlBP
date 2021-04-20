<?php
namespace controlbp;

use pocketmine\Player;
use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Thrid;

class ThridPerson extends Thrid{
    private $p;
    public function __construct(Plugin $main, Player $p){
        $this->p = $p;
    }
    public function onRun(int $tick) : void{
        $this->p->sendMessage("You are controlling.");
        foreach($this->getOwner()->getServer()->getOnlinePlayers() as $online){
            $online->showPlayer($this->p);
    public function onRun(int $tick) : void{
        $this->p->sendMessage("You are not controlling.");
        foreach($this->getOwner()->getServer()->getOnlinePlayers() as $online){
            $online->showPlayer($this->p);         
        }
    }
}
