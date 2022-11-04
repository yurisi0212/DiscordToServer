<?php
declare(strict_types=1);

namespace space\yurisi\DiscordToServerMessage\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\Server;

class dtsmCommand extends Command {

    public function __construct() {
        parent::__construct("dtsm", "", "");
        $this->setPermission("space.yurisi.DiscordToServerMessage.dtsm");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if(!$sender instanceof ConsoleCommandSender) return false;
        if(!(isset($args[0]) || isset($args[1]))) return false;

        Server::getInstance()->broadcastMessage("§a[Discord]§f{$args[0]}§l§f: §r{$args[1]}");
        return true;
    }
}