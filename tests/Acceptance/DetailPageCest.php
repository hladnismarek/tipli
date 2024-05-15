<?php


namespace Tests\Acceptance;

use Codeception\Util\Locator;
use Tests\Support\AcceptanceTester;

class DetailPageCest
{
    public function DetailPageContainsAtLeastOneLeaflet(AcceptanceTester $I)
	{
		$I->amOnPage('/obchod/lidl');
		$I->seeElement('//table[@id="validLeaflets"]//tr | //table[@id="expiredLeaflets"]//tr');
	}
}
