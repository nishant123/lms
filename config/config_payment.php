<?php
use Omnipay\Omnipay;
define('CLIENT_ID', 'AUepW_R8YYWL7R9nASWIkYSvoLg_3KzYFeb-tt0KMWuWOBwX_JmYlMGKMWbsg_bhPIB2CoNNy5AGk1dm');
define('CLIENT_SECRET', 'EFuwGqxMAPpSMCoxkmo6-WWnt02EjZFNtdN39Z9Ay-rmruF2gR2MmCPdQn1Rk1fH5z93yd96fB5hqP6s');
 
define('PAYPAL_RETURN_URL', BASE_URL.'paypal-success.php');
define('PAYPAL_CANCEL_URL', BASE_URL.'payment-cancel.php');
define('PAYPAL_CURRENCY', 'USD');
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live

define('STRIPE_TEST_PK', 'pk_test_51R7ChgQYNvdMxrXbiYsC7wdEbwwnX9PzaJmCSkaX5x7JS6hiNLjeQZs3D9lxQBO1RK5eRTFnLdWfhC4NdvOqELXs00dJCU7ALI');
define('STRIPE_TEST_SK', 'sk_test_51R7ChgQYNvdMxrXbdNWvXFLruPSe49gBrvWjUYvAPgL166Vbfu8vL9VGeQZNLK07Kh5a467l78jZryl5Geq1mVbV00UfyJblCu');

define('STRIPE_SUCCESS_URL', BASE_URL.'stripe-success.php');
define('STRIPE_CANCEL_URL', BASE_URL.'payment-cancel.php');