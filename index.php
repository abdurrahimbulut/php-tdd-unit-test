<?php

require './vendor/autoload.php';

$member = new \User\PhpTddUnitTest\Member();
$members = $member->getMembers();
print_r($members);