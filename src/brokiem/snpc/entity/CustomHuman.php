<?php

declare(strict_types=1);

namespace brokiem\snpc\entity;

use pocketmine\entity\Human;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;

class CustomHuman extends Human {
    protected $gravity = 0.0;

    public function getIdentifier(): string{
        return $this->namedtag->getString("Identifier");
    }
}