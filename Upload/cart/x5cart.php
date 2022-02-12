<?php

include ("../res/x5engine.php");
$products = array(
	'6v9yr4tw' => array(
		'id' => '6v9yr4tw',
		'name' => 'Product 1',
		'category' => 'oswzkrxq',
		'categoryPath' => array(
			'oswzkrxq'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 100,
		'singleFullPrice' => '83.33',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(),
		'thumb' => array(
			'type' => 'image/svg',
			'url' => 'http://cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-1',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 1',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 1',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'1l54jmgp' => array(
		'id' => '1l54jmgp',
		'name' => 'Product 2',
		'category' => 'oswzkrxq',
		'categoryPath' => array(
			'oswzkrxq'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 150,
		'singleFullPrice' => '125.00',
		'singleFullPricePlusVat' => '150.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(),
		'thumb' => array(
			'type' => 'image/svg',
			'url' => 'http://cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'product-2',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Product 2',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Product 2',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '150.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	)
);
$slugToProductIdMap = array(
	'product-1' => '6v9yr4tw',
	'product-2' => '1l54jmgp'
);
$params = array(
	'server_token' => '662hvukkre309gmijyq9g45yglo54638ix5340qfmt757sth3mx6bkqwwzihh36eglh3',
	'send_email_after_payment' => false,
	'cart' => Configuration::getCart()->setCartDataVersion('y2022m2d8s54957,993914')->setSendMode('email')->disableEmailNotification()->disableManagerNotification()->setProductsData($products)->setSlugToProductIdMap($slugToProductIdMap),
	'private_area' => Configuration::getPrivateArea(),
	'notifier' => Configuration::getNotifier()
);
CartRouter::handleRoute($params);

// End of file x5cart.php
