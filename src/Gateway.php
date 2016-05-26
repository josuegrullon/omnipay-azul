<?php

namespace Omnipay\Azul;

use Omnipay\Common\AbstractGateway;

/**
 * Azul Gateway
 *
 * Quote: The Azul engine is basically a "black box" which processes a purchaser's payment.
 *
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Azul';
    }

    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'merchantKey' => '',
            'pdtKey' => '',
            'testMode' => false,
        );
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getMerchantKey()
    {
        return $this->getParameter('merchantKey');
    }

    public function setMerchantKey($value)
    {
        return $this->setParameter('merchantKey', $value);
    }

    public function getPdtKey()
    {
        return $this->getParameter('pdtKey');
    }

    public function setPdtKey($value)
    {
        return $this->setParameter('pdtKey', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Azul\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Azul\Message\CompletePurchaseRequest', $parameters);
    }
}
