<?php
namespace controlbp;

use pocketmine\scheduler\Task;

class InventoryUpdateTask extends Task{
    /** @var controlbp $owner */
    private $owner;
    /**
     * InventoryUpdateTask constructor.
     * @param controlbp $owner
     */
    public function __construct(controlbp $owner) {
        $this->owner = $owner;
    }
    public function onRun(int $tick) : void{
        /** @var controlbp $owner */
        $owner = $this->owner;
        foreach($owner->s as $session){
            $session->syncInventory();
        }
    }
}
