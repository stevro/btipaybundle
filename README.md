# btipaybundle
Symfony 2 Bundle for BT IPay of Banca Transilvania

# install
<pre><code>
composer require stev/btipay-bundle
</code></pre>

#configuration
Add the following configuration to config.yml
<pre><code>
stev_bti_pay:
    username: 'test'
    password: 'test'
    isTest: true
</code></pre>
#usage
In a controller you can get the BTIPayClient from the container as:
<pre><code>
/** @var BTIPayClient $btiPay */ 
$btiPay = $this->get('stev_btipay.client');
</code></pre>

#Code samples
For examples check https://github.com/stevro/btipay
