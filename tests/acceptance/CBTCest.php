<?php

require 'vendor/autoload.php';
include 'LocalConnection.php';
use CBT\LocalConnection;

class CBTCest
{
    public function _before(AcceptanceTester $I) {
        $local = new LocalConnection('you@yourdomain.com', 'yourauthkey');
        $local->start();
    }

    public function _after(AcceptanceTester $I) {
        $local->stop();
    }

    // tests
    public function tryToTest(AcceptanceTester $I) {
        // $I = new AcceptanceTester($scenario);
        $I->wantTo('ensure my todo-app works');
        $I->amOnPage('/todo-app.html');
        $I->see('Todo App');
        $I->checkOption('/html/body/div/div/div/ul/li[4]/input');
        $I->checkOption('/html/body/div/div/div/ul/li[5]/input');
        $I->fillField('//*[@id="todotext"]','run your first selenium test');
        $I->click('//*[@id="addbutton"]');
        $I->click('/html/body/div/div/div/a');
    }
}
