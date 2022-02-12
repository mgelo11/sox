<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '5B81823BA2E86BC7EBE2A0D88983FEBC',
	'url' => 'http://127.0.0.1:8080/',
	'homepage_url' => 'http://127.0.0.1:8080/index.html',
	'icon' => '',
	'version' => '2021.5.6.0',
	'sitename' => 'soxumi',
	'lang_code' => 'en-GB',
	'public_folder' => '',
	'salt' => 'vukkre309gmijyq9g45yglo54638ix5340qfmt757stamx6bkqwwziha6egla',
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"edb7j5h8-imCpt\">Check word:</label><br />
			<input type=\"text\" id=\"edb7j5h8-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_mucahy3j.png',
	'notification_public_key' => '5787bca8f583aada',
	'notification_private_key' => 'a12dee2a08408d74',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://127.0.0.1:8080/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(38, 69, 89, 1); background-color: rgba(229, 230, 66, 1); padding: 8px 4px 8px 4px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: transparent transparent transparent transparent; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your order. We remind you that we are waiting for your payment.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details and the instructions to complete the payment.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_payment_opening' => 'Dear Customer,<br /><br />Thank you for your purchase. We confirm that we have correctly received your payment and that the order will be processed as soon as possible.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details.',
	'email_payment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase. We confirm the order was correctly processed and shipped. <br />Please find attached the list of the ordered products:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(64, 64, 64, 1)',
	'header_text_color' => 'rgba(255, 109, 59, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(255, 109, 59, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
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
));
$ecommerce->setSlugToProductIdMap(array(
	'product-1' => '6v9yr4tw',
	'product-2' => '1l54jmgp'
));
$ecommerce->setCategoriesData(array(
	'oswzkrxq' => array(
		'id' => 'oswzkrxq',
		'name' => 'ინფორმაციული ტქნოლოგიები',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'6v9yr4tw',
			'1l54jmgp'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_qaa0c04h_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bank Transfer',
		'description' => 'Pay later with Bank Transfer.',
		'email_text' => 'The following data is required for payments via Bank Transfers:

XXX YYY ZZZ

Please note that once the payment is completed it is necessary to send a copy of the receipt along with the Order Number.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Mail',
		'description' => 'The goods will be delivered in 3-5 days.',
		'email_text' => 'Shipping by Mail.\\nThe goods will be delivered in 3-5 days.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Express Delivery',
		'description' => 'The goods will be delivered in 1-2 days.',
		'email_text' => 'Shipping by Express Delivery.\\nThe goods will be delivered in 1-2 days.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional Demo 2021.5.6 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#404040" style="background-color: #404040;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Montserrat\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#404040';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Montserrat;';

// End of file x5settings.php