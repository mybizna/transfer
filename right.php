<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("transfer", "transfer", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "transfer", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "transfer", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "transfer", "staff", view:true, add:true, edit:true);
$this->add_right("transfer", "transfer", "registered", view:true, add:true);
$this->add_right("transfer", "transfer", "guest", view:true, );

$this->add_right("transfer", "whitelist", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "whitelist", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "whitelist", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "whitelist", "staff", view:true, add:true, edit:true);
$this->add_right("transfer", "whitelist", "registered", view:true, add:true);
$this->add_right("transfer", "whitelist", "guest", view:true, );

$this->add_right("transfer", "blacklist", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "blacklist", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "blacklist", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "blacklist", "staff", view:true, add:true, edit:true);
$this->add_right("transfer", "blacklist", "registered", view:true, add:true);
$this->add_right("transfer", "blacklist", "guest", view:true, );

$this->add_right("transfer", "disallowedin", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "disallowedin", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "disallowedin", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "disallowedin", "staff", view:true, add:true, edit:true);
$this->add_right("transfer", "disallowedin", "registered", view:true, add:true);
$this->add_right("transfer", "disallowedin", "guest", view:true, );

$this->add_right("transfer", "allowedin", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "allowedin", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "allowedin", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("transfer", "allowedin", "staff", view:true, add:true, edit:true);
$this->add_right("transfer", "allowedin", "registered", view:true, add:true);
$this->add_right("transfer", "allowedin", "guest", view:true, );
