<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomerCreditSpaceResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\CreditInfo
     */
    private ?\SmartDonusum\EInvoice\Type\CreditInfo $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\CreditInfo
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\CreditInfo
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\CreditInfo $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\CreditInfo $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

