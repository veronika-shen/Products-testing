<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function CRUD1(AcceptanceTester $I){
//        read
        $I->amOnPage('http://localhost/Products-testing/index.php');
//        create
        $I->click('#create');
        $I->fillField('#name','TestName10');
        $I->fillField('#price','580');
        $I->fillField('#article','000009');
        $I->click('#submit');
        $I->amOnPage('http://localhost/Products-testing/index.php');
        $I->canSee('TestName9');
////        edit
        $I->click('#edit22');
        $I->fillField('name','EditTestName9');
        $I->fillField('price','9380');
        $I->fillField('article','000019');
        $I->click('submit');
        $I->amOnPage('http://localhost/Products-testing/index.php');
        $I->canSee('EditTestName9');
        $I->canSee('9380');
        $I->canSee('000019');
//        delete
        $I->click('#delete22');
        $I->cantSee('TestName9');
    }

    public function CRUD2(AcceptanceTester $I){
//        read
        $I->amOnPage('http://localhost/Products-testing/index.php');
        $I->click('#supplies');
        $I->amOnPage('http://localhost/Products-testing/supplies/index.php');
//        create
        $I->click('#createSup');
        $I->selectOption('#product', 'TestName10');
        $I->fillField('#date', '2023-01-01');
        $I->fillField('#count', '78');
        $I->click('#submit');
        $I->amOnPage('http://localhost/Products-testing/supplies/index.php');
        $I->canSee('TestName10');
////        edit
        $I->click('#edit14');
        $I->selectOption('#product', 'Test45');
        $I->fillField('#date', '2024-12-02');
        $I->fillField('#count', '54');
        $I->click('submit');
        $I->amOnPage('http://localhost/Products-testing/supplies/index.php');
        $I->canSee('Test45');
        $I->canSee('54');
        $I->canSee('2024-12-02');
//        delete
        $I->click('#delete13');
        $I->cantSee('2024-12-02');
    }
}
