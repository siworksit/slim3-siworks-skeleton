<?php
// Routes

//Account # START
$app->get('/api/account/create', 'App\Example\Controller\AccountController:createAction');
$app->get('/api/account/update', 'App\Example\Controller\AccountController:updateAction');
$app->get('/api/account/list', 'App\Example\Controller\AccountController:fetchAllAction');
$app->get('/api/account/remove', 'App\Example\Controller\AccountController:removeAction');
//Account # END

//CONTRACT # START
$app->get('/api/contract/create', 'App\Example\Controller\ContractController:createAction');
$app->get('/api/contract/update', 'App\Example\Controller\ContractController:updateAction');
$app->get('/api/contract/list', 'App\Example\Controller\ContractController:fetchAllAction');
$app->get('/api/contract/remove', 'App\Example\Controller\ContractController:removeAction');
//CONTRACT # END
