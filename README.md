# Omnipay: AZUL
**Under dev**

**Azul gateway for the Omnipay PHP payment processing library**


[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements paypro support for Omnipay.

## Install

This gateway can be installed with [Composer](https://getcomposer.org/):

``` bash
$ composer require josuegrullon/omnipay-azul:dev-master
```

## Usage

The following gateways are provided by this package:

 * Azul

## Example

```php

require_once  __DIR__ . '/vendor/autoload.php';

use Omnipay\Omnipay;

/** @var \Omnipay\Azul\Gateway $gateway */
$gateway = Omnipay::create('Azul');

$gateway->initialize([
    // Not yet
]);

$params = [];

$response = $gateway->purchase($params)->send();

if ($response->isSuccessful()) {
    echo 'Success!';
} elseif ($response->isRedirect()) {
    $response->redirect();
} else {
    echo 'Failed';
}
```

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay) repository.

## Parameters

You can set the following parameters:

 - apiKey (required): The PayPro.nl Api Key
 - returnUrl: The URL to show after payment has been completed.
 - notifyUrl: The URL to post the status to (postback url)
 - testMode: Boolean to indicate testing.

```

## Credits

- [All Contributors](../../contributors)


