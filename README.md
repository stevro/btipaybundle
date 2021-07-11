# btipaybundle
Symfony 2 Bundle for BT IPay of Banca Transilvania

# install
composer require stevro/btipaybundle

#configuration
Add the following configuration to config.yml

stev_bti_pay:
    username: 'test'
    password: 'test'
    isTest: true
    
#usage
In a controller you can get the BTIPayClient from the container as:

/** @var BTIPayClient $btiPay */
$btiPay = $this->get('stev_btipay.client');
