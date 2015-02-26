<?php
    include_once('lib/model/userModel.php');

$modUser = new userModel();

$listUser = $modUser->getAll();
$test = $modUser->getById(1);

include_once('lib/vue/info.php');