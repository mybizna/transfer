<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */

$this->add_module_info("transfer", [
    'title' => 'Transfer',
    'description' => 'Transfer',
    'icon' => 'fas fa-people-arrows',
    'path' => '/transfer/admin/transfer',
    'class_str' => 'text-primary border-primary',
    'position' => 1,
]);

//$this->add_menu("module", "key", "title","path", "icon", "position");
$this->add_menu("transfer", "transfer", "Transfer", "/transfer/admin/transfer", "fas fa-cogs", 1);
$this->add_menu("transfer", "allowedin", "Allowed In", "/transfer/admin/allowedin", "fas fa-cogs", 1);
$this->add_menu("transfer", "disallowedin", "Disallowed In", "/transfer/admin/disallowedin", "fas fa-cogs", 1);
$this->add_menu("transfer", "blacklist", "Blacklist", "/transfer/admin/blacklist", "fas fa-cogs", 1);
$this->add_menu("transfer", "whitelist", "Whitelist", "/transfer/admin/whitelist", "fas fa-cogs", 1);


