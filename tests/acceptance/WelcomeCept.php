<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure my todo-app works');
$I->amOnPage('/todo-app.html');
$I->see('Todo App');
$I->checkOption('/html/body/div/div/div/ul/li[4]/input');
$I->checkOption('/html/body/div/div/div/ul/li[5]/input');
$I->fillField('//*[@id="todotext"]','run your first selenium test');
$I->click('//*[@id="addbutton"]');
$I->click('/html/body/div/div/div/a');

