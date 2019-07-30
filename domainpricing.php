<?php

function domain_pricing_hook($vars) {

	if ($vars['templatefile'] == 'domain-names') {
		$command = 'GetTLDPricing';
		$postData = array('currencyid' => '1',);
		$results = localAPI($command, $postData);
		return array ("domainpricing" => $results);
	}
}
add_hook("ClientAreaPage", 1, "domain_pricing_hook");

/*
* In /templates/theme/domain-names.tpl you can displayed your domains prices with this
* {$domainpricing.pricing.com.register[1]}{$domainpricing.currency.prefix}
* Replace .com by your domain extension
*/