<?php
declare(strict_types=1);

namespace space\yurisi\DiscordToServerMessage;

use dtsmCommand;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    protected function onEnable(): void {
        $this->getServer()->getCommandMap()->register("DiscordToServerMessage", new dtsmCommand());
    }
}