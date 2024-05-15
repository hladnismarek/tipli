<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HomePageCest
{
    public function HomePageWorks(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->seeResponseCodeIs(200);
	}
}
